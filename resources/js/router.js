import { createRouter, createWebHistory } from "vue-router";
import Home from "./pages/Home.vue";
import NotFound from "./pages/NotFound.vue";
import AboutUs from "./pages/AboutUs.vue";
import ContactUs from "./pages/ContactUs.vue";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        { path: "/", component: Home },
        { path: "/about-us", component: AboutUs, name: "AboutUs" },
        { path: "/contact-us", component: ContactUs, name: "ContactUs" },
        { path: "/:notFound(.*)", component: NotFound },
    ],
});

export default router;
