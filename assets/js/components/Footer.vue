<template> 
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          Site door <a target="_blank" :href="github">{{ author }}</a> in opdracht van <a target="_blank" href="company.url">{{ company.name }}</a>. &copy {{ date }}
        </p>
      </div>
  </footer>
</template>

<script>
    export default {
        props: ['author', 'company', 'date', 'github']
    };
</script>

<style>
 
</style>