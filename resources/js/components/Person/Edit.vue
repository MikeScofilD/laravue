<template>
  <div class="w-25" v-if="person">
    Edit
    <div class="mb-3">
      <input
        type="text"
        placeholder="name"
        class="form-control"
        v-model="person.name"
        name=""
        id=""
      />
    </div>
    <div class="mb-3">
      <input
        type="number"
        placeholder="age"
        class="form-control"
        v-model="person.age"
        name=""
        id=""
      />
    </div>
    <div class="mb-3">
      <input
        type="text"
        placeholder="job"
        v-model="person.job"
        class="form-control"
        name=""
        id=""
      />
    </div>
    <div class="mb-3">
      <input
        :disabled="!isDisabled"
        type="submit"
        @click.prevent="
          $store.dispatch('update', {
            id: person.id,
            name: person.name,
            age: person.age,
            job: person.job,
          })
        "
        value="Update"
        class="btn btn-primary"
        name=""
        id=""
      />
    </div>
  </div>
</template>

<script>
import axios from "axios";
import router from "../../router";
export default {
  name: "Edit",

  mounted() {
    this.$store.dispatch("getPerson", this.$route.params.id);
  },
  methods: {},
  computed: {
    isDisabled() {
      return this.person.name && this.person.age && this.person.job;
    },
    person() {
      return this.$store.getters.person;
    },
  },
};
</script>

<style lang="scss" scoped>
</style>
