<template>
    <div class="min-h-screen bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-16">
          <h1 class="text-4xl font-bold text-gray-900 mb-4">Welcome to Our Tourist Site</h1>
          <p class="text-xl text-gray-600 mb-8">Experience the beauty and history of our landmark attraction</p>
          <router-link 
            to="/reservation" 
            class="inline-block bg-cyan-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-cyan-700 transition duration-150"
          >
            Book Your Visit
          </router-link>
        </div>
  
        <!-- Announcements Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
          <h2 class="text-2xl font-bold text-gray-900 mb-6">Important Announcements</h2>
          <div class="space-y-6">
            <div class="p-4 bg-yellow-50 rounded-lg border border-yellow-200">
              <h3 class="font-semibold text-yellow-800">Holiday Hours</h3>
              <p class="text-yellow-700">Our site will be operating on special hours during the upcoming holidays.</p>
            </div>
            <div class="p-4 bg-green-50 rounded-lg border border-green-200">
              <h3 class="font-semibold text-green-800">New Exhibition</h3>
              <p class="text-green-700">Visit our new exhibition starting from next week!</p>
            </div>
          </div>
        </div>
  
        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">Opening Hours</h3>
            <p class="text-gray-600">Monday - Sunday: 9:00 AM - 5:00 PM</p>
          </div>
          <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">Location</h3>
            <p class="text-gray-600">123 Tourist Street, City, Country</p>
          </div>
          <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-3">Contact</h3>
            <p class="text-gray-600">Phone: +1 234 567 890</p>
          </div>
        </div>
      </div>
    </div>
  </template>