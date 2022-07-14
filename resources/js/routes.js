import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import HomeComp from './components/views/HomeComp'
import BlogComp from './components/views/BlogComp'
import ContactComp from './components/views/ContactComp'
import AboutComp from './components/views/AboutComp'

const router = new VueRouter ({
    linkExactActiveClass: 'active',
    mode: 'history',
    routes:[
        {
            path:'/',
            name:'home',
            component: HomeComp
        },
        {
            path:'/blog',
            name:'blog',
            component: BlogComp
        },
        {
            path:'/contact',
            name:'contact',
            component: ContactComp
        },
        {
            path:'/about',
            name:'about',
            component: AboutComp
        }
    ]
})

export default router;
