<?php /* Template Name: page d'accueil */ ?>

<?php 

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'paged'		=> $paged,
    'post_type' => 'metier',
    
    'posts_per_page' => 3,
    'orderby' => 'rand'
    );

  $the_query = new WP_Query($args);

    
  $args2 = array(
    'paged'		=> $paged,
    'post_type' => 'actualite',
    'posts_per_page' => 2,
    'orderby'=> 'date',
  
    );

  $the_query2 = new WP_Query($args2);


  $args3 = array(
    'paged'		=> $paged,
    'post_type' => 'Temoignage',
    'posts_per_page' => 3,
    'orderby' => 'rand'
    );

  $the_query3 = new WP_Query($args3);
 

?>



<?php get_header(); ?>

<div id="main">


  <div id= 'boxHeader'>
    <div class='boxTitleH'>
      <h1><?= get_the_title() ?></h1>
      <p>Click (Generate) to create a new font pairing, (Lock) to lock fonts that you want to keep,
                  and (Edit) to choose a font manually.The text is editable, try replacing it with your company name
                  or other copy.</p>
      <?= the_content() ?>
    </div>

    <div class="decoHeader"></div>

    <div id="boxButton">
            <button class="metier" onclick="window.location.href='#boxMetiers'">Les métiers</button>
            <button class="temoin" onclick="window.location.href='#boxTemoin'">Les témoignages</button>
    </div>


  </div>

  <section id="boxActuality">
  <?php $actudiv = 0; ?>

  <h2><?= get_the_title(12); ?></h2>

  <?php if ($the_query2->have_posts()) : ?>
		<?php while ($the_query2->have_posts()) : $the_query2->the_post(); ?>  
    


      <div class = <?php if ( $actudiv == 0 ) {?> leftAlign <?php $actudiv = 1; } else {?> rightAlign <?php $actudiv = 0; } ?>>

        <?php 
          if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium');

        }?>
        

          <div>
            
            <h3><?php the_title(); ?></h3>
            <p>Le <?= get_the_date(); ?> à <?= get_the_time(); ?></p>
            <p><?= the_excerpt(); ?></p>
            <a href="<?= get_permalink(get_the_ID()) ?>">voir plus</a>
          </div>

      </div>
                                
    <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>
   
    
    <button class='buttonActu'  onclick="window.location.href='<?php echo get_permalink(12) ; ?>'"> 
      Voir plus d'actualités
    </button>

  </section>

  
  <section id="boxMetiers">
  <div class="decoMetier"></div>
  <div class="metiers">

    <h2><?= get_the_title(16); ?></h2>
  </div>

    <div class='boxCardMetier'>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>  
      
      <a href="<?php echo get_permalink($post) ; ?>">
              
        <div class='metier1'>
          <?php 
            if ( has_post_thumbnail() ) {
              the_post_thumbnail('large');
              
          }?>
          <div class="decoBox">
            <h3><?php the_title(); ?></h3>
          </div>
        </div>
      
      </a>                        
        <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>


  
     <div class=''></div>
        <button class='buttonMetier'  onclick="window.location.href='<?php echo get_permalink(16) ; ?>'"> 
          Voir plus des métiers
        </button>
     
    

  </section>

  <section id="boxTemoin">
    
  <h2><?= get_the_title(9); ?></h2>

  <div class="decoTemoin"></div>

    <?php if ($the_query3->have_posts()) : ?>
		<?php while ($the_query3->have_posts()) : $the_query3->the_post(); ?>  
    
    


    
        <div class ="temoins">
            <?php 
              if ( has_post_thumbnail() ) {
                the_post_thumbnail('thumbnail');
            }?>

          <div class="contenair1">
            <p><?= the_excerpt(); ?></p>     
          </div>       
        </div>
      
                      
		<?php endwhile; ?>
	    <?php wp_reset_postdata(); ?>
    <?php endif; ?>


    <div class='boxBT'>
      <button class='buttonTemoin'  onclick="window.location.href='<?php echo get_permalink(9) ; ?>'"> 
        Voir plus de témoignages
      </button>
    </div>
  
  </section>
  
  
</div>

<?php get_footer(); ?>