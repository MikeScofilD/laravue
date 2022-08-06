<template>
  <div>
    <CreateComponent></CreateComponent>
    <!-- <SinglePostComponent></SinglePostComponent> -->
    <IndexComponentVue ref="index"></IndexComponentVue>
    <!-- <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="person in persons">
          <th scope="row">{{ person.id }}</th>
          <td>{{ person.name }}</td>
          <td>{{ person.age }}</td>
          <td>{{ person.job }}</td>
        </tr>
      </tbody>
    </table> -->
  </div>
</template>

<script>
import axios from "axios";
// import SinglePostComponent from "./SinglePostComponent.vue";
import CreateComponent from "./CreateComponent";
import IndexComponentVue from "./IndexComponent.vue";

export default {
  name: "PostComponent",
  components: {
    // SinglePostComponent,
    CreateComponent,
    IndexComponentVue,
  },
  data() {
    return {
      persons: null,
    };
  },
  mounted() {
    // this.getPersons();
    console.log(this.$refs.index.indexLog());
    // console.log(this.$refs.index.name);
  },
  methods: {
    getPersons() {
      axios
        .get("/persons")
        .then((data) => {
          // console.log(data);
          this.persons = data.data;
        })
        .catch((error) => {})
        .finally({});
    },
    parentLog(){
        console.log('parentLog this is parent component');
    }
  },
  computed: {
    personsAge() {
      return this.persons.filter(function (person) {
        return person.age > 20;
      });
    },
  },
};
</script>

<style lang="scss" scoped>
</style>
