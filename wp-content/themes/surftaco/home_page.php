<?php
/**
 * Display Template Name: Front Page

 */
 
 
get_header(); ?>


<div class="slider_section">
  <div class="row">
    <div class="col-md-12">
    
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
                  <h3><?php the_sub_field('subtitle');?></h3>
                  <div class="slider_button_text"><a href="<?php the_sub_field('button_url');?>"><?php the_sub_field('button_text');?></a></div>
               </div>
           </div>
               
         </div>
            <?php
               $z++;           
               endwhile; ?>



      </div>

</div>
</div>



</div>
</div>
</div>

<div class="container">
<div class="good_food_vibe_section">
<div class="row">
  <?php
  if( have_rows('content') ):

     
    while ( have_rows('content') ) : the_row();

        if( get_row_layout() == 'text' ):
          ?>

         <div class="col-lg-3 col-md-6"><?php the_sub_field('text_1');?></div>
         <div class="col-lg-3 col-md-6"><?php the_sub_field('text_2'); ?></div>
         <div class="col-lg-3 col-md-6"><?php the_sub_field('text_3'); ?></div>
         <div class="col-lg-3 col-md-6"><?php the_sub_field('text_4'); ?></div>
        <?php

        endif;

    endwhile;

endif;
  ?>
  </div>
  </div>


 <div class="catering_gift_cart_section">
  <div class="row">
  <?php
  if( have_rows('content') ):

     
    while ( have_rows('content') ) : the_row();

        if( get_row_layout() == 'catering_&_giftcard' ):
          ?>

         <div class="col-lg-7 col-md-12"><?php the_sub_field('catering_image');?></div>
         <div class="col-lg-5 col-md-12"><?php the_sub_field('giftcard_image'); ?></div>
        <?php

        endif;

    endwhile;

endif;
  ?>
  </div>
  </div>


  <div class="video_section">
   <div class="row">
   <?php
  if( have_rows('content') ):

     
    while ( have_rows('content') ) : the_row();

        if( get_row_layout() == 'video_section' ):
          ?>

         <div class="col-md-12"><?php the_sub_field('vide');?></div>
        <?php

        endif;

    endwhile;

endif;
  ?>


 

   </div>
  </div>


  <div class="social_link_section">
   <div class="row">
   <?php
  if( have_rows('content') ):

     
    while ( have_rows('content') ) : the_row();

        if( get_row_layout() == 'social_section' ):
          ?>

         <div class="col-md-12"><?php the_sub_field('social_link');?></div>
        <?php

        endif;

    endwhile;

endif;
  ?>
   </div>
  </div>


  <div class="social_link_section">
   <div class="row">
   <?php
  if( have_rows('content') ):

     
    while ( have_rows('content') ) : the_row();

        if( get_row_layout() == 'instagram_section' ):
          ?>

         <div class="col-md-12"><?php the_sub_field('instagram_text');?></div>
         <div class="col-md-12"><?php the_sub_field('instagram_shordcode');?></div>
        <?php

        endif;

    endwhile;

endif;
  ?>
   </div>
  </div>


  </div>


<?php get_footer(); ?>


