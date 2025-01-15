<template>
  <div class="min-h-screen w-full bg-gradient-to-b from-gray-50 to-white">
    <!-- Hero Section -->
    <div class="relative bg-gray-900 h-[60vh] mb-16">
      <div class="absolute inset-0 bg-hero bg-cover bg-center bg-no-repeat">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      </div>
      <div class="relative z-10 h-full flex flex-col items-center justify-center text-white text-center px-4">
        <h1 class="text-5xl font-bold mb-4">Welcome to Tourist Site</h1>
        <p class="text-xl text-gray-200 mb-8">Book your free visit today</p>
        <router-link 
          to="/reservation" 
          class="inline-block bg-cyan-600 text-white px-8 py-3 rounded-lg hover:bg-cyan-700 transition-colors shadow-lg hover:shadow-xl"
        >
          Book Now
        </router-link>
      </div>
    </div>
  </div>
</template>

<style scoped>
.bg-hero {
  background-image: url('/images/gates.jpg');
}
</style>