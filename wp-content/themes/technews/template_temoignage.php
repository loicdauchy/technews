<?php /* Template Name: page témoignage */ ?>

<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => 'temoignage'
    );

  $the_query = new WP_Query($args);

?>

<?php get_header(); ?>

<div id="main">
<h1><?= get_the_title() ?></h1>
  <?= the_content() ?>

  <?php if ($the_query->have_posts()) : ?>
		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  
                <div class="temoin">
                  <?php
                    if ( has_post_thumbnail() ) { // Vérifies qu'une miniature est associée à l'article.
                      the_post_thumbnail();
                    }
                  ?>
                  <div>
                    <h2><?php the_title(); ?></h2>
                    <p><?= the_excerpt(); ?></p>
                    <div>
                    <?php
                    if ( is_null(get_field('lien_temoignage_video'))==false ) { // Vérifies qu'une miniature est associée à l'article.
                        ?>
                      <a href="<?php the_field('lien_temoignage_video') ?>" target='_blank' class='temoinOrange'>Témoignage Vidéo</a>
                    <?php
                      }
                    ?>
                      
                      <a href="../metier/<?php the_field('metier_liee') ?>" class='temoinWhite'> Métier associé</a>
                    </div>
                  </div>
                </div>
		<?php endwhile; ?>
	    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>