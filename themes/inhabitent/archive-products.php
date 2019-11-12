<?php get_header(); ?>

<h1>Shop stuff</h1>

<div class="links">
   <a><p>Do</p></a>
<a><p>Eat</p></a>
<a><p>Sleep</p></a>
<a><p>Wear</p></a> 
</div>

<hr class="dashed">

<section class= "all-products">

<?php if( have_posts() ) :

//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

    
    <figure class="archive-products">

     <?php the_post_thumbnail('large');?>

    <div class="grey-space"></div>

    <figcaption>
        <hr class="dotted"></hr>
    <a href="<?php echo 'product-type/';?>">
    <div>
        <p><?php the_title();?></p>
        <p><?php echo " $" . get_field('price');?></p>
    </div>
    
    </a>
        
        
    </figcaption>
   
    </figure>    

    
    <!-- Loop ends -->
    <?php endwhile;?>

    <!-- <?php the_posts_navigation();?> -->

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

</section>
    
<?php get_footer();?>