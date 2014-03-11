
<?php
get_header(); ?>

<div id="main">
    <div id="content">
       <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
       <?php endwhile; ?>
       <?php endif; ?>
    </div>
    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>



<?php get_footer(); ?>
