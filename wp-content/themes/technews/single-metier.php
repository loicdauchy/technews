
<?php get_header(); ?>

<div id="main">
  <h2><?= the_title() ?></h2>
  <p><?= the_content() ?></p>
  <a href="<?php the_field('lien_fiche_metier') ?>" target="_blank">Lien vers la fiche métier</a>
</div>

<?php get_footer(); ?>