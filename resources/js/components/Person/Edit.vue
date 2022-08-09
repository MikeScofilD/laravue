<template>
  <div class="w-25">
    Edit
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
        type="submit"
        @click.prevent="update"
        value="Update"
        class="btn btn-primary"
        name=""
        id=""
      />
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import router from '../../router';
export default {
    name: "Edit",
       data() {
        return {
            name: null,
            age: null,
            job: null,
        };
    },
    mounted(){
       this.getPersons();
    },
    methods: {
        getPersons(){
            axios.get('/api/people/'+this.$route.params.id)
            .then(res => {
                this.name = res.data.name;
                this.age = res.data.age;
                this.job = res.data.job;
                console.log('res:',res);
            })
        },
        update(){
             axios.patch('/api/people/'+this.$route.params.id, {name: this.name, age: this.age, job: this.job})
             .then(res => {
                router.push({name:'person.show', params: {id:this.$route.params.id }})
             })
        }
    },
};
</script>

<style lang="scss" scoped>
</style>
