<?php 
    if(! is_active_sidebar('main-sidebar')) {
        return;
    }
?>
<aside class="sidebar col-md-3 col-12 mx-auto">
    <div class="card shadow-sm p-5">
        <?php dynamic_sidebar('main-sidebar'); ?>
    </div>
</aside>