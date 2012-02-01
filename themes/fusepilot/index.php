<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content" class="index">
 <?php echo do_shortcode('[vimeo id='.$settings['front_page_vimeo_id'].']');?>
  
 <?php
	//query posts
	query_posts(
		array(
		'post_type'=> 'project',
		'paged'=>$paged
	));
	?>
	
	<?php include (TEMPLATEPATH . '/partials/masonry.php' );?>

  <div class="filler"></div>
</div>

<?php get_footer(); ?>
