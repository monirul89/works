<?php
get_header()
?>
<!-- top Products -->
<div class="ads-grid">
    <div class="container">
        <div class="side-bar col-md-3">
            <?php get_template_part('template_parts/siderbar/sidebar', 'sidebar'); ?>
        </div>
        <div class="agileinfo-ads-display col-md-9">
            <?php get_template_part('template_parts/content/content', 'page-content'); ?>
        </div>
    </div>
</div>

<?php
get_footer()
?>


