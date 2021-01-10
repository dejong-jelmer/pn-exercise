<template> 
    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          Site door <a href="https://github.com/dejong-jelmer">{{ author }}</a> in opdracht van <a href="https://www.proudnerds.com/">{{ company }}</a>. &copy {{ date }}
        </p>
      </div>
  </footer>
</template>

<script>
    export default {
        props: ['author', 'company', 'date']
    }
    console.log("Footer loaded");
</script>

<style>
 
</style>