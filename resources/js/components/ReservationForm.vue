<script>
import api from '../services/api'  // Update this line

export default {
  data() {
    return {
      formData: {
        name: '',
        email: '',
        phone: '',
        reservation_date: '',
        reservation_time: ''
      },
      qrCode: null,
      availableTimes: [
        '09:00', '10:00', '11:00', '12:00',
        '13:00', '14:00', '15:00', '16:00',
        '17:00'
      ]
    }
  },
  methods: {
    getCurrentDate() {
      const today = new Date()
      const year = today.getFullYear()
      const month = String(today.getMonth() + 1).padStart(2, '0')
      const day = String(today.getDate()).padStart(2, '0')
      return `${year}-${month}-${day}`
    },
    async submitReservation() {
      try {
        const response = await api.post('/reservations', this.formData)
        if (response.data.success) {
          this.qrCode = response.data.qr_code
          alert('Reservation created successfully!')
        } else {
          alert('Error: ' + response.data.message)
        }
      } catch (error) {
        console.error('Error details:', error)
        alert('Error making reservation: ' + (error.response?.data?.message || error.message))
      }
    }
  }
}
</script>