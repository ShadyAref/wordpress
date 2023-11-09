<?php get_template_part('header'); // Include the header template ?>

<div class="main-container">
    <div class="single-project-container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-project'); ?>>
                <h1><?php the_title(); // Display the project title ?></h1>
                <?php the_post_thumbnail('full', array('class' => 'project-image')); // Display the full-size project image ?>
                <div class="project-content">
                    <?php the_content(); // Display the project content ?>
                </div>
            </article>
        <?php endwhile; // End of the loop ?>
    </div>
</div>

<?php get_template_part('footer'); // Include the footer template ?>
