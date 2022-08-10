<template>
  <div v-if="person">
    Show
    <div>Name: {{ this.person.name }}</div>
    <div>Age: {{ this.person.age }}</div>
    <div>Job: {{ this.person.job }}</div>
    <div>
      <router-link :to="{ name: 'person.edit', params: { id: this.person.id } }"
        >Edit</router-link
      >
    </div>
  </div>
</template>

<script>
export default {
  name: "Show",
  data() {
    return {
      person: null,
    };
  },
  mounted() {
    console.log(this.person);
    this.getPersons();
  },
  methods: {
    getPersons() {
      axios.get(`/api/people/${this.$route.params.id}`).then((res) => {
        console.log("R:",res);
        this.person = res.data.data;
        console.log("Show.vue - Res:", res);

      });
    },
  },
};
</script>

<style lang="scss" scoped>
</style>
