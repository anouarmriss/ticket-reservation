<template>
  <div class="min-h-screen">
    <nav class="bg-gray-800 p-4">
      <div class="max-w-7xl mx-auto flex justify-between items-center">
        <router-link to="/" class="text-white text-xl font-bold">Tourist Site</router-link>
        <div class="space-x-4">
          <router-link to="/reservation" class="text-white hover:text-gray-300">Make Reservation</router-link>
          <router-link to="/reservations" class="text-white hover:text-gray-300">View Reservations</router-link>
          <template v-if="isAdmin">
            <router-link to="/admin" class="text-white hover:text-gray-300">Admin</router-link>
            <button @click="logout" class="text-white hover:text-gray-300">Logout</button>
          </template>
          <router-link v-else to="/login" class="text-white hover:text-gray-300">Admin Login</router-link>
        </div>
      </div>
    </nav>

    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      isAdmin: false
    }
  },
  methods: {
    checkAdminStatus() {
      this.isAdmin = localStorage.getItem('isAdmin') === 'true'
    },
    logout() {
      localStorage.removeItem('isAdmin')
      this.isAdmin = false
      if (this.$route.meta.requiresAuth) {
        this.$router.push('/login')
      }
    }
  },
  mounted() {
    this.checkAdminStatus()
    window.addEventListener('storage', this.checkAdminStatus)
  },
  unmounted() {
    window.removeEventListener('storage', this.checkAdminStatus)
  }
}
</script>