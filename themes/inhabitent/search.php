<?php get_header(); ?>


<div class="search-grid">

<section class="search-results">

<h5>Search results for:</h5>

<hr>


<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    
    <h1><?php the_title(); ?></h1>
    <p><?php echo wp_trim_words(get_the_content(), 40, ' [...]');?></p>

    <section>
        <a href="<?php echo get_permalink();?>"><button>Read more <i class="fas fa-long-arrow-alt-right"></i></button></a>
    </section>
    
    <!-- Loop ends -->
    <?php endwhile;?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<hr>

<section class="search-button">
    <button>1</button>
    <button>2</button>
    <button>Next  <i class="fas fa-long-arrow-alt-right"></i></button>
</section>


</section>

<div class="sidebar">
<?php get_sidebar();?>
</div>

</div>


<?php get_footer();?>