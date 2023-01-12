<script>
import axios from 'axios';

export default {
  data() {
    return {
      todoList: [],
      addTodo: "",
    }
  },

  methods: {
    getData() {
      let api = "http://localhost/apiTodo.php"
      axios.get(api)
        .then(res => {
          this.todoList = res.data;

        })

    },
    formSubmit(e) {
      e.preventDefault();

      let api = "http://localhost/apiNewTodo.php"
      const params = {
        params: {
          "addTodo": this.addTodo
        }
      }
      axios.get(api, params)
        .then(() => {
          this.getData()

        })

    }
  },
  mounted() {
    this.getData()
  }
}

</script>

<template>
  <form @submit="formSubmit">
    <input type="text" v-model="addTodo">
    <input type="submit" value="ADD">
  </form>
  <ul>
    <li v-for="(item, index) in todoList" :key="index">
      {{ item.text }}
    </li>
  </ul>
</template>

<style lang="scss" scoped>

</style>
