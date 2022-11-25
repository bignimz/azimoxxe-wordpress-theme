<?php 

/*
* Template Name: About Page.
*
* @package Azimoxe
*/

get_header();
?>
    <div class="container">
       <div class="row py-5">
       <main>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
                <?php the_title('<h2>', '</h2>') ?>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <p class="notice"><?php esc_html_e("Sorry no posts found!", 'azimoxxe') ?></p>
            <?php endif; ?>
        </main>
       </div>
    </div>
<?php 
get_footer(); 