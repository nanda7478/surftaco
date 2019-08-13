<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
 
get_header(); ?>

<!--  This code for Catering Page Start  -->
<?php

  if(is_page('catering')) :
?>


<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('catering_banner_image'); ?>
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
<div class="catering-page">
<div class="row">
<?php
  if( have_rows('content_catering') ):

     
    while ( have_rows('content_catering') ) : the_row();

        if( get_row_layout() == 'catering_text' ):
          ?>
   <div class="col-md-12 top-content"><?php the_sub_field('catering_title');?></div>
<?php
endif;
endwhile;
endif;
  ?>
</div>


<div class="row">
<?php
  if( have_rows('content_catering') ):
  while ( have_rows('content_catering') ) : the_row();
  if( get_row_layout() == 'form_section' ):
 ?>
<div class="col-lg-6"><div class="left-catering-form"><?php the_sub_field('catering_form');?></div></div>
<div class="col-lg-6"><div class="right-catering"><?php the_sub_field('most_feed');?></div></div>
<?php
endif;
endwhile;
endif;
  ?>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 catering-bottom-slider">
  <div class="wireship_slider">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
             <?php
                 $i=0;            
                 while( have_rows('slider') ): the_row();            
                 if ($i == 0) {            
               echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';            
               } else {            
               echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';            
               }            
               $i++;            
            endwhile; ?>
           <!--    <li data-target="#bs-carousel" data-slide-to="2"></li> -->          
      </ol>


    <div class="carousel-inner">
           <?php
              $z = 0;            
              while( have_rows('slider') ): the_row();            
              $image = get_sub_field( 'image' ); ?>       
            
         <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>" style="background-image: url(<?php echo $image['url']; ?>); ">
                 
            <div class="container carousel-caption-table">
              <div class="carousel-caption-table-cell text-left">                          
                  <h1><?php the_sub_field('title');?></h1>   
                  <h3><?php //the_sub_field('slider_sub_heading');?></h3>
               </div>
           </div>
               
         </div>
            <?php
               $z++;           
               endwhile; ?>

       <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
      </a>


      </div>

</div>
</div>
</div>
</div></div>
<!-- slider part end here --> 
<?php endif; ?>

<!--  This code for Catering Page End -->




<!--  This code for ST CARES Start  -->

<?php

  if(is_page('st-cares')) :

?>
<div class="row">
<div class="col-md-12 top-care-img">
	<?php $image = get_field('banner_image'); ?>
   <img src="<?php echo $image['url'];?>">
</div>

</div>


<div class="st-care-middle">
<div class="second-section-care">
<div class="container">
<div class="row">

  <?php
  if( have_rows('content_st_cares') ):

     
    while ( have_rows('content_st_cares') ) : the_row();

        if( get_row_layout() == 'cares_header_text' ):
          ?>
   <div class="col-md-12"><div class="second-sctn-content"><?php the_sub_field('header_text');?></div></div>
<?php
endif;
endwhile;
endif;
  ?>

</div></div></div>

<div class="third-section">
<div class="row">

  <?php
  if( have_rows('content_st_cares') ):

     
    while ( have_rows('content_st_cares') ) : the_row();

        if( get_row_layout() == 'cares_image' ):
          ?>
   <div class="col-lg-6 col-md-12 left-third">
   <?php $image = get_sub_field('images'); ?>
   <img src="<?php echo $image['url'];?>"></div>
   <div class="col-lg-6 col-md-12 right-third"><div class="right-care-matter"><div class="care-para"><?php the_sub_field('cares_text');?></div></div></div>
<?php
endif;
endwhile;
endif;
  ?>

</div></div>

<div class="container">
<div class="fourth-section-care">
<div class="row">

  <?php
  if( have_rows('content_st_cares') ):

     
    while ( have_rows('content_st_cares') ) : the_row();

        if( get_row_layout() == 'care_help_unite' ):
          ?>
   <div class="col-lg-4 col-md-12 care_boxes"><?php the_sub_field('help');?></div>
   <div class="col-lg-4 col-md-12 care_boxes"><?php the_sub_field('unite');?></div>
   <div class="col-lg-4 col-md-12 care_boxes"><?php the_sub_field('care');?></div>
<?php
endif;
endwhile;
endif;
  ?>

</div></div>

<div class="fifth-section">
<div class="row">
<div class="col-md-12">
<div class="st_cares_gallery">
<?php 

$images = get_field('gallery_section');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul id="myList">
        <?php foreach( $images as $image ): ?>
            <li>
            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<div id="loadMore"><center><img src="http://demosrvr.com/wp/surftaco/wp-content/uploads/2018/02/arrow.png"></center></div>
<!-- <div id="showLess">Show less</div> -->
</div>

</div>

</div></div>

<div class="sixth-section">
<div class="row">
<div class="col-md-12">

<?php the_field('our_organization');?>
</div>

</div>
</div>


<div class="seventh-section">
<div class="row">
<div class="col-md-12">

<?php the_field('upcoming_events');?>
</div>

</div>

<div class="row">

<div class="col-xs-12 col-md-12">
   <ul>
    <?php
    $args = array( 'posts_per_page' => 5, 'category' => 28 );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

    <li><div class="event-post-image"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
    <div class="eventpostcontent">
    <h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <div class="read_more_link"><a href="<?php the_permalink();?>">Learn More</a></div>
    </div>
    </li>
    
    <?php endforeach; 
    wp_reset_postdata();?>
</ul>



</div>
</div>

</div>
</div>
</div>
<?php endif; ?>

<!--  This code for ST CARES End  -->




<!--  This code for Contact Us Page Start  -->

<?php
  
  if(is_page('contact-us')):

