<template>
    <figure class="image is-128x128">
        <img src="img/pasfoto.jpg" alt="">
    </figure>
</template>

<style>
    .image {
        height: auto !important;
        z-index: -1;
    }
    .image > img {
        margin: -2em 0 0 -4em;
    }
    @media only screen and (max-width: 768px) {
        .image {
            margin: auto;
        }
        .image > img {
            margin: 0;
        }
    }
</style>