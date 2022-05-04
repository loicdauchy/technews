
<?php get_header(); ?>

<div id="main">
  <div>
  <h2 class="h2metier"><?= the_title() ?></h2>
  </div>

  <div class='metierContent'>
  <?= the_content() ?>
  </div>

  <!-- <a href="<?php the_field('lien_fiche_metier') ?>" target="_blank">Lien vers la fiche métier</a> -->
</div>

<?php get_footer(); ?>