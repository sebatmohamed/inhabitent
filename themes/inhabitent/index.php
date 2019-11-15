<?php get_header(); ?>

<div class="journal-posts-grid">

<section class="journal-posts">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <div class="photo-text">
    <h2><?php the_title(); ?></h2>
    <?php the_post_thumbnail('large');?>

    <div class="bottom-photo-text">
    <h6><?php the_date(); ?>/</h6>
    <h6><?php echo comments_number();?>/</h6>
    <h6><?php echo " by " . get_the_author();?></h6>
    </div>
    
    </div>

   

    <p><?php echo wp_trim_words(get_the_content(), 60, ' [...]');?></p>

    <section>
    <a href="<?php echo get_permalink();?>"><button>Read more <i class="fas fa-long-arrow-alt-right"></i></button></a>
    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

    <?php the_posts_navigation();?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

<div class="sidebar">
<?php get_sidebar();?>
</div>

</div>

<?php get_footer();?>