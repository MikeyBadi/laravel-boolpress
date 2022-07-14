<template>
  <div class="post">
    <h3>{{post.title}}</h3>
    <p>{{post.content}}</p>
  </div>
</template>

<script>
export default {
    name:'PostComp',
    props:{
        post: Object,
    }
}
</script>

<style lang="scss" scoped>
    .post{
        margin-bottom: 20px;
    }
</style>
