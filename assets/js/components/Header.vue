<template>
    <header id="header">
        <div class="columns is-mobile is-centered">
            <div class="column is-one-quarter">  
                <div class="block p-4 mt-5">
                    <h1 class="title">
                        {{ author }}
                    </h1>
                    <p class="subtitle">
                        A test for <strong>{{ company }}</strong>
                    </p>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        props: ['author', 'company']
    };
</script>
<style>
    #header {
        height: 100px;
        position: relative;
        background-color: lightgray;
    }

    #header .block {
        position: absolute;

        background-color: white;
        border-radius: 10px;
        border: 0.5px solid gray;
        
        z-index: 1;
    }
</style>



