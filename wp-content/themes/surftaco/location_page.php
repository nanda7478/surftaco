<?php
/**
 * Display Template Name: Location Page
 */
 
 
get_header(); ?>


<div class="container">
  <div class="row">
    <div class="col-md-12 loc">
      <?php while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" class="well text-center">
        <h1><?php the_title();?></h1>
        <?php the_content();?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
  <div class="location-page">
   

 

  <div id="masonry">
   <?php
    $i = 1;
    $args = array('post_type'=>'location','posts_per_page'=>-1);

    $query = new WP_Query($args);
    if($query->have_posts()):
    while( $query->have_posts() ): $query->the_post();
   ?>

    <div class="item grid-item-<?php echo $i; ?>">
    <?php
    if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
      ?>
      <a class="image-link" href="<?php the_permalink();?>">
      <img class="img-responsive flsd"  src="<?php echo esc_url( $large_image_url[0] );?>" />
      </a>
    

      <?php  
    }
    }
    ?>
    <div class="location_title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
    </div>

    <?php $i++; endwhile; ?>
   
   <?php endif; ?>

  </div>
  
  



</div>
</div>

<?php get_footer(); ?>