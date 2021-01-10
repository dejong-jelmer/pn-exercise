<template>
    <div class="columns">
        <div class="column is-6 is-offset-2">  
            <h1 class="title is-size-1">Introductie</h1>
            <article class="container">
                <div class="notification">
                    Mijn naam is Jelmer (41) en ik word gelukkig als ik aan webapplicaties mag werken. Mijn programmeerstijl laat zich het best kenmerken door mijn zoektocht naar ‘best practices’ en hoe ik mijn code zo DRY mogelijk kan houden. Ik hou van duidelijk en overzichtelijk werken en ik word blij van mooie code. Met plezier begin ik aan projecten waarbij ik nieuwe kennis kan toepassen of opdoen. Mijn ambitie is om me te ontwikkelen tot senior full-stack web developer.
                </div>
            </article>
          </div>
          <div class="column is-1">
              <div class="column">
                    <author-image :source="image.source" :fallback="image.fallback"></author-image>
                    <div class="column">
                        <div class="button-wrapper is-pulled-right">
                            <a class="button" target="_blank" :href="github">Mijn GitHub</a>
                        </div>
                    </div>
                </div>
          </div>
    </div>
</template>

<script>
    import AuthorImage from './Image.vue';
    export default {
        components: {
          AuthorImage
        },
        props: {
          'image': Object,
          'github': String
        }
    };
</script>
<style>
  .button-wrapper {
    padding: 0.75rem 0;
  }

</style>