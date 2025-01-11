<template>
  <div class="flex flex-col min-h-screen w-full">
    <nav class="bg-gray-800 p-4 w-full">
      <div class="max-w-7xl mx-auto flex justify-between items-center">
        <router-link to="/" class="text-white text-xl font-bold">Tourist Site</router-link>
        <div class="space-x-4">
          <router-link to="/reservation" class="text-white hover:text-gray-300">Make Reservation</router-link>
          <router-link to="/reservations" class="text-white hover:text-gray-300">View Reservations</router-link>
        </div>
      </div>
    </nav>
    <main class="flex-grow w-full">
      <router-view></router-view>
    </main>
  </div>
</template>


<script>
export default {
  name: 'App'
}
</script>

<style>
#app {
  height: 100vh; /* Viewport height */
  width: 100vw; /* Viewport width */
  margin: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
</style>