<script>
import axios from 'axios';

export default {

  methods: {
    getData() {
      let api = "http://localhost"
      axios.get(api)
        .then(res => {
          const data = res.data;
          console.log(data);
        })

    }
  },
  mounted() {
    this.getData()
  }
}

</script>

<template>
  <p>ciao</p>
</template>

<style lang="scss" scoped>

</style>
