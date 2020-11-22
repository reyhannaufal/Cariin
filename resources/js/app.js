import { createApp } from "vue";

import App from "./Main.vue";
import BaseButton from "./components/ui/BaseButton";
import TheHeader from "./components/layout/TheHeader";
import TheFooter from "./components/layout/TheFooter";
import router from "./router";
import store from "./store/index.js";

const app = createApp(App);

app.use(router);
app.use(store);
app.component("base-button", BaseButton);
app.component("the-header", TheHeader);
app.component("the-footer", TheFooter);
app.mount("#app");
