<?php 

// on créé une zone pour le menu 
register_nav_menu( 'menuheader', 'Menu du Header' );
register_nav_menu( 'menufooter', 'Menu du Footer' );

if ( !is_admin() ) {
    
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.js', array ( 'jquery' ), 1.1, true);

}

function actu_register_post_types() {
    // La déclaration de nos Custom Post Types et Taxonomies ira ici
    // CPT Realisation
    $labels = array(
        'name' => 'Actualité',
        'all_items' => 'Toutes les Actualités',  // affiché dans le sous menu
        'singular_name' => 'Actualité',
        'add_new_item' => 'Ajouter une Actualité',
        'edit_item' => 'Modifier l\'Actualité',
        'menu_name' => 'Actualité'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-portfolio',
	);

	register_post_type( 'actualite', $args );
}

function job_register_post_types() {
    // La déclaration de nos Custom Post Types et Taxonomies ira ici
    // CPT Realisation
    $labels = array(
        'name' => 'Métiers',
        'all_items' => 'Tout les Métiers',  // affiché dans le sous menu
        'singular_name' => 'Métier',
        'add_new_item' => 'Ajouter une Métier',
        'edit_item' => 'Modifier le Métier',
        'menu_name' => 'Métier'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-portfolio',
	);

	register_post_type( 'metier', $args );
}

function testimony_register_post_types() {
    // La déclaration de nos Custom Post Types et Taxonomies ira ici
    // CPT Realisation
    $labels = array(
        'name' => 'Témoignage',
        'all_items' => 'Tout les Témoignages',  // affiché dans le sous menu
        'singular_name' => 'Témoignage',
        'add_new_item' => 'Ajouter un Témoignage',
        'edit_item' => 'Modifier le Témoignage',
        'menu_name' => 'Témoignage'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-portfolio',
	);

	register_post_type( 'temoignage', $args );
}

add_action( 'init', 'actu_register_post_types' );
add_action( 'init', 'job_register_post_types' );
add_action( 'init', 'testimony_register_post_types' );





//‘name’ = nom de la “widget area” qui apparaîtra dans votre administration WordPress
//‘id’ = identifiant unique de votre “widget area”
//‘before_widget’ = choisir une balise HTML à ouvrir avant votre widget (<div>, <li> etc…) et profitez-en pour y ajouter une classe qui pourra vous aider lors de la customisation CSS (étape 5)
//‘after_widget’ = fermer la balise (</div>, </li> etc…)
//‘before_title’ = choisir une balise pour le titre du widget (<h2>, <h3>, <h4> etc…) et, comme pour le ‘before_widget’, ajoutez une classe pour agir en CSS ultérieurement
//‘after_title’ = fermer la balise du titre (</h2>, </h3>, </h4> etc…)