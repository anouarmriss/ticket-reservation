<template>
  <div class="app-wrapper">
    <nav class="bg-gray-800 w-full">
      <div class="max-w-full px-4 py-4 flex justify-between items-center">
        <router-link to="/" class="text-white text-xl font-bold">Tourist Site</router-link>
        <div class="space-x-4">
          <router-link to="/reservation" class="text-white hover:text-gray-300">Make Reservation</router-link>
          <router-link to="/reservations" class="text-white hover:text-gray-300">View Reservations</router-link>
        </div>
      </div>
    </nav>
    
    <main class="w-full">
      <router-view></router-view>
    </main>
  </div>
</template>

<style>
.app-wrapper {
  width: 100%;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

main {
  flex: 1;
}
</style>