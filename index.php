<?php get_template_part('header'); // Include the header template ?>

<div class="projects-container">
    <?php
    // Query to retrieve all projects
    $projects = new WP_Query(array(
        'post_type' => 'project', // Specify the custom post type 'project'
        'posts_per_page' => -1, // Retrieve all posts
    ));

    // Check if there are posts
    if ($projects->have_posts()) :
        // Loop through each project
        while ($projects->have_posts()) : $projects->the_post();
    ?>
        <div class="project-card">
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail('project-thumbnail', array('class' => 'project-image')); // Display the project thumbnail with a specific size ?>
            <p><?php the_content(); // Display the project content ?></p>
            <a href="<?php the_permalink(); ?>" class="project-link">View Project</a>
        </div>
    <?php
        endwhile; // End of the loop

    endif; // End of the if statement

    wp_reset_query(); // Reset the query to avoid conflicts with the main query
    ?>
</div>

<?php get_template_part('footer'); // Include the footer template ?>
