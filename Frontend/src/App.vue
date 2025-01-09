<template>
  <div>
    <nav class="bg-gray-800 p-4">
      <div class="max-w-7xl mx-auto flex justify-between items-center">
        <router-link to="/" class="text-white text-xl font-bold">Tourist Site</router-link>
        <div class="space-x-4">
          <router-link to="/reservation" class="text-white hover:text-gray-300">Make Reservation</router-link>
          <router-link to="/reservations" class="text-white hover:text-gray-300">View Reservations</router-link>
        </div>
      </div>
    </nav>

    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'App'
}
</script>