<?php get_header(); ?>

<div class="journal-posts">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <div class="photo-text">
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large');?>
    </div>
    <p><?php echo wp_trim_words(get_the_content(), 60, ' [...]');?></p>
    <section>
    <button>Read more <i class="fas fa-long-arrow-alt-right"></i></button>
    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</div>

<?php get_sidebar();?>
<?php get_footer();?>