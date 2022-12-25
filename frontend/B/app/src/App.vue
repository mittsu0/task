<template>
  <List />
</template>

<script>
import List from './components/ListComponent.vue'
import 'normalize.css'

export default {
  name: 'App',
  components: {
    List
  }
}
</script>

<style>
#app {
  width: 500px;
  margin: auto;
  font-size: 16px;
}

li {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

button {
  box-sizing: border-box;
  border: none;
}
</style>
