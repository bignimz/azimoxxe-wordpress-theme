<?php 

/*
* Footer template.
*
* @package azimoxe
*/
?>
<?php get_template_part('template-parts/main/before-footer'); ?>
<footer class="footer py-5">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center copy">
        <p class="col-md-4 mb-0">&copy; <script>document.write(new Date().getFullYear())</script> Azimoxe, Inc</p>

        <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-md-4 justify-content-end">
          <li class="nav-item">
            <?php wp_nav_menu(array(
              "theme_location" => 'footer-menu',
              "menu" => 'nav col-md-4 justify-content-end',


              )) 
            ?>
          </li>
        </ul>
      </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>