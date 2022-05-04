<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Technews</title>
  </head>
  <body>
  <header>

    <nav id='boxNav'>
      <?php 
      
      wp_nav_menu ( array (
        'theme_location' => 'menuheader' ,
        'menu_class' => 'menuheader', // classe CSS pour customiser mon menu
        ) ); 

      

      ?>
    </nav>
    
   
  </header>
</nav>