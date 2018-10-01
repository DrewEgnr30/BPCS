import VueRouter from 'vue-router';
import Home from './components/Home.vue'
import Line from './components/Line.vue'
import Model from './components/Model.vue'

let routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/line',
        component: Line
    },
    {
        path: '/model',
        component: Model
    }
];

export default new VueRouter({
    routes
});