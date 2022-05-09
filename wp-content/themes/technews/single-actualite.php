<?php /* Template Name: page actualité solo */ ?>

<?php 

  $args = array(
    'post_type' => 'actualite',
    'orderby'=>'rand', 
    'posts_per_page'=>'1',
    'post__not_in' => array( get_the_ID() )
    );

  $the_query = new WP_Query($args);

?>

<?php get_header(); ?>

<div id="main">
  <div id="titleActuPage"><h2>Les actualités</h2></div>
  <div id="mainActuContent">
      <h1><?= get_the_title() ?></h1>

      <div id="actuHours">Le <?= get_the_date('d/m/Y à H:i') ?></div>
      <?php 
      
        if ( has_post_thumbnail() ) {
          the_post_thumbnail('full', array('class' => 'test'));
        }
      
      ?>
      <?= the_content() ?>
  </div>

  <div id="seeMore">
    <h6>À lire également</h6>
    <div id="randActu">

    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <?php 
      if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium', array('class' => 'test'));
      }
    ?>

    <div>
      <p id="tag">News</p>
      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
      <p><?php the_excerpt(); // or the_content(); ?></p>
    </div>
    

    <?php 
      endwhile;
      wp_reset_postdata();
    ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>