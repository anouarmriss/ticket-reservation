import { createApp } from "vue";
import { createRouter, createWebHistory } from "vue-router";
import App from "./App.vue";
import HomeView from "./views/HomeView.vue";
import ReservationForm from "./components/ReservationForm.vue";

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
    ],
});

const app = createApp(App);
app.use(router);
app.mount("#app");
