import { createApp } from 'vue'
import NeoCard from './components/NeoCard.vue'
import App from './App.vue'

const app = createApp(App)
app.component('NeoCard', NeoCard)

app.mount('#app')
