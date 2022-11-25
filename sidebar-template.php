<?php 

/*
* Template Name: Page With Sidebar
*
* @package Azimoxe
*/

get_header();
?>
<?php get_template_part('template-parts/header/page-header'); ?>
    <div class="container">
       <div class="row py-5">
            <main class="col-md-8 col-sm-12 col-12 mx-auto">
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
                    <?php the_title('<h2>', '</h2>') ?>
                    <?php the_content(); ?>
                <?php endwhile; else: ?>
                    <p class="notice"><?php esc_html_e("Sorry no posts found!", 'azimoxxe') ?></p>
                <?php endif; ?>
            </main>
            <?php get_sidebar('page'); ?>
       </div>
    </div>
<?php 
get_footer(); 