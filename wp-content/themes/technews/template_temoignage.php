<?php get_header(); ?>
<?php /* Template Name: page témoignage */ ?>


<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => 'temoignage',
    'posts_per_page' => 5
    );

  $the_query = new WP_Query($args);

?>
<div class="Ntemoin">
  <h1>Les témoignages</h1>
  <div class="NreseauNav">
    <a href="#" class="fa-brands fa-facebook-f"></a>
    <a href="#" class="fa-brands fa-twitter"></a>
    <a href="#" class="fa-brands fa-linkedin"></a>
    <a href="#" class="fa-brands fa-instagram"></a>
  </div>
</div>
<section class="Nsectiontem">
  <?php if ($the_query->have_posts()) : ?>
  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

  <?php
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail('thumbnail', array('class' => 'thumbnailTemoin'));
                    }
                  ?>
  <div>
    <h2><?php the_title(); ?></h2>
    <p><?= the_content(); ?></p>
    <div>
      <?php
                    if ( get_field('lien_temoignage_video')!= '' ) {
                        ?>
      <a href="<?php the_field('lien_temoignage_video') ?>" target='_blank' class='temoinOrange'>Témoignage Vidéo</a>
      <?php
                      }
                    ?>
      <a href="../metier/<?php the_field('metier_liee') ?>" class='temoinWhite'> Métier associé</a>
      <?php
                    if ( get_field('metier_liee_bis')!='' ) {
                    ?>
      <a href="../metier/<?php the_field('metier_liee_bis') ?>" target='_blank' class='temoinWhite'>Second métier
        associé</a>
      <?php
                      }
                    ?>
    </div>
  </div>
</section>
<?php endwhile; ?>
<div id="navigation">
  <?php 
      
        $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
        the_posts_pagination( array(
          'mid_size' => 8,
          'prev_text' => '<',
          'next_text' => '>'
        ));              

      ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php get_footer(); ?>