<template>
  <div class="post">
    <h3>
    <router-link :to="{name: 'detail', params:{slug: post.slug}}">{{post.title}}</router-link>
    </h3>
    <p>{{shortedTxt}}</p>
    <i>{{shortedDate}}</i>
  </div>
</template>

<script>

export default {
    name:'PostComp',
    props:{
        post: Object,
    },
    computed:{
        shortedTxt(){
            return this.post.content.substr(0,50) + "..."
        },
        shortedDate(){

            const date = new Date(this.post.updated_at);
            let day = date.getDate();
            let month = date.getMonth();
            const year = date.getFullYear();

            if(day<10) day = '0'+day;
            if(month<10) month = '0'+month;



            return `${day + '/' + month + '/' + year}`
        }
    }
}
</script>

<style lang="scss" scoped>
    .post{
        margin-bottom: 20px;
        a{
            text-decoration: none;
            color: rgb(33, 33, 33);
            &:hover{
                color: rgb(105, 104, 104);;
            }
        }
    }
</style>
