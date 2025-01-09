<template>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
      <h2 class="text-2xl font-bold mb-6">Make a Reservation</h2>
      <form @submit.prevent="submitReservation" class="space-y-4">
        <div>
          <label class="block text-sm font-medium text-gray-700">Name</label>
          <input 
            v-model="formData.name" 
            type="text" 
            required 
            class="mt-1 block w-full rounded-md border p-2"
          />
        </div>
  
        <div>
          <label class="block text-sm font-medium text-gray-700">Email</label>
          <input 
            v-model="formData.email" 
            type="email" 
            required 
            class="mt-1 block w-full rounded-md border p-2"
          />
        </div>
  
        <div>
          <label class="block text-sm font-medium text-gray-700">Phone</label>
          <input 
            v-model="formData.phone" 
            type="tel" 
            required 
            class="mt-1 block w-full rounded-md border p-2"
          />
        </div>
  
        <div>
          <label class="block text-sm font-medium text-gray-700">Date</label>
          <input 
            v-model="formData.reservation_date" 
            type="date" 
            required 
            class="mt-1 block w-full rounded-md border p-2"
          />
        </div>
  
        <div>
          <label class="block text-sm font-medium text-gray-700">Time</label>
          <input 
            v-model="formData.reservation_time" 
            type="time" 
            required 
            class="mt-1 block w-full rounded-md border p-2"
          />
        </div>
  
        <button 
          type="submit" 
          class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700"
        >
          Submit Reservation
        </button>
      </form>
  
      <div v-if="qrCode" class="mt-6">
        <h3 class="text-lg font-medium text-gray-900">Your QR Code:</h3>
        <img :src="qrCode" alt="QR Code" class="mt-2 mx-auto"/>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios'
  
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
        qrCode: null
      }
    },
    methods: {
      async submitReservation() {
        try {
          const response = await axios.post('http://localhost:8000/api/reservations', this.formData)
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