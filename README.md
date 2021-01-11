# pn-exercise
An exercise as test for Proud Nerds

# Requirements
* php >= 7.2.5
* composer
* git

# Install & Run
To download run:
`$ git clone https://github.com/dejong-jelmer/pn-exercise.git`
After donwloading, run:
`composer install`
Run in terminal:
`$ php -S localhost:9030 -t public`
In your brower go to:
`localhost:9030`



# framworks
This site was built using:
* [Symfony](https://symfony.com/)
* [Vue](https://vuejs.org/)
* [Bulma](https://bulma.io)

# Edited files:
1. Templates:
   - templates/base.html.twig
   - templates/index.html.twig
2. Repositories:
   - src/Repository/ArrayFactory.php
   - src/Repository/Test.php
3. Controller:
   - src/Controller/HomeController.php
4. Assest:
   - assets/app.js
   - assets/styles/app.css
5. Vue components:
   - assets/js/components/Card.vue
   - assets/js/components/Footer.vue
   - assets/js/components/Header.vue
   - assets/js/components/Image.vue
   - assets/js/components/Intro.vue