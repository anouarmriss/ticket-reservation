import { createApp } from "vue";
import App from "./App.vue";
import { createRouter, createWebHistory } from "vue-router";
import HomeView from "./views/HomeView.vue";
import ReservationForm from "./components/ReservationForm.vue";
import ConfirmationView from "./views/ConfirmationView.vue";

const router = createRouter({
    history: createWebHistory(),
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
            path: "/confirmation",
            name: "confirmation",
            component: ConfirmationView,
        },
    ],
});

const app = createApp(App);
app.use(router);
app.mount("#app");
