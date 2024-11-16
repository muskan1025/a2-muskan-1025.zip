<?php get_header(); ?>
<main>
    <?php get_template_part('template-parts/slider'); ?>
    <section class="content">
        <!-- Your main content here -->
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>
