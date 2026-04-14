<?php
/**
 * The main template file for displaying posts.
 *
 * @package WordPress
 */

get_header();
?>

<div class="container">
    <div class="content">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                // Display the post content
                the_title( '<h2>', '</h2>' );
                the_content();
            endwhile;

            // Pagination
            the_posts_pagination( [
                'mid_size' => 2,
                'prev_text' => __( 'Previous', 'textdomain' ),
                'next_text' => __( 'Next', 'textdomain' ),
            ] );
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </div>
</div>

<?php
get_footer();
?>