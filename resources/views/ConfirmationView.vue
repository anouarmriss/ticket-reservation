<template>
    <div class="min-h-screen bg-gray-50 py-12">
      <div class="max-w-3xl mx-auto px-4">
        <div class="bg-white rounded-2xl shadow-xl p-8">
          <div class="text-center">
            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Reservation Confirmed!</h2>
            <p class="text-gray-600 mb-8">Your reservation has been successfully processed.</p>
            
            <div class="bg-gray-50 rounded-xl p-6 mb-8">
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Important Information</h3>
              <ul class="text-gray-600 text-left space-y-2">
                <li>• Please arrive 10 minutes before your scheduled time</li>
                <li>• Have your QR code ready for scanning</li>
                <li>• Follow all site guidelines and safety protocols</li>
              </ul>
            </div>
  
            <div class="space-x-4">
              <router-link 
                to="/" 
                class="inline-block bg-gray-200 text-gray-700 px-6 py-3 rounded-lg font-medium hover:bg-gray-300 transition duration-150"
              >
                Return Home
              </router-link>
              <a 
                href="#" 
                class="inline-block bg-cyan-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-cyan-700 transition duration-150"
                @click.prevent="downloadQRCode"
              >
                Download QR Code
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    methods: {
      downloadQRCode() {
        // Implement QR code download logic
      }
    }
  }
  </script>