<template>
  <div class="min-h-screen w-full bg-gradient-to-b from-gray-50 to-white">
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-cyan-600 to-cyan-800 text-white">
      <div class="max-w-7xl mx-auto px-4 py-24 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-4xl md:text-5xl font-bold mb-6">Welcome to Tourist Site</h1>
          <p class="text-xl md:text-2xl mb-8 opacity-90">Experience the beauty and history of our landmark attraction</p>
          <router-link 
            to="/reservation" 
            class="inline-block bg-white text-cyan-800 px-8 py-4 rounded-lg font-bold hover:bg-gray-100 transition-colors shadow-lg hover:shadow-xl text-lg"
          >
            Book Your Free Visit
          </router-link>
        </div>
      </div>
    </div>

    <!-- Announcements Section -->
    <div class="max-w-7xl mx-auto px-4 py-16">
      <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Important Announcements</h2>
      <div class="grid md:grid-cols-2 gap-6">
        <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-6">
          <h3 class="font-semibold text-yellow-800 text-lg mb-2">Special Holiday Hours</h3>
          <p class="text-yellow-700">During the upcoming holiday season, we will be operating with extended hours.</p>
        </div>
        <div class="bg-green-50 border border-green-200 rounded-xl p-6">
          <h3 class="font-semibold text-green-800 text-lg mb-2">New Exhibition Opening</h3>
          <p class="text-green-700">Join us next week for the grand opening of our latest exhibition.</p>
        </div>
      </div>
    </div>

    <!-- Info Cards -->
    <div class="max-w-7xl mx-auto px-4 py-16 bg-gray-50">
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow">
          <div class="text-cyan-600 mb-4">
            <!-- Clock Icon -->
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Opening Hours</h3>
          <p class="text-gray-600">
            Monday - Friday: 9:00 AM - 5:00 PM<br>
            Weekend: 10:00 AM - 4:00 PM
          </p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow">
          <div class="text-cyan-600 mb-4">
            <!-- Location Icon -->
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Location</h3>
          <p class="text-gray-600">
            123 Tourism Street<br>
            City, Country 12345
          </p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-shadow">
          <div class="text-cyan-600 mb-4">
            <!-- Phone Icon -->
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Contact</h3>
          <p class="text-gray-600">
            Phone: +1 234 567 890<br>
            Email: info@toursite.com
          </p>
        </div>
      </div>
    </div>

    <!-- How It Works Section -->
    <div class="max-w-7xl mx-auto px-4 py-16">
      <h2 class="text-2xl font-bold text-gray-900 mb-12 text-center">How It Works</h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="text-center">
          <div class="bg-cyan-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-cyan-600 font-bold text-xl">1</span>
          </div>
          <h3 class="font-semibold text-lg mb-2">Book Your Visit</h3>
          <p class="text-gray-600">Select your preferred date and time</p>
        </div>
        <div class="text-center">
          <div class="bg-cyan-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-cyan-600 font-bold text-xl">2</span>
          </div>
          <h3 class="font-semibold text-lg mb-2">Get Your QR Code</h3>
          <p class="text-gray-600">Receive confirmation by email</p>
        </div>
        <div class="text-center">
          <div class="bg-cyan-100 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-cyan-600 font-bold text-xl">3</span>
          </div>
          <h3 class="font-semibold text-lg mb-2">Visit Us</h3>
          <p class="text-gray-600">Show your QR code at entrance</p>
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