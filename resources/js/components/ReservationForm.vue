<template>
  <div class="min-h-screen bg-gray-50">
    <div class="max-w-4xl mx-auto py-12 px-4">
      <!-- Form Section -->
      <div class="bg-white rounded-lg shadow-lg p-8">
        <form @submit.prevent="submitReservation" class="space-y-6">
          <!-- Name Field -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
            <input 
              v-model="formData.name"
              type="text"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-md"
              placeholder="Enter your full name"
            />
          </div>

          <!-- Email Field -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
            <input 
              v-model="formData.email"
              type="email"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-md"
              placeholder="Enter your email"
            />
          </div>

          <!-- Phone Field -->
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input 
              v-model="formData.phone"
              type="tel"
              required
              class="w-full px-4 py-2 border border-gray-300 rounded-md"
              placeholder="Enter your phone number"
            />
          </div>

          <!-- Date and Time Selection -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Visit Date</label>
              <input 
                v-model="formData.reservation_date"
                type="date"
                required
                :min="getCurrentDate()"
                class="w-full px-4 py-2 border border-gray-300 rounded-md"
              />
            </div>
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1">Visit Time</label>
              <select 
                v-model="formData.reservation_time"
                required
                class="w-full px-4 py-2 border border-gray-300 rounded-md"
              >
                <option value="">Select a time</option>
                <option v-for="time in availableTimes" :key="time" :value="time">
                  {{ time }}
                </option>
              </select>
            </div>
          </div>

          <!-- Submit Button -->
          <button 
            type="submit"
            class="w-full bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-blue-700"
          >
            Confirm Reservation
          </button>
        </form>
      </div>

      <!-- QR Code Display -->
      <div v-if="qrCode" class="mt-8 text-center">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Your Reservation QR Code</h2>
        <div class="bg-white p-6 rounded-lg shadow-lg inline-block">
          <img :src="qrCode" alt="QR Code" class="mx-auto mb-4"/>
          <p class="text-sm text-gray-600">Please show this QR code at the entrance</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import api from '../services/api.js'

export default {
  data() {
    return {
      formData: {
        name: '',
        email: '',
        phone: '',
        reservation_date: '',
        reservation_time: ''
      },
      qrCode: null,
      availableTimes: [
        '09:00', '10:00', '11:00', '12:00',
        '13:00', '14:00', '15:00', '16:00',
        '17:00'
      ]
    }
  },
  methods: {
    getCurrentDate() {
      const today = new Date()
      const year = today.getFullYear()
      const month = String(today.getMonth() + 1).padStart(2, '0')
      const day = String(today.getDate()).padStart(2, '0')
      return `${year}-${month}-${day}`
    },
    async submitReservation() {
      try {
        const response = await api.post('/reservations', this.formData)
        if (response.data.success) {
          this.qrCode = response.data.qr_code
          alert('Reservation created successfully!')
        } else {
          alert('Error: ' + response.data.message)
        }
      } catch (error) {
        console.error('Error details:', error)
        alert('Error making reservation: ' + (error.response?.data?.message || error.message))
      }
    }
  }
}
</script>