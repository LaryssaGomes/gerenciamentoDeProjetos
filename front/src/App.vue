
<template>
  <div id="app">
    <e-header></e-header>
    <router-view/>
  </div>
</template>

<script>
import Header from './partials/Header';
export default {
  name: 'App',
  components: {
    'e-header': Header
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
