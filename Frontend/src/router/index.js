import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../components/HomeView.vue";
import ReservationForm from "../components/ReservationForm.vue";
import ReservationList from "../components/ReservationList.vue";
import QrCodeValidator from "../components/QrCodeValidator.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: HomeView,
    },
    {
      path: "/reservation",
      name: "reservation",
      component: ReservationForm,
    },
    {
      path: "/reservations",
      name: "reservations",
      component: ReservationList,
    },
    {
      path: "/validate",
      name: "validate",
      component: QrCodeValidator,
    },
  ],
});

export default router;
