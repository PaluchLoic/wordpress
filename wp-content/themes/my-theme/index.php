<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
      
    $banner_background_image = get_field('banner_background_image');
      
    $banner_register_link = get_field('banner_register_link');

    $image_suivante = get_field('image_suivante');

    $programe_image = get_field('image_programme');

    
    
    

?>

<section class="banniere" style="background-image : url(<?php echo $banner_background_image['url'] ?>)">
    
    <div class="b-txt">
        <p class="b-txt1"><?php the_field('banner_baseline') ?></p>
        <p class="b-txt2"><?php the_field('banner_title_brown') ?></p>
        <p class="b-txt3"><?php the_field('banner_title_green') ?></p>
        <p class="b-txt4"><a id="b1t4" href="<?php echo $banner_register_link['url'] ?>"><?php echo $banner_register_link['title'] ?></a></p>    
    </div>
    
</section>

<section class="conference">
    
    <div class="b1-txt">
        <p class="b1-txt1"><?php the_field('conference_title') ?></p>
        <div class="trait1"><hr></div>
        <div class="b1-txt2"><?php the_field('conference_content') ?></div>    
    </div>
    
</section>

<div id="bendeau" style="background-image : url(<?php echo $image_suivante['url'] ?>)">
    
</div>

<section class="section4" style="background-image: url(<?php echo $programe_image['url']; ?>)">
    <div>
    <p class="b1-txt1"><?php the_field('title_programme') ?></p>
        <div id="grid">
            <div id="menue1">
                <h2><?php the_field('part_title_1'); ?></h2>
                
        <?php        
          $programs = get_field('content_part_1');
            foreach($programs as $program){  
                echo "<p><b>".$program['hour']."</b>".$program['description']."</p>"; 
            }
        ?>
            </div>
            <div id="menue2">
                <h2><?php the_field('part_title_2'); ?></h2>
        <?php     
            $programs = get_field('content_part_2');
            foreach($programs as $program){  
                echo "<p><b>".$program['hour']."</b>".$program['description']."</p>";  
            }
        ?>
            
            </div>
        </div>
        <button><?php the_field('programme_register_link');?></button>
    </div>
</section>
    
    
    
    
<?php
      
  }
}
    
?>

</div>

<?php get_footer(); ?>