<?php 

/*
* Template Name: Home Page.
*
* @package Azimoxe
*/

get_header();
?>

<main <?php body_class(); ?>>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="hidden2 col-lg-6 text-center text-lg-start">
                    <h3 class="sub-title-color">Welcome</h3>
                    <h1 class="hero-title lh-1 mb-5">Azimoxe Creative</h1>
                    <p class="col-lg-10">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                    <a href="<?php bloginfo('home_url'); ?>/about" class="btn btn-warning mt-4">Read More</a>
                </div>
                <div class="hidden col-md-10 mx-auto col-lg-6 hero-img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/hero-main.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Intro Section -->
    <?php get_template_part('template-parts/main/intro') ?>

    <!-- Services section -->
    <section class="services">
        <div class="container">
            <div class="row align-items-center">
                <?php get_template_part('template-parts/main/services') ?>
                <div class="col-md-6 col-12 mx-auto hidden1">
                    <p class="sub-title text-center">Services we provide</p>
                    <h3 class="intro-title text-center mb-5">Building & Maintaining Web Applications</h3>
                    <p class="content text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste assumenda ab delectus accusantium, aliquid quo nulla, quibusdam illo ipsum explicabo omnis? Ipsam maxime laborum reprehenderit quo! Vitae, reprehenderit tenetur. Eligendi.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <?php get_template_part('template-parts/main/features') ?>
</main>

<?php 
get_footer(); 