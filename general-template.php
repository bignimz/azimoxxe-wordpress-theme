<?php 

/*
* Template Name: General.
*
* @package Azimoxe
*/

get_header();
?>
<?php get_template_part('template-parts/header/page-header'); ?>

    <div class="py-5">
        <div class="container">
            <main>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
                    <?php the_content(); ?>
                <?php endwhile; else: ?>
                    <p class="notice"><?php esc_html_e("Sorry no posts found!", 'azimoxxe') ?></p>
                <?php endif; ?>
            </main>
       </div>
    </div>
<?php 
get_footer(); 