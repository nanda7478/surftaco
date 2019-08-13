<?php
/*
 * Display Template Name: Shop Gift Cards
*/

get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('gift_cards_page_banner_image'); ?>
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


<div class="container">
	
 <div class="gift-card-page">
 	<?php
    
    $args = array('post_type'=>'gift-cards','posts_per_page'=>-1);

    $query = new WP_Query($args);
    if($query->have_posts()):
    while( $query->have_posts() ): $query->the_post();
   ?>

  <div class="row">
  	<div class="col-lg-5 col-md-12 gift-image">
  		<?php
  		if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />';
        
    }
}
  		?>
  	</div>
  	<div class="col-lg-7 col-md-12 gift-content">
  	<h4><?php the_title(); ?></h4>	
    <?php the_content();?>
   
   <div class="gift-card-price-option">
   <?php
   $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
   $paypalID = 'accounts@freelanceswitch.com';
   ?>
<form method="post" action="<?php echo $paypalURL; ?>">
<input type="hidden" name="business" value="<?php echo $paypalID; ?>">
<!-- Specify a Buy Now button. -->
<input type="hidden" name="cmd" value="_xclick">
<!-- Specify details about the item that buyers will purchase. -->
<input type="hidden" name="item_name" value="<?php the_title(); ?>">
<!-- <input type="hidden" name="item_number" value="2"> -->
<?php
// check if the flexible content field has rows of data
if( have_rows('price_flexible_content') ):
// loop through the rows of data
while ( have_rows('price_flexible_content') ) : the_row();
 if( get_row_layout() == 'price_section' ):
 ?>
 <select name="amount">
 <option>Choose Gift Card Value</option>
 <option value="<?php the_sub_field('price1');?>"><?php the_sub_field('price1');?></option>
 <option value="<?php the_sub_field('price2');?>"><?php the_sub_field('price2');?></option>
 <option value="<?php the_sub_field('price3');?>"><?php the_sub_field('price3');?></option>
 </select>
 <?php
 endif;       
 endwhile;
 endif;
 ?>
 <input type="hidden" name="currency_code" value="USD">
 <input type="image" name="submit" border="0"
 src="<?php echo site_url();?>/wp-content/themes/surftaco-child/images/paypal_ceckout.png" alt="PayPal - The safer, easier way to pay online">
 <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
</form>
   </div>

  	</div>

  </div>
 
 <?php endwhile; ?>
   
   <?php endif; ?>

<div class="gift-cards-location">
 <div class="row">
 <?php while ( have_posts() ) : the_post(); ?>
 <?php
// check if the flexible content field has rows of data
if( have_rows('gift_cards_page_flexible_content') ):
// loop through the rows of data
while ( have_rows('gift_cards_page_flexible_content') ) : the_row();
 if( get_row_layout() == 'image_&_text_section' ):
 ?>
 <div class="col-lg-6 col-md-12 gift-order">
 <?php the_sub_field('text1');?>
 </div>
  <div class="col-lg-6 col-md-12 gift-location">
 <?php the_sub_field('text2');?>
 </div>
 
 </select>
 <?php
 endif;       
 endwhile;
 endif;
 ?>
<?php endwhile; ?>
 </div>
 </div>



 </div>

</div>


<?php
get_footer();
?>