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
      let api = "http://localhost"
      const params = {
        prova: "ciaoprova"
      }
      axios.get(api, { params })
        .then(res => {
          this.todoList = res.data;

        })

    }
  },
  mounted() {
    this.getData()
  }
}

</script>

<template>
  <form @submit="submit">
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
