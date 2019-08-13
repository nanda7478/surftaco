<?php
/**
 * Display Template Name: Menu Page
 *
 */
 
 
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('menu_banner_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-left">
 <h1 class="entry-title">
<?php the_title(); ?>
 </h1>
 <p>
<?php the_content();?>
</p>   
</div>
</div>
</div>
<?php endwhile;?>
   
    
   
    
      
      

 <div class="entry-content">
<div class="expand-anchor">
<a href="javascript:void(0);" data-class="expand">EXPAND ALL + </a>
</div>
<div class="container">
<div class="menu-page">

<div class="accordion" id="accordion2">


<?php // Output all Taxonomies names with their respective items
$terms = get_terms('mp_menu_category', 'orderby=ID&order=ASC&hide_empty=0&parent=0');

foreach( $terms as $term ):
?>      

<div class="accordion-group">
<div class="accordion-heading">
<div class="collapse-main-panel">
<div class="collapse-anchor">
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $term->slug;?>">
<?php echo $term->name; // Print the term name ?>
</a>
</div>
<div class="head-img menu_item_image-<?php echo $term->term_taxonomy_id;?>">

<?php 
 $tax_term_id = $term->term_taxonomy_id;
   $images = get_option('taxonomy_image_plugin');
   echo wp_get_attachment_image( $images[$tax_term_id], 'large' );
 ?>
 </div>
</div>
<div id="collapse<?php echo $term->slug;?>" class="accordion-body collapse">
<div class="accordion-inner">
<ul>
<?php                         
          $posts = get_posts(array(
            'post_type' => 'mp_menu_item',
            'taxonomy' => $term->taxonomy,
            'term' => $term->slug,                                  
            'nopaging' => true, // to show all posts in this taxonomy, could also use 'numberposts' => -1 instead
          ));
          foreach($posts as $post): // begin cycle through posts of this taxonmy
            setup_postdata($post); //set up post data for use in the loop (enables the_title(), etc without specifying a post ID)
      ?>    
  <li>
  <h4><?php the_title(); ?></h4>
  <p><?php the_content();?></p>

  </li>
  <?php endforeach; ?>
  
</ul>
 <div class="order-now-button"><a href="https://ordering.chownow.com/order/1959/locations/" target="_blank">Order Now</a></div>
</div>
</div>
</div>


</div>
<?php endforeach; ?>
   </div>
   
   </div>
  </div></div>
  
<?php get_footer(); ?>
