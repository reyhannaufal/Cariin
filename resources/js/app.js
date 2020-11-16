import { createApp } from 'vue'

import App from './Main.vue'
import BaseButton from './components/ui/BaseButton'
import TheHeader from './components/layout/TheHeader'
import router from './router'

const app = createApp(App)

app.use(router);
app.component('base-button', BaseButton)
app.component('the-header', TheHeader)
app.mount('#app')