<?php
/**
 * Display Template Name: All Page
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
<?php global $post;?>
<div id="primary" class="content-area"> 
  <div id="content" class="site-content" role="main">    
   
    <?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <header class="entry-header">
        <h1 class="entry-title">
          <?php // the_title(); ?>
        </h1>
        <span class="tital-slogan">
        <?php // echo the_meta(); ?>
        </span> </header>
      <!-- .entry-header -->      
      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
      </div>
      <!-- .entry-content -->
      <footer class="entry-meta">
        <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
      </footer>
      <!-- .entry-meta --> 
    </article>
    <!-- #post -->
    <?php comments_template(); ?>
    <?php endwhile; ?>
  </div>
  <!-- #content --> 
</div>
<!-- #primary -->
<?php if(wp_get_post_parent_id( $post->ID ) == $parent_id_of_pages){ ?>
<div class="col1of1-col1of2">
  <div class="col1of1"> 
    <div class="angle-arrow"></div>
    <a href="<?php echo esc_url( get_permalink($pre_page['ID']) ); ?>" class="previous-project"> 
      <span><?php echo $pre_page['post_title']; ?></span> 
    </a> 
  </div>
  <div>
    <a href="<?php echo site_url(); ?>/?page_id=68" class="project-navigation link-to-list"> 
      <div class="square"></div> 
      <div class="square"></div> 
      <div class="square"></div> 
      <div class="square"></div> 
    </a>
  </div>
  <div class="col2of2">     
    <a href="<?php echo esc_url( get_permalink($nxt_page['ID']) ); ?>" class="next-project"> 
      <span><?php echo $nxt_page['post_title']; ?></span> 
    </a> 
    <div class="angle-arrow"></div>
  </div>  
 </div>   
<?php } ?>
<?php // get_sidebar(); ?>
<?php get_footer(); ?>
<!--
<ul class="itm-menu-ul">
      <?php /* The loop */ ?>    
      <?php $get_post_parent = wp_get_post_parent_id( $post->ID );
      $nav_menu_items = wp_get_nav_menu_items ( 'main-menu' );    
      $nav_menu_item_list = array();
      $i = 0;
      foreach ( (array) $nav_menu_items as $nav_menu_item ) {
        if ( ($nav_menu_item->post_parent == $post->ID && $post->post_parent == 0) ||  $nav_menu_item->post_parent == $get_post_parent ) {
          $nav_menu_item_list[] = $nav_menu_item;      
        }      
      }
      foreach ($nav_menu_item_list as $nav_menu_it) { 
        if($nav_menu_it->xfn != ''){ ?>
          <li class="itm-menu-li <?php echo $nav_menu_it->xfn;?> <?php echo ($post->ID == $nav_menu_it->object_id)?'active-menu':'';?>"><a href="<?php echo $nav_menu_it->url;?>"><?php echo $nav_menu_it->xfn;?></a></li>
          <?php        
        }
      }
      ?>
    </ul> -->