<?php 

/*
* Template Name: Home Page.
*
* @package Azimoxe
*/

get_header();
?>

<main>
    <div class="container">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="hidden2 col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3">Creative Digital Agency</h1>
                <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div>
            <div class="hidden col-md-10 mx-auto col-lg-5">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/main.png" alt="" class="img-fluid">
            </div>
        </div>

        <?php if(have_posts()) : while(have_posts()) : the_post(); ?> 
            <?php the_content(); ?>
        <?php endwhile; else: ?>
            <p class="notice"><?php esc_html_e("Sorry no posts found!", 'azimoxxe') ?></p>
        <?php endif; ?>

    </div>
    <section class="features-section hidden py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 text-center">
                    <i class="fa fa-money" aria-hidden="true"></i>
                    <h2 class="fw-normal">Affordable</h2>
                    <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 text-center">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <h2 class="fw-normal">Heading</h2>
                    <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4 text-center">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                    <h2 class="fw-normal">Heading</h2>
                    <p>And lastly this, the third column of representative placeholder content.</p>
                </div><!-- /.col-lg-4 -->
            </div>
        </div>
    </section>
</main>

<?php 
get_footer(); 