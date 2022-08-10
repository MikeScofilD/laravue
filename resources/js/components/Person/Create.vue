<template>
  <div class="w-25">
    Create
    <div class="mb-3">
      <input
        type="text"
        placeholder="name"
        class="form-control"
        v-model="name"
        name=""
        id=""
      />
    </div>
    <div class="mb-3">
      <input
        type="number"
        placeholder="age"
        class="form-control"
        v-model="age"
        name=""
        id=""
      />
    </div>
    <div class="mb-3">
      <input
        type="text"
        placeholder="job"
        v-model="job"
        class="form-control"
        name=""
        id=""
      />
    </div>
    <div class="mb-3">
      <input
        :disabled="!isDisabled"
        type="submit"
        @click.prevent="store"
        value="Add"
        class="btn btn-primary"
        name=""
        id=""
      />
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      name: null,
      age: null,
      job: null,
    };
  },
  methods: {
    store() {
      axios
        .post("/api/people", { name: this.name, age: this.age, job: this.job })
        .then((res) => {
          this.$router.push({ name: "person.index" });
        });
    },
  },
  computed: {
    isDisabled() {
      return this.name && this.age && this.job;
    },
  },
};
</script>

<style lang="scss" scoped>
</style>
