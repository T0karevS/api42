

require ('./bootstrap');
import { createApp } from "vue";
import {createRouter, createWebHistory} from "vue-router";
import App from "./components/App";
import home from "./components/home";
import about from "./components/about";
import artem from "./components/artem";

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: home
        },
        {
            path: '/about',
            component: about
        },
        {
            path: '/artem',
            component: artem
        },
    ]
})

 const app = createApp({
     el:'#app',
     components: {App},
 });
app.use(router);
 app.mount("#app");
