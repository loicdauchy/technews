<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <title>Technews</title>
</head>

<body>
  <header>

    <div id="Nhamburger">
      <div id="Nhamburger-content">
        <?php 
          wp_nav_menu ( array (
            'theme_location' => 'menuheader' ,
            'menu_class' => 'menuheader', // classe CSS pour customiser mon menu
            ) ); 
          ?>
        <?php 

          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          $args = array(
            'paged'		=> $paged,
            'post_type' => 'contact'
            );

          $the_query = new WP_Query($args);

        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <span></span>
        <div class="NreseauNav1">
          <?php if(get_field('facebook')!='') {?>
          <a href="<?php the_field('facebook') ?>" class="fa-brands fa-facebook-f" target="_blank"></a>
          <?php }
              if(get_field('twitter')!='') {?>
          <a href="<?php the_field('twitter') ?>" class="fa-brands fa-twitter" target="_blank"></a>
          <?php }
              if(get_field('linkedin')!='') {?>
          <a href="<?php the_field('linkedin') ?>" class="fa-brands fa-linkedin" target="_blank"></a>
          <?php } 
              if(get_field('instagram')!='') {?>
          <a href="<?php the_field('instagram') ?>" class="fa-brands fa-instagram" target="_blank"></a>
          <?php } ?>
        </div>
        <?php endwhile ?>
      </div>
      <button id="Nhamburger-button" class="fa-solid fa-bars"></button>
      <div id="Nhamburger-sidebar">
        <div id="Nhamburger-sidebar-header"></div>
        <div id="Nhamburger-sidebar-body" class="none">
        <?php 
          wp_nav_menu ( array (
            'theme_location' => 'menuheader' ,
            'menu_class' => 'menuheader', // classe CSS pour customiser mon menu
            ) ); 
          ?>
        <?php 

          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

          $args = array(
            'paged'		=> $paged,
            'post_type' => 'contact'
            );

          $the_query = new WP_Query($args);

        ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <span></span>
        <div class="NreseauNav1">
          <?php if(get_field('facebook')!='') {?>
          <a href="<?php the_field('facebook') ?>" class="fa-brands fa-facebook-f" target="_blank"></a>
          <?php }
              if(get_field('twitter')!='') {?>
          <a href="<?php the_field('twitter') ?>" class="fa-brands fa-twitter" target="_blank"></a>
          <?php }
              if(get_field('linkedin')!='') {?>
          <a href="<?php the_field('linkedin') ?>" class="fa-brands fa-linkedin" target="_blank"></a>
          <?php } 
              if(get_field('instagram')!='') {?>
          <a href="<?php the_field('instagram') ?>" class="fa-brands fa-instagram" target="_blank"></a>
          <?php } ?>
        </div>
        <?php endwhile ?>
        </div>
        <button id="Nhamburger-button-close" class="fa-solid fa-xmark"></button>
      </div>
      <div id="Nhamburger-overlay"></div>
    </div>
  </header>
