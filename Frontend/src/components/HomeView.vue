<template>
  <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm py-4 mb-10">
      <div class="max-w-4xl mx-auto px-4">
        <div class="flex flex-col items-center space-y-2">
          <router-link to="/" class="text-2xl font-semibold text-gray-800 hover:text-cyan-600 transition-colors">
            Tourist Site
          </router-link>
          <div class="flex space-x-8">
            <router-link 
              to="/reservation" 
              class="text-gray-600 hover:text-cyan-600 transition-colors font-medium"
            >
              Make Reservation
            </router-link>
            <router-link 
              to="/reservations" 
              class="text-gray-600 hover:text-cyan-600 transition-colors font-medium"
            >
              View Reservations
            </router-link>
          </div>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-4">
      <!-- Welcome Section -->
      <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Tourist Site</h1>
        <p class="text-xl text-gray-600 mb-8">Book your free visit today</p>
        <router-link 
          to="/reservation" 
          class="inline-block bg-cyan-600 text-white px-8 py-3 rounded-lg hover:bg-cyan-700 transition-colors shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-transform"
        >
          Book Now
        </router-link>
      </div>

      <!-- Info Cards -->
      <div class="grid md:grid-cols-3 gap-8 mb-16">
        <!-- Opening Hours -->
        <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-cyan-100 rounded-full flex items-center justify-center">
              <span class="text-2xl">🕒</span>
            </div>
            <h2 class="ml-4 text-xl font-semibold text-gray-800">Opening Hours</h2>
          </div>
          <div class="space-y-2 text-gray-600">
            <p>Monday - Sunday</p>
            <p>9:00 AM - 6:00 PM</p>
            <p class="text-red-500 font-medium">Last entry at 5:30 PM</p>
          </div>
        </div>

        <!-- Visit Information -->
        <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
              <span class="text-2xl">ℹ️</span>
            </div>
            <h2 class="ml-4 text-xl font-semibold text-gray-800">Visit Information</h2>
          </div>
          <div class="space-y-2 text-gray-600">
            <p>Free Entry</p>
            <p>Average visit: 45 minutes</p>
            <p>Guided tours available</p>
          </div>
        </div>

        <!-- Important Notes -->
        <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100 hover:shadow-xl transition-shadow">
          <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center">
              <span class="text-2xl">📝</span>
            </div>
            <h2 class="ml-4 text-xl font-semibold text-gray-800">Important Notes</h2>
          </div>
          <div class="space-y-2 text-gray-600">
            <p>Booking required</p>
            <p>Present QR code at entrance</p>
            <p>No photography allowed</p>
          </div>
        </div>
      </div>

      <!-- How It Works -->
      <div class="bg-white rounded-3xl shadow-lg p-8 mb-16">
        <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">How It Works</h2>
        <div class="grid md:grid-cols-4 gap-8">
          <div class="text-center">
            <div class="w-12 h-12 bg-cyan-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold">
              1
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Book Online</h3>
            <p class="text-gray-600">Reserve your visit in advance</p>
          </div>

          <div class="text-center">
            <div class="w-12 h-12 bg-cyan-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold">
              2
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Get QR Code</h3>
            <p class="text-gray-600">Receive instant confirmation</p>
          </div>

          <div class="text-center">
            <div class="w-12 h-12 bg-cyan-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold">
              3
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Arrive on Time</h3>
            <p class="text-gray-600">Come at your booked slot</p>
          </div>

          <div class="text-center">
            <div class="w-12 h-12 bg-cyan-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold">
              4
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Enjoy Visit</h3>
            <p class="text-gray-600">Have a great experience</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'HomeView'
}
</script>