?>


<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('contact_banner_image'); ?>
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
<div class="contact-page">
  <div class="row">
<?php
  if( have_rows('content_contact_pag') ):
  while ( have_rows('content_contact_pag') ) : the_row();
  if( get_row_layout() == 'contact_page' ):
 ?>
<div class="col-lg-6 left-contact col-md-12"><?php the_sub_field('contact_form');?></div>
<div class="col-lg-6 right-img col-md-12">
<?php the_sub_field('contact_image');?>
</div>

<?php
endif;
endwhile;
endif;
  ?>
</div>

</div></div>


<?php endif;?>	

<!--  This code for Contact Us Page End  -->


<!--  This code for About Us Page Start  -->

<?php
  if(is_page('about')):
?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('about_header_banner'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-left">
 <p>
<?php the_content();?>
</p>   
</div>
</div>
</div>
<?php endwhile;?>

<div class="about-page">
  <div class="row">
<?php
  if( have_rows('about_page_content') ):
  while ( have_rows('about_page_content') ) : the_row();
  if( get_row_layout() == 'text_and_image_1' ):
 ?>
<div class="col-md-6">
	<?php $image = get_sub_field('image_1'); ?>
   <img src="<?php echo $image['url'];?>">
</div>


<div class="col-md-6"><div class="right-about"><div class="about-content"><?php the_sub_field('text_1');?></div></div></div>
<?php
endif;
endwhile;
endif;
  ?>

  </div>



<div class="row">
<?php
  if( have_rows('about_page_content') ):
  while ( have_rows('about_page_content') ) : the_row();
  if( get_row_layout() == 'text_and_image_2' ):
 ?>


<div class="col-md-6 mobile-view-div">
	
	<?php $image = get_sub_field('image_2'); ?>
   <img src="<?php echo $image['url'];?>">
</div>

<div class="col-md-6"><div class="right-about"><div class="about-content"><?php the_sub_field('text_2');?></div></div></div>
<div class="col-md-6 desktop-view-div">
	
	<?php $image = get_sub_field('image_2'); ?>
   <img src="<?php echo $image['url'];?>">
</div>
<?php
endif;
endwhile;
endif;
  ?>

  </div>


<div class="row">
<?php
  if( have_rows('about_page_content') ):
  while ( have_rows('about_page_content') ) : the_row();
  if( get_row_layout() == 'text_and_image_3' ):
 ?>
<div class="col-md-6">
	
	<?php $image = get_sub_field('image_3'); ?>
   <img src="<?php echo $image['url'];?>">
</div>


<div class="col-md-6"><div class="right-about"><div class="about-content"><?php the_sub_field('text_3');?></div></div></div>
<?php
endif;
endwhile;
endif;
  ?>

  </div>


  <div class="row">
<?php
  if( have_rows('about_page_content') ):
  while ( have_rows('about_page_content') ) : the_row();
  if( get_row_layout() == 'text_and_image_4' ):
 ?>


<div class="col-md-6 mobile-view-div">
	
	<?php $image = get_sub_field('image_4'); ?>
   <img src="<?php echo $image['url'];?>">
</div>

<div class="col-md-6"><div class="right-about"><div class="about-content"><?php the_sub_field('text_4');?></div></div></div>

<div class="col-md-6 desktop-view-div">
	
	<?php $image = get_sub_field('image_4'); ?>
   <img src="<?php echo $image['url'];?>">
</div>
<?php
endif;
endwhile;
endif;
  ?>

  </div>


  </div>



<?php endif;?>

<!--  This code for About Us Page End   -->


<!--  This code for FAQ'S Page Start   -->

<?php
  if(is_page('faqs')):
?>


 <?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('faqs_banner'); ?>
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
<div class="faq-page">
  <div class="row">
  <div class="col-lg-7 col-md-12">
  <?php

// check if the flexible content field has rows of data
if( have_rows('faqs_content') ):

// loop through the rows of data
while ( have_rows('faqs_content') ) : the_row();

if( get_row_layout() == 'question_type_text' ):?>
<div class="question_type"><?php the_sub_field('question_type');?></div>
<?php endif;

endwhile;
endif;
?>
    <div class="accordion">
<?php

// check if the flexible content field has rows of data
if( have_rows('faqs_content') ):

// loop through the rows of data
while ( have_rows('faqs_content') ) : the_row();

if( get_row_layout() == 'question_and_answer' ):?>

<dt>
<a href=""><h3><?php the_sub_field('question');?></h3></a>
</dt>

<dd>
<?php the_sub_field('answer');?>
</dd>

<?php endif;

endwhile;

else :

// no layouts found

endif;

?>
</div>
</div>


<?php

// check if the flexible content field has rows of data
if( have_rows('faqs_content') ):

// loop through the rows of data
while ( have_rows('faqs_content') ) : the_row();

if( get_row_layout() == 'question_and_answer_image' ):?>

<div class="col-lg-5 col-md-12">
	<?php the_sub_field('right_image');?>
</div>
<?php endif;

endwhile;
endif;
?>


</div>


</div></div>


<?php endif; ?>

<!--  This code for FAQ'S Page End   -->



<!--  This code for Apply Page Start   -->

<?php
if(is_page('apply')):
?>


<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('apply_banner_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-left">
 <p>
<?php the_content(); ?>
 </p>  
</div>
</div>
</div>
<?php endwhile;?>

  <div class="container">
  <div class="apply-page">
  <div class="row">

    <div class="col-md-12">
      <?php the_field('apply_content');?>
    </div>


  </div>
  </div>
</div>
<?php endif; ?>
<!--  This code for Apply Page End   -->


<?php get_footer(); ?>