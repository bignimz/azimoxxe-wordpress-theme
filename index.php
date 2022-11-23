<?php 

/*
* Main template.
*
* @package Azimoxxe
*/
get_header();
?>
    <div class="container">
       <div class="row py-5">
       <main class="col-md-10 col-sm-12 col-12 mx-auto">
            <h2 class="post-title my-5 text-center">Blog Posts</h2>
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
                <article <?php post_class(); ?> >
                    <h3>
                        <a href="<?php echo get_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <small>Posted by <?php the_author(); ?>, on <?php the_date(); ?></small>
                    <p><?php the_excerpt(); ?></p>
                </article>

            <?php endwhile; else: ?>
                <p class="notice">Sorry no posts found!</p>
            <?php endif; ?>
        </main>
        <!-- Sidebar -->
        <aside class="sidebar col-md-2 col-sm-12 col-12 mx-auto">
            <h4 class="widget-title my-5">Widgets Go Here!</h4>
            <?php get_sidebar(); ?>
        </aside>
       </div>
    </div>
<?php 
get_footer(); 