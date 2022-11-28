<?php 

/*
* Main template.
*
* @package Azimoxe
*/

get_header();
?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
    <div class="container">
       <div class="py-5">
            <main class="row col-md-8 col-12 mx-auto">
                <h1 class="mb-4">Blog Posts</h1>
                <hr>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
                    <?php get_template_part('template-parts/main/content') ?>
                <?php endwhile; else: ?>
                    <p class="notice"><?php esc_html_e("Sorry no posts found!", 'azimoxxe') ?></p>
                <?php endif; ?>
            </main>
            <?php get_sidebar( 'blog' ); ?>
       </div>
    </div>
<?php 
get_footer(); 