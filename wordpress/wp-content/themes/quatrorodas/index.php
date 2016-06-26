<?php get_header(); ?>
<!-- <ul>
<?php while ( have_posts() ) : the_post() ?>
<li>
          <?php the_excerpt(); ?>
</li>
<?php endwhile; ?>
</ul> -->
<section class="highlighted">
    <picture class="highlighted-images">
        <source srcset="<?php echo get_template_directory_uri();?>/img/desktop/highlights.jpg" media="(min-width: 1024px)">
        <source srcset="<?php echo get_template_directory_uri();?>/img/mobile/highlights.jpg">
        <img srcset="<?php echo get_template_directory_uri();?>/img/mobile/highlights.jpg" alt="">
    </picture>
</section>
<section class="others">
    <picture class="others-images">
        <source srcset="<?php echo get_template_directory_uri();?>/img/desktop/categories.jpg" media="(min-width: 1024px)">
        <img srcset="<?php echo get_template_directory_uri();?>/img/desktop/categories.jpg" alt="">
    </picture>
</section>

<?php get_footer(); ?>