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
    checkbox(indice) {
      var checkBox = document.getElementsByClassName("check")
      if (checkBox[indice].checked) {
        this.todoList[indice].complete = true
        console.log(this.todoList[indice].complete)

      }
      else {
        this.todoList[indice].complete = false
        console.log(this.todoList[indice].complete)
      }

    },
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
  <section>
    <div class="cont">

      <div class="container">
        <div class="inner-cont">
          <div class="cont-inp">
            <form @submit="formSubmit">
              <input id="inp" type="text" placeholder="Add a new task..." v-model="addTodo">
              <input type="submit" id="btn" value="ADD">
            </form>
          </div>

          <ul>
            <li v-for="(task, index) in todoList" :key="index" class="task" :class="{ 'line': task.complete }">
              {{ task.text }}

              <font-awesome-icon icon="fa-solid fa-trash-can" class="del" />
              <input type="checkbox" name="" class="check" @click="checkbox(index)">

            </li>

          </ul>

        </div>
      </div>
    </div>
  </section>

</template>

<style lang="scss" scoped>
section {
  display: flex;
  justify-content: center;
  align-items: center;
}

.cont {
  width: 50%;
  height: 100vh;
  /* background-color: aquamarine; */
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  background-color: #2162cc;
}

.container {
  width: 100%;
  height: auto;
  /* background-color: brown;  */
  display: flex;
  justify-content: center;
  align-items: center;

}

.inner-cont {
  width: 50%;
  height: auto;
  background-color: white;
  /* display: flex; */
  justify-content: center;
  align-items: center;
  padding: 25px 10px;
  border-radius: 10px;
}

.cont-inp {
  width: 100%;
  height: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 30px;
}

#btn {
  padding: 11px 14px;
  font-size: 18px;
  border-radius: 5px;
  border-color: #2162cc;
  background-color: #2162cc;
  color: white;
  cursor: pointer;
}

#inp {
  padding: 11px;
  font-size: 15px;
  margin-right: 10px;
  border-radius: 5px;
  border: 1px solid #999;
  width: 70%;

}

#errorId {
  width: 100%;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: red;
  font-size: 18px;
}

.del {
  margin-left: 20px;
  font-size: 18px;
  color: white;
  cursor: pointer;
  float: right;
  padding: 4px;
  background-color: #1d19a3;
  border-radius: 5px;

}

ul {
  list-style: none;
}

.task {
  font-size: 18px;
  margin: 10px 0px;
  padding: 12px;
  background-color: #c4e1e5;
  border-radius: 5px;
  border: 1px solid #999;

}

.fl {
  display: flex;
}

.dele {
  display: flex;
  justify-content: center;
  align-items: center;
}

.line {
  text-decoration: line-through;
}

.check {
  margin-top: 5px;
  float: right;
  transform: scale(1.7);
}
</style>
