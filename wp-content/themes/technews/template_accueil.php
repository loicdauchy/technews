<?php /* Template Name: page d'accueil */ ?>
<?php get_header(); ?>

<div id="main">

  <h1><?= get_the_title() ?></h1>
  <?= the_content() ?>
</div>

<?php get_footer(); ?>