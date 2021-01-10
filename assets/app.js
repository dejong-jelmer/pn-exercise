/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

import 'bulma/css/bulma.css';

// import the main Vue component
import Vue from 'vue';
import siteHeader from './js/components/Header.vue';
import intro from './js/components/Intro.vue';
import card from './js/components/Card.vue';
import siteFooter from './js/components/Footer.vue';
// Vue.component('site-header', siteHeader);
// import App from './js/components/App';
window.Vue = Vue;
const app = new Vue({
    el: '#app',
    data: {
        author: 'Jelmer de Jong',
        date: new Date().getFullYear(),
        company: {'name': 'Proud Nerds', 'url': 'https://www.proudnerds.com'},
        image: {'source': 'img/pasfoto.jpg', 'fallback': 'foto van auteur'},
        github: 'https://github.com/dejong-jelmer'
    },
    components: {
            siteHeader,
            intro,
            card,
            siteFooter
    }
});

