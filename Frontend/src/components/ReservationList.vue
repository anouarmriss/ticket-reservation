<template>
  <div class="max-w-6xl mx-auto mt-10 p-6">
    <h2 class="text-2xl font-bold mb-6">Reservations List</h2>
    
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white rounded-lg overflow-hidden shadow-lg">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 text-left">Date</th>
            <th class="px-6 py-3 text-left">Time</th>
            <th class="px-6 py-3 text-left">Name</th>
            <th class="px-6 py-3 text-left">Email</th>
            <th class="px-6 py-3 text-left">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr v-for="reservation in reservations" :key="reservation.id">
            <td class="px-6 py-4">
              <div v-if="editingId === reservation.id">
                <input 
                  type="date" 
                  v-model="editForm.reservation_date"
                  class="border rounded px-2 py-1"
                >
              </div>
              <span v-else>{{ formatDate(reservation.reservation_date) }}</span>
            </td>
            <td class="px-6 py-4">
              <div v-if="editingId === reservation.id">
                <input 
                  type="time" 
                  v-model="editForm.reservation_time"
                  class="border rounded px-2 py-1"
                >
              </div>
              <span v-else>{{ formatTime(reservation.reservation_time) }}</span>
            </td>
            <td class="px-6 py-4">{{ reservation.user.name }}</td>
            <td class="px-6 py-4">{{ reservation.user.email }}</td>
            <td class="px-6 py-4">
              <div v-if="editingId === reservation.id">
                <button 
                  @click="saveEdit(reservation.id)"
                  class="bg-green-500 text-white px-3 py-1 rounded mr-2"
                >
                  Save
                </button>
                <button 
                  @click="cancelEdit"
                  class="bg-gray-500 text-white px-3 py-1 rounded"
                >
                  Cancel
                </button>
              </div>
              <div v-else>
                <button 
                  @click="startEdit(reservation)"
                  class="bg-blue-500 text-white px-3 py-1 rounded mr-2"
                >
                  Edit
                </button>
                <button 
                  @click="cancelReservation(reservation.id)"
                  class="bg-red-500 text-white px-3 py-1 rounded"
                >
                  Cancel
                </button>
              </div>
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
      reservations: [],
      editingId: null,
      editForm: {
        reservation_date: '',
        reservation_time: ''
      }
    }
  },
  async created() {
    await this.loadReservations()
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
    startEdit(reservation) {
      this.editingId = reservation.id
      this.editForm = {
        reservation_date: reservation.reservation_date,
        reservation_time: reservation.reservation_time
      }
    },
    async saveEdit(id) {
      try {
        await axios.put(`http://localhost:8000/api/reservations/${id}`, this.editForm)
        await this.loadReservations()
        this.editingId = null
      } catch (error) {
        alert('Error updating reservation: ' + error.response?.data?.message)
      }
    },
    cancelEdit() {
      this.editingId = null
    },
    async cancelReservation(id) {
      if (confirm('Are you sure you want to cancel this reservation?')) {
        try {
          await axios.delete(`http://localhost:8000/api/reservations/${id}`)
          await this.loadReservations()
        } catch (error) {
          alert('Error cancelling reservation: ' + error.response?.data?.message)
        }
      }
    },
    formatDate(date) {
      return new Date(date).toLocaleDateString()
    },
    formatTime(time) {
      return time.substring(0, 5)
    }
  }
}
</script>