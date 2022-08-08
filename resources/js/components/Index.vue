<template>
  <div>
    <h1>Index Vue</h1>
    <router-link to="/posts">Posts</router-link>
    <router-link to="/tags">Tags</router-link>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "Index",
};
</script>

<style lang="scss" scoped>
</style>
