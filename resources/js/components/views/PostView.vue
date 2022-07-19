<template>
  <div class="post">
    <div
    v-for="tag in post.tags"
    :key="tag.id">
    <p>{{tag.name}}, </p>
    </div>
    <h3>{{post.title}}</h3>
    <p>{{post.content}}</p>
    <i>{{shortedDate}}</i>
    <button></button>
  </div>
</template>

<script>
import {urlApi} from '../../data/config'

export default {
    name:'PostView',
    data() {
        return {
            post: {
                title:'',
                content:'',
            },
            urlApi,
        }
    },
    computed:{
        shortedDate(){

            const date = new Date(this.post.updated_at);
            let day = date.getDate();
            let month = date.getMonth();
            const year = date.getFullYear();

            if(day<10) day = '0'+day;
            if(month<10) month = '0'+month;



            return `${day + '/' + month + '/' + year}`
        },

    },
        methods: {
            getApi(){
                console.log(this.urlApi + '/' + this.$route.params.slug);
                axios.get(this.urlApi + '/' + this.$route.params.slug)
                .then(r=>{
                    this.post = r.data;
                    console.log(r.data);
                })
            }
        },

        mounted() {
            this.getApi()
        },
}
</script>

<style lang="scss" scoped>
    .post{
        margin-bottom: 20px;
    }
</style>
