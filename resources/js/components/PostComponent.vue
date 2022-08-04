<template>
  <div>
    <SinglePostComponent></SinglePostComponent>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="person in personsAge">
          <th scope="row">{{ person.id }}</th>
          <td>{{ person.name }}</td>
          <td>{{ person.age }}</td>
          <td>{{ person.job }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent.vue";

export default {
  name: "PostComponent",
  components: {
    SinglePostComponent,
  },
  data() {
    return {
      persons: [
        {
          id: 1,
          name: "Vasya",
          age: 18,
          job: "coach",
        },
        {
          id: 2,
          name: "Lena",
          age: 21,
          job: "no job",
        },
        {
          id: 3,
          name: "Petr",
          age: 13,
          job: "free",
        },
        {
          id: 4,
          name: "Kolya",
          age: 44,
          job: "seller",
        },
      ],
    };
  },
  methods: {
    sayHello() {
      console.log("hello");
    },
    sayHi() {
      console.log("hi");
    },
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
