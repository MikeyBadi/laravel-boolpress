<template>
    <div>
        <h1>Blog</h1>
        <div class="post-cont">
            <PostComp
            v-for="post in posts"
            :key="post.id"
            :post="post"
            />
        </div>
    </div>
</template>

<script>
import PostComp from '../partials/PostComp.vue'
export default {
name: 'BlogComp',
components:{
    PostComp
},
data() {
    return {
        urlApi: 'http://127.0.0.1:8000/api/posts',
        posts: null,
    }
},
methods:{
    getApi(){
        axios.get(this.urlApi)
        .then(res=>{
            this.posts = res.data
            console.log(this.posts);
        })
    }
},
mounted() {
    this.getApi();
},
}
</script>

<style lang="scss" scoped>

</style>
