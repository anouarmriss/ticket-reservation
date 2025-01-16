import { createRouter, createWebHistory } from "vue-router";
import HomeView from "../components/HomeView.vue";
import ReservationForm from "../components/ReservationForm.vue";
import ReservationList from "../components/ReservationList.vue";
import QrCodeValidator from "../components/QrCodeValidator.vue";
import AdminView from "../views/AdminView.vue";
import LoginView from "../views/LoginView.vue";
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
      path: "/login",
      name: "login",
      component: LoginView,
    },
    {
      path: "/validate",
      name: "validate",
      component: QrCodeValidator,
    },
    {
      path: "/admin",
      name: "admin",
      component: AdminView,
    },
  ],
});

router.beforeEach((to, from, next) => {
  if (to.matched.some((record) => record.meta.requiresAuth)) {
    // Check if admin is logged in
    const isAdmin = localStorage.getItem("isAdmin");
    if (!isAdmin) {
      next("/login");
    } else {
      next();
    }
  } else {
    next();
  }
});

export default router;
