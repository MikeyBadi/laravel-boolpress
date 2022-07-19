<template>
    <div>
        <h1>Blog</h1>

        <LoaderComp v-if="!posts"/>

    <div v-else>

        <div class="post-cont">
            <PostComp
            v-for="post in posts"
            :key="post.id"
            :post="post"
            />
        </div>
        <button @click="getApi(pagination.current -1)"
        :disabled="pagination.current === 1"> .. </button>

        <button
        v-for="ind in pagination.last"
        :key="ind"
        @click="getApi(ind)"
        :disabled="pagination.current === ind">{{ind}}</button>

        <button @click="getApi(pagination.current +1)"
        :disabled="pagination.current === pagination.last">=></button>

        </div>
    </div>
</template>

<script>
import PostComp from '../partials/PostComp.vue'
import LoaderComp from '../partials/LoaderComp'
import {urlApi} from '../../data/config'

export default {
name: 'BlogComp',
components:{
    PostComp,
    LoaderComp
},
data() {
    return {
        urlApi,
        posts: null,
        pagination:{
            current: null,
            last:null,
        }
    }
},
methods:{
    getApi(page){
        this.posts = null;
        axios.get(this.urlApi + '?page=' + page)
        .then(res=>{
            this.posts = res.data.data
            this.pagination ={
                current: res.data.current_page,
                last: res.data.last_page
            }
            console.log(this.posts);
        })
    }
},
mounted() {
    this.getApi(1);
},
}
</script>

<style lang="scss" scoped>
    button{
        padding: 5px;
    }
</style>
