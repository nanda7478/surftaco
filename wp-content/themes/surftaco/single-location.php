<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('location_banner_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-left">
 <h1 class="entry-title">
<?php the_title(); ?>
 </h1>   
</div>
</div>
</div>
<?php endwhile;?>



<div class="container">
<div class="row">

<div class="col-xs-12 col-md-12">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<div class="row">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		?>

		<div class="col-lg-6">
			<?php twentysixteen_post_thumbnail(); ?>
		</div>
		<div class="col-lg-6">
        <div class="loaction-content">
        <div class="location-add">
			<div class="entry-content">
			<?php the_content();?>
			</div>
            <div class="order_now_button"><a href="https://ordering.chownow.com/order/1959/locations/">Order Now</a></div>

		</div></div>
</div>
            <?php
			
		endwhile;
		?>

		</div>

	</main>

</div><!-- .content-area -->
</div>
</div>


<div class="other-locate">
<h1>Other Surf Taco Locations</h1>
<div class="row">


<?php
  if( have_rows('location_content') ):
  while ( have_rows('location_content') ) : the_row();
  if( get_row_layout() == 'new_jersey_content' ):
 ?>

<div class="col-lg-7 col-12 col">
<div class="other-loc-content">
<div class="new_jersey_image first-img">
	<?php $image = get_sub_field('image'); ?>
   <img src="<?php echo $image['url'];?>">
</div>
   <div class="new_jersey_text first-content"><?php the_sub_field('text');?></div>
</div></div>
<?php
endif;
endwhile;
endif;
  ?>



<?php
  if( have_rows('location_content') ):
  while ( have_rows('location_content') ) : the_row();
  if( get_row_layout() == 'florida_content' ):
 ?>
 
<div class="col-lg-5 col-12 col">
<div class="other-loc-content">
<div class="new_jersey_image second-img">
	<?php $image = get_sub_field('florida_image'); ?>
   <img src="<?php echo $image['url'];?>">
   </div>

   <div class="new_jersey_text second-content"><?php the_sub_field('florida_text');?></div>
</div></div>
<?php
endif;
endwhile;
endif;
  ?>


</div>




</div></div>


<?php get_footer(); ?>
