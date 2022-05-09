<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $optArgs = array(
      'paged' => 1,
      'post_type' => 'contact'
    );
    $opt_query = new WP_Query($optArgs);

    $GLOBALS['templateUrl'] = get_template_directory_uri();
    $GLOBALS['siteUrl'] = get_site_url();
    $GLOBALS['mail'] = null;
    $GLOBALS['facebook'] = null;
    $GLOBALS['instagram'] = null;
    $GLOBALS['twitter'] = null;
    $GLOBALS['linkedin'] = null;

    if ($opt_query->have_posts()) :
      while ($opt_query->have_posts()) : $opt_query->the_post();

        if(get_field("mail")) {
          $GLOBALS['mail'] = get_field("mail");
        }
        if(get_field("facebook")) {
          $GLOBALS['facebook'] = get_field("facebook");
        }
        if(get_field("instagram")) {
          $GLOBALS['instagram'] = get_field("instagram");
        }
        if(get_field("twitter")) {
          $GLOBALS['twitter'] = get_field("twitter");
        }
        if(get_field("linkedin")) {
          $GLOBALS['linkedin'] = get_field("linkedin");
        }
        break;
      endwhile; 
      wp_reset_postdata();
    endif;

?>

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
  <title><?php bloginfo('name'); ?></title>
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
      
        <span></span>
        <div class="NreseauNav1">
          <?php if($GLOBALS['facebook'] !== null) {?>
          <a href="<?= $GLOBALS['facebook'] ?>" class="fa-brands fa-facebook-f" target="_blank"></a>
          <?php }
              if($GLOBALS['twitter'] !== null) {?>
          <a href="<?= $GLOBALS['twitter'] ?>" class="fa-brands fa-twitter" target="_blank"></a>
          <?php }
              if($GLOBALS['linkedin'] !== null) {?>
          <a href="<?= $GLOBALS['linkedin'] ?>" class="fa-brands fa-linkedin" target="_blank"></a>
          <?php } 
              if($GLOBALS['instagram'] !== null) {?>
          <a href="<?= $GLOBALS['instagram'] ?>" class="fa-brands fa-instagram" target="_blank"></a>
          <?php } ?>
        </div>
      </div>
      <i id="Nhamburger-button" class="fa-solid fa-bars"></i>
      <div id="Nhamburger-sidebar">
        <div id="Nhamburger-sidebar-header"></div>
        <div id="Nhamburger-sidebar-body" class="none">
        <?php 
          wp_nav_menu ( array (
            'theme_location' => 'menuheader' ,
            'menu_class' => 'menuheader', // classe CSS pour customiser mon menu
            ) ); 
          ?>

        <span></span>
        <div class="NreseauNav1">
          <?php if($GLOBALS['facebook'] !== null) {?>
          <a href="<?= $GLOBALS['facebook'] ?>" class="fa-brands fa-facebook-f" target="_blank"></a>
          <?php }
              if($GLOBALS['twitter'] !== null) {?>
          <a href="<?= $GLOBALS['twitter'] ?>" class="fa-brands fa-twitter" target="_blank"></a>
          <?php }
              if($GLOBALS['linkedin'] !== null) {?>
          <a href="<?= $GLOBALS['linkedin'] ?>" class="fa-brands fa-linkedin" target="_blank"></a>
          <?php } 
              if($GLOBALS['instagram'] !== null) {?>
          <a href="<?= $GLOBALS['instagram'] ?>" class="fa-brands fa-instagram" target="_blank"></a>
          <?php } ?>
        </div>
        </div>
        <i id="Nhamburger-button-close" class="fa-solid fa-xmark"></i>
      </div>
      <div id="Nhamburger-overlay"></div>
    </div>
  </header>
