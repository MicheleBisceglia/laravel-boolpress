<template>
  <div>
    <PostList/>
  </div>
</template>

<script>
import PostList from "./PostList.vue";
export default {
  name: 'App',
  components: {
    PostList
  }
}
</script>

<style lang="scss" scoped>
  h1 {
    text-align: center;
    padding-top: 50px;
  }  
</style>