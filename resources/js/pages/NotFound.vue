<template>
  <div class="container">
    <h2>Errore 404! Pagina inesistente!</h2>
    <router-link :to="{name: 'home'}">Ritorna nella Home</router-link>
  </div>
</template>

<script>
export default {
    name: "NotFound"
}
</script>

<style>
</style>