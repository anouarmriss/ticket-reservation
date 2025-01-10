<template>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold mb-6">QR Code Validator</h2>
      
      <div class="space-y-4">
        <input 
          v-model="qrCode"
          type="text"
          placeholder="Enter QR Code"
          class="w-full p-2 border rounded-md"
        />
        
        <button 
          @click="validateQrCode"
          class="w-full py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700"
        >
          Validate QR Code
        </button>
  
        <div v-if="validationResult" :class="validationResult.status === 'Valid QR Code' ? 'text-green-600' : 'text-red-600'" class="mt-4">
          <p class="font-bold">{{ validationResult.status }}</p>
          <div v-if="validationResult.reservation" class="mt-2 text-gray-700">
            <p>Date: {{ formatDate(validationResult.reservation.reservation_date) }}</p>
            <p>Time: {{ formatTime(validationResult.reservation.reservation_time) }}</p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios'
  
  export default {
    data() {
      return {
        qrCode: '',
        validationResult: null
      }
    },
    methods: {
      async validateQrCode() {
        try {
          const response = await axios.get(`http://localhost:8000/api/validate/${this.qrCode}`)
          this.validationResult = response.data
        } catch (error) {
          this.validationResult = {
            status: 'Invalid QR Code'
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