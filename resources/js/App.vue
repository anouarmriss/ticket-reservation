<template>
  <div class="app">
    <h1>E-Ticket System</h1>
    <reservation-form></reservation-form>
  </div>
</template>

<script>
import ReservationForm from './components/ReservationForm.vue'

export default {
  name: 'App',
  components: {
    ReservationForm
  },
  mounted() {
    console.log('App component mounted')
  }
}
</script>