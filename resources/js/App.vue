<template>
  <div>
    <nav class="bg-white shadow-lg">
      <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
          <div class="flex">
            <router-link to="/" class="flex items-center">
              <span class="text-xl font-bold text-gray-900">Tourist Site</span>
            </router-link>
          </div>
          <div class="flex items-center">
            <router-link 
              to="/reservation" 
              class="text-gray-700 hover:text-cyan-600 px-3 py-2 rounded-md text-sm font-medium"
            >
              Book Now
            </router-link>
          </div>
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