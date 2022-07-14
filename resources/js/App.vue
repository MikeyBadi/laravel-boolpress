<template>
    <div>
        <HeaderComp/>
        <!-- <h1>Vue + Laravel first welcome page</h1>
        <ul>
            <li
            v-for="post in posts"
            :key="post.id"
            >
            <h3>{{post.title}}</h3>
            <p>{{post.content}}</p>
            </li>
        </ul> -->
    <router-view></router-view>
    </div>

</template>

<script>

import HeaderComp from './components/partials/HeaderComp.vue'
export default {
    name: 'App',
    components:{
        HeaderComp
    },
    data(){

        return{

        }
    },

    methods:{

    },
    mounted() {


    },
}
</script>

<style lang="scss">

    *{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

</style>
