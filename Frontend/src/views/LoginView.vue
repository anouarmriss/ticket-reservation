<template>
    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
      <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="text-center text-3xl font-bold text-gray-900">Admin Login</h2>
      </div>
  
      <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
          <form class="space-y-6" @submit.prevent="login">
            <!-- Email Input -->
            <div>
              <label class="block text-sm font-medium text-gray-700">Email</label>
              <div class="mt-1">
                <input 
                  v-model="email" 
                  type="email" 
                  required 
                  class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                />
              </div>
            </div>
  
            <!-- Password Input -->
            <div>
              <label class="block text-sm font-medium text-gray-700">Password</label>
              <div class="mt-1">
                <input 
                  v-model="password" 
                  type="password" 
                  required 
                  class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                />
              </div>
            </div>
  
            <!-- Error Message -->
            <div v-if="error" class="text-red-600 text-sm">
              {{ error }}
            </div>
  
            <!-- Submit Button -->
            <div>
              <button 
                type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
              >
                Sign in
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'LoginView',
    data() {
      return {
        email: '',
        password: '',
        error: null
      }
    },
    methods: {
      async login() {
        try {
          // For now, using hardcoded credentials
          if (this.email === 'admin@example.com' && this.password === 'admin123') {
            localStorage.setItem('isAdmin', 'true')
            this.$router.push('/admin')
          } else {
            this.error = 'Invalid credentials'
          }
        } catch (error) {
          this.error = error.message
        }
      }
    }
  }
  </script>