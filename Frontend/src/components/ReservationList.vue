<template>
    <div class="max-w-6xl mx-auto mt-10 p-6">
      <h2 class="text-2xl font-bold mb-6">Reservations List</h2>
      
      <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-lg">
          <thead class="bg-gray-100">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">QR Code</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr v-for="reservation in reservations" :key="reservation.id" class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap">{{ formatDate(reservation.reservation_date) }}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{ formatTime(reservation.reservation_time) }}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{ reservation.user.name }}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{ reservation.user.email }}</td>
              <td class="px-6 py-4 whitespace-nowrap">{{ reservation.user.phone }}</td>
              <td class="px-6 py-4 whitespace-nowrap">
                <img 
                  :src="`http://localhost:8000/storage/qrcodes/${reservation.qr_code}.png`" 
                  :alt="reservation.qr_code"
                  class="h-10 w-10"
                />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios'
  
  export default {
    data() {
      return {
        reservations: []
      }
    },
    async created() {
      try {
        const response = await axios.get('http://localhost:8000/api/reservations')
        if (response.data.success) {
          this.reservations = response.data.reservations
        }
      } catch (error) {
        console.error('Error fetching reservations:', error)
      }
    },
    methods: {
      formatDate(date) {
        return new Date(date).toLocaleDateString()
      },
      formatTime(time) {
        return time.substring(0, 5)
      }
    }
  }
  </script>
  