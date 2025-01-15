<template>
  <div class="min-h-screen w-full bg-gradient-to-b from-gray-50 to-white">
    <!-- Main Content -->
    <div class="w-full px-4">
      <!-- Welcome Section -->
      <div class="text-center py-16">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Tourist Site</h1>
        <p class="text-xl text-gray-600 mb-8">Book your free visit today</p>
        <router-link 
          to="/reservation" 
          class="inline-block bg-cyan-600 text-white px-8 py-3 rounded-lg hover:bg-cyan-700 transition-colors shadow-lg hover:shadow-xl"
        >
          Book Now
        </router-link>
      </div>

      <!-- Info Cards -->
      <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto px-4 mb-16">
        <!-- Your existing cards code -->
      </div>

      <!-- How It Works -->
      <div class="bg-white shadow-lg max-w-7xl mx-auto px-4 py-8 mb-16">
        <!-- Your existing How It Works code -->
      </div>
    </div>
  </div>
</template>
<style>
.home-container {
  width: 100%; /* Ensure the container spans the full width */
  height: 100%;
  display: flex;
  flex-direction: column;
}

.header, .content {
  width: 100%; /* Ensure child elements also span full width */
}

.content {
  flex-grow: 1; /* Push content to fill available space */
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
</style>