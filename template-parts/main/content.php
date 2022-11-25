<article class="hidden col-md-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <?php the_post_thumbnail('medium'); ?>
        <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary"><?php the_category(' '); ?></strong>
            <h3 class="mb-0">
                <a href="<?php echo get_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h3>
            <div class="mb-1 text-muted"><?php echo get_the_date(); ?></div>
            <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
        </div>
        <div class="col-auto d-none d-lg-block">
        </div>
    </div>
</article>
