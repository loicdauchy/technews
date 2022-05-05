
<?php get_header(); ?>

<div id="singleMetier">

  <h1 class="h1metier">Les métiers</h1>
  <h2 class="h2metier"><?= the_title() ?></h2>
<h1></h1>
  <div class='metierContent'>
  <?= the_content() ?>
  </div>

  <!-- <a href="<?php the_field('lien_fiche_metier') ?>" target="_blank">Lien vers la fiche métier</a> -->
</div>

<?php get_footer(); ?>