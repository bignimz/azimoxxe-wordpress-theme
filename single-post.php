<?php 

get_header();
?>
<div class="container row mx-auto py-5">
    <article class="hidden col-md-8 mx-auto" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
        <?php the_post_thumbnail('medium'); ?>
        <p class="my-3">Author: <?php the_author(); ?></p>
        <p class="mt-4">Category: <strong class="d-inline-block mb-2 text-primary"><?php the_category(' '); ?></strong></p>
        <h3 class="mb-0">
            <?php the_title(); ?>
        </h3>
        <div class="mb-1 text-muted"><?php echo get_the_date(); ?></div>
        <p class="card-text mb-auto"><?php the_content(); ?></p>
    </article>
    <?php get_sidebar('blog'); ?>
</div>
<?php 
get_footer(); 