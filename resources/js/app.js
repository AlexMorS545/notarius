import './bootstrap';

import {createApp} from 'vue'
import Router from "@/router";
import App from '@/App.vue'
import '@/../scss/app.scss'

createApp(App).use(Router).mount("#app")
