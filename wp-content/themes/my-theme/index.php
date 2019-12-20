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
      
$banniere = get_field('banniere_image_de_fond');
$entre = get_field('entre_image_de_fond'); 

  }
}
?>
    
<section class="section-1" style="background-image: url(<?php echo $banniere['url'];?>);">
    <div>
        <p class="s11"><?php the_field('banniere_baseline'); ?></p>
        <p class="s12"><?php the_field('banniere_titre_marron'); ?></p>
        <p class="s13"><?php the_field('banniere_titre_vert'); ?></p>
    </div>
</section> 
    
<section class="section-2">
    <h1 class="titre_section"><?php the_field('conference_titre'); ?></h1>
    <hr>
    <p><?php the_field('conference_content'); ?></p>
    </section> 

    <div class="entre23" style="background-image: url(<?php echo $entre['url'];?>);"> </div>
    
    <section class="section-3">
        <h1><?php the_field('programme_titre'); ?></h1>
        <hr>
        <div class="prog">
            <div class="prog1">
                <p class="prog_soustitre"><?php the_field('programme1_soustitre'); ?></p>
                <ul>
                    <li><?php the_field('programme1_h1'); ?></li>
                    <li><?php the_field('programme1_h2'); ?></li>
                    <li><?php the_field('programme1_h3'); ?></li>
                    <li><?php the_field('programme1_h4'); ?></li>
                    <li><?php the_field('programme1_h5'); ?></li>
                </ul>
            </div>
            
            <div class="prog2">
                <p class="prog_soustitre"><?php the_field('programme2_soustitre'); ?></p>
                <ul>
                    <li><?php the_field('programme2_h1'); ?></li>
                    <li><?php the_field('programme2_h2'); ?></li>
                    <li><?php the_field('programme2_h3'); ?></li>
                    <li><?php the_field('programme2_h4'); ?></li>
                </ul>
            </div>
        
        </div>
        
    
    
    </section>

</div>    
    
</div>



<?php get_footer(); ?>