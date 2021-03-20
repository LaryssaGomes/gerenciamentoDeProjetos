<template>
    <div>
        <h1 class="red">{{messagem}}</h1>
        <p>Projeto </p>
    </div>
</template>
<script>
export default {
    data() {
        return {
            messagem: 'Ol mundo'
        }
    },
    mounted() {
        console.log('estamos prontos');
        //document.querySelector('h1.red').innerHTML = 'Oi amoh';
    }
}
</script>
<style>
  
</style>