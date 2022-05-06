
<?php get_header(); ?>

<div id="singleMetier">

  <h1 class="h1metier">Les métiers</h1>
  <div class='boxH2Metier'>
    <img src="http://localhost/technews/wp-content\themes\technews\assets\images\icons8-informatics-64.png" alt="icon">
    <h2 class="h2metier"><?= the_title() ?></h2>
  </div>

  <div id="previewMetier">
    <p><?= get_field('courte_description') ?></p>
    <?php
      if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
        the_post_thumbnail('large', array('class' => 'test'));
      }
    ?>
  </div>

  <div class='metierContent'>
  <?= the_content() ?>
  </div>

  <!-- <a href="<?php the_field('lien_fiche_metier') ?>" target="_blank">Lien vers la fiche métier</a> -->
</div>

<?php get_footer(); ?>