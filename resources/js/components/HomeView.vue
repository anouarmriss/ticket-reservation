<template>
  <div>
    <!-- Hero Section -->
    <div class="relative h-[600px]">
      <img 
        src="C:\Users\anwar\ticket-reservation\public\images\gates.jpg"
        alt="Tourist Site Main"
        class="w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-white">
        <h1 class="text-5xl font-bold mb-4">Welcome to Tourist Site</h1>
        <p class="text-xl mb-8">Experience the beauty of our historic location</p>
        <router-link 
          to="/reservation" 
          class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition-colors"
        >
          Book Now
        </router-link>
      </div>
    </div>

    <!-- Information Cards -->
    <div class="max-w-7xl mx-auto px-4 py-16">
      <div class="grid md:grid-cols-3 gap-8">
        <!-- Opening Hours -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
          <img 
            src="C:\Users\anwar\ticket-reservation\public\images\capture-the-magic.jpg" 
            alt="Opening Hours" 
            class="w-full h-48 object-cover"
          />
          <div class="p-6">
            <h2 class="text-2xl font-bold mb-4">Opening Hours</h2>
            <ul class="space-y-2">
              <li>Monday - Sunday</li>
              <li>9:00 AM - 6:00 PM</li>
              <li class="text-red-600">Last entry at 5:30 PM</li>
            </ul>
          </div>
        </div>

        <!-- Visit Information -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
          <img 
            src="C:\Users\anwar\ticket-reservation\public\images\foyer-guide.jpg" 
            alt="Visit Information" 
            class="w-full h-48 object-cover"
          />
          <div class="p-6">
            <h2 class="text-2xl font-bold mb-4">Visit Information</h2>
            <ul class="space-y-2">
              <li>Free Entry</li>
              <li>Average visit: 45 minutes</li>
              <li>Guided tours available</li>
            </ul>
          </div>
        </div>

        <!-- Important Notes -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
          <img 
            src="C:\Users\anwar\ticket-reservation\public\images\kimpton-fitzroy.jpg" 
            alt="Important Notes" 
            class="w-full h-48 object-cover"
          />
          <div class="p-6">
            <h2 class="text-2xl font-bold mb-4">Important Notes</h2>
            <ul class="space-y-2">
              <li>Booking required</li>
              <li>Present QR code at entrance</li>
              <li>No photography allowed</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- How It Works -->
    <div class="bg-gray-50 py-16">
      <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">How It Works</h2>
        <div class="grid md:grid-cols-4 gap-8">
          <!-- Book Online -->
          <div class="text-center">
            <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
              1
            </div>
            <h3 class="text-xl font-bold mb-2">Book Online</h3>
            <p class="text-gray-600">Reserve your visit in advance</p>
          </div>

          <!-- Get QR Code -->
          <div class="text-center">
            <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
              2
            </div>
            <h3 class="text-xl font-bold mb-2">Get QR Code</h3>
            <p class="text-gray-600">Receive instant confirmation</p>
          </div>

          <!-- Arrive on Time -->
          <div class="text-center">
            <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
              3
            </div>
            <h3 class="text-xl font-bold mb-2">Arrive on Time</h3>
            <p class="text-gray-600">Come at your booked slot</p>
          </div>

          <!-- Enjoy Visit -->
          <div class="text-center">
            <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">
              4
            </div>
            <h3 class="text-xl font-bold mb-2">Enjoy Visit</h3>
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