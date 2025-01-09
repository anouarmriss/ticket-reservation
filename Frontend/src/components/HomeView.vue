<template>
    <div class="max-w-4xl mx-auto mt-10 p-6">
      <h1 class="text-4xl font-bold mb-6">Welcome to Tourist Site Booking</h1>
      <p class="text-lg mb-8">Book your visit now and get instant confirmation with QR code access.</p>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h2 class="text-2xl font-semibold mb-4">How to Book</h2>
          <ul class="space-y-2">
            <li>1. Fill in your details</li>
            <li>2. Select your preferred date and time</li>
            <li>3. Receive your QR code instantly</li>
            <li>4. Show QR code at entrance</li>
          </ul>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow-lg">
          <h2 class="text-2xl font-semibold mb-4">Opening Hours</h2>
          <p class="mb-4">Monday - Sunday: 9:00 AM - 6:00 PM</p>
          <router-link 
            to="/reservation" 
            class="inline-block bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700"
          >
            Book Now
          </router-link>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'HomeView'
  }
  </script>