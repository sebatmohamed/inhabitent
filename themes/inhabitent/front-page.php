<?php get_header(); ?>

<!-- <div>
<?php the_post_thumbnail('large');?>
</div> -->

<section class="home">
    <img class="home-banner" src="http://localhost:8888/Inhabitent/wp-content/uploads/2019/11/home-hero.jpg" width="100%" height="100%">        
    <img class="main-logo" src="<?php echo get_stylesheet_directory_uri();?>\images\logos\inhabitent-logo-full.svg">

<?php $terms = get_terms( array(
    'taxonomy' => 'product-type',
    'hide_empty' => false,
));
foreach ($terms as $term):
    echo $term->name;
    echo '<br>';
    echo $term->$slug;
    echo '<br>';
endforeach;
?>


<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    <?php the_title();
    the_content();?>


    <?php endwhile;?>

    <?php the_posts_navigation();?>

    <?php
    $args = array( 'numberposts' => 3, 'order' => 'ASC', 'orderby' => 'title');
    $postslist = get_posts( $args );
    foreach ($postslist as $post): setup_postdata($post);?>
    <div>
    <?php the_date();?>
    <br>
    <?php the_title();?>
    <?php echo wp_trim_words(get_the_excerpt(), 10, '...');?>
    </div>

    <?php endforeach;?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>

    
<?php get_footer();?>