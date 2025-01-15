<template>
    <div class="min-h-screen bg-gray-50 p-6">
      <div class="max-w-7xl mx-auto">
        <!-- Admin Header -->
        <div class="mb-8">
          <h1 class="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
          <p class="text-gray-600">Manage all reservations</p>
        </div>
  
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-2">Total Reservations</h3>
            <p class="text-3xl font-bold text-blue-600">{{ reservations.length }}</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-2">Today's Reservations</h3>
            <p class="text-3xl font-bold text-green-600">{{ todayReservations.length }}</p>
          </div>
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-2">Upcoming Reservations</h3>
            <p class="text-3xl font-bold text-purple-600">{{ upcomingReservations.length }}</p>
          </div>
        </div>
  
        <!-- Reservations Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
          <div class="p-4">
            <div class="flex justify-between items-center mb-4">
              <h2 class="text-xl font-semibold">All Reservations</h2>
              <input 
                type="text" 
                v-model="search" 
                placeholder="Search reservations..." 
                class="px-4 py-2 border rounded-lg"
              >
            </div>
          </div>
          <div class="overflow-x-auto">
            <table class="w-full">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                <tr v-for="reservation in filteredReservations" :key="reservation.id">
                  <td class="px-6 py-4">{{ formatDate(reservation.reservation_date) }}</td>
                  <td class="px-6 py-4">{{ formatTime(reservation.reservation_time) }}</td>
                  <td class="px-6 py-4">{{ reservation.user.name }}</td>
                  <td class="px-6 py-4">{{ reservation.user.email }}</td>
                  <td class="px-6 py-4">{{ reservation.user.phone }}</td>
                  <td class="px-6 py-4">
                    <span :class="getStatusClass(reservation)">
                      {{ getStatus(reservation) }}
                    </span>
                  </td>
                  <td class="px-6 py-4">
                    <button 
                      @click="cancelReservation(reservation.id)"
                      class="text-red-600 hover:text-red-900"
                    >
                      Cancel
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios'
  
  export default {
    name: 'AdminView',
    data() {
      return {
        reservations: [],
        search: ''
      }
    },
    computed: {
      filteredReservations() {
        return this.reservations.filter(res => {
          const searchTerm = this.search.toLowerCase()
          return res.user.name.toLowerCase().includes(searchTerm) ||
                 res.user.email.toLowerCase().includes(searchTerm)
        })
      },
      todayReservations() {
        const today = new Date().toISOString().split('T')[0]
        return this.reservations.filter(res => res.reservation_date === today)
      },
      upcomingReservations() {
        const today = new Date().toISOString().split('T')[0]
        return this.reservations.filter(res => res.reservation_date > today)
      }
    },
    methods: {
      async loadReservations() {
        try {
          const response = await axios.get('http://localhost:8000/api/reservations')
          this.reservations = response.data.reservations
        } catch (error) {
          console.error('Error loading reservations:', error)
        }
      },
      async cancelReservation(id) {
        if (confirm('Are you sure you want to cancel this reservation?')) {
          try {
            await axios.delete(`http://localhost:8000/api/reservations/${id}`)
            this.loadReservations()
          } catch (error) {
            console.error('Error cancelling reservation:', error)
          }
        }
      },
      formatDate(date) {
        return new Date(date).toLocaleDateString()
      },
      formatTime(time) {
        return time.substring(0, 5)
      },
      getStatus(reservation) {
        const today = new Date().toISOString().split('T')[0]
        if (reservation.reservation_date < today) return 'Completed'
        if (reservation.reservation_date === today) return 'Today'
        return 'Upcoming'
      },
      getStatusClass(reservation) {
        const status = this.getStatus(reservation)
        return {
          'Completed': 'px-2 py-1 rounded-full text-xs bg-gray-100 text-gray-800',
          'Today': 'px-2 py-1 rounded-full text-xs bg-green-100 text-green-800',
          'Upcoming': 'px-2 py-1 rounded-full text-xs bg-blue-100 text-blue-800'
        }[status]
      }
    },
    mounted() {
      this.loadReservations()
    }
  }
  </script>