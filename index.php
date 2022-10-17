<?php 

/*
* Main template.
*
* @package Azimoxxe
*/
get_header();
?>
    <main>Main content</main>
    <h2><?php echo filemtime(get_template_directory() . '/style.css') ?></h2>
<?php 
get_footer(); 