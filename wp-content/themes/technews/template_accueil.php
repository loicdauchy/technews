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
      <p>
        TechNews le blog qui vous parlera des actualitées, de la découverte des métiers en rapport avec les technologies du numérique ainsi que des témoignages de professionnels...
      </p>
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

  <h2>Les actualités</h2>

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
   
    
    <button class='buttonActu'  onclick="window.location.href='les-actualites/'"> 
      Voir plus d'actualités
    </button>

  </section>

  
  <section id="boxMetiers">
  <div class="decoMetier"></div>
  <div class="metiers">

    <h2>Les métiers</h2>
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
        <button class='buttonMetier'  onclick="window.location.href='les-metiers/'"> 
          Voir plus des métiers
        </button>
     
    

  </section>

  <section id="boxTemoin">
    
  <h2>Témoignages</h2>

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
      <button class='buttonTemoin'  onclick="window.location.href='les-temoignages/'"> 
        Voir plus de témoignages
      </button>
    </div>
  
  </section>
</div>

<?php get_footer(); ?>


<script>

  if (window.matchMedia("(max-width: 1024px)").matches) {
    document.getElementById('Nhamburger').style.width = "100%";
    document.getElementById('Nhamburger').style.position = "fixed";
    document.getElementById('Nhamburger').style.top = "0";
    document.getElementById('Nhamburger').style.left = "0";
    document.getElementById('Nhamburger').style.height = "65px";
    document.getElementById('Nhamburger').style.zIndex = "1000";
    document.getElementById('Nhamburger-button').style.color = "#000";
    document.getElementById('Nhamburger-button').style.zIndex = "1001";
  }else{
    document.getElementById('Nhamburger-content').style.background = "transparent";
    document.getElementById('Nhamburger-content').style.transition = "all 0.2s ease-in-out";
  }

  window.onscroll = () => {
      if (window.scrollY > 200) {
          if (window.matchMedia("(max-width: 1024px)").matches) {
            document.getElementById('Nhamburger').style.background = "#fff";
            document.getElementById('Nhamburger').style.boxShadow = "-2px 2px 29px 0px rgba(0,0,0,0.75)";
          }else{
            document.getElementById('Nhamburger-content').style.background = "#fff";
            document.getElementById('Nhamburger-content').style.boxShadow = "-2px 2px 29px 0px rgba(0,0,0,0.75)";
          }
         
      }else{
          if (window.matchMedia("(max-width: 1024px)").matches) {
            document.getElementById('Nhamburger').style.background = "transparent";
            document.getElementById('Nhamburger').style.boxShadow = "inherit";
          }else{
            document.getElementById('Nhamburger-content').style.background = "transparent";
            document.getElementById('Nhamburger-content').style.boxShadow = "inherit";
          }
      }
      
  }

</script>