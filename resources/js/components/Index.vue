<template>
  <div>
    <h1>Index Vue</h1>
    <router-link :to="{name: 'person.index'}">People</router-link>
    <router-link :to="{name: 'person.create'}">Add</router-link> 
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: "Index",
  data() {
    return {};
  },
};
</script>

<style lang="scss" scoped>
</style>
