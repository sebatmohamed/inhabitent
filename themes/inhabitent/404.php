<?php get_header(); ?>

<section class="error-page">

<div class="error-page-search">
<h1>Oops! that page can't be found</h1>
<p>It looks like nothing was found at this location. Maybe try one the links below or a search?</p>
<input type="text" placeholder="Type and hit enter...">


<div class="error-page-posts">

<h2>Recent posts</h2>

<?php 

// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-5)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 
<ul>
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>

<div class="error-page-categories">

<h2>Most used categories</h2>

<ul>
    <?php wp_list_categories( array(
        'orderby'            => 'name',
        'show_count'         => true,
        'title_li' =>  ''
    ) ); ?>
</ul>

</div>

<divc class="error-page-archives">
    <h2>Archives</h2>
    <p>Try looking into the monthly archives. 🙂</p>

    <div class="options">
          <select id="sections" class="select-menu">
            <option value="">Select Month</option>
            <option value="november">April 2016</option>
            <option value="november">March 2016</option>
          </select>
    </div>

</div>

</div>

<div class="sidebar">
<?php get_sidebar();?>
</div>

</section>


<?php get_footer();?>