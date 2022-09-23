<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta <?php bloginfo("charset");  ?>>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo("name"); ?></title>
	<link rel="stylesheet" href=" <?php echo get_template_directory_uri(); ?>/style.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<!-- <img src="<?php echo get_template_directory_uri(); ?>/Ashik.jpg" alt=""> -->

	<!-- <img src="<?php header_image(); ?>" alt="">
 -->
<!-- 
 <ul>
 	<li><a href="" title="">Home</a></li>
 	<li><a href="" title="">About Us</a></li>
 	<li><a href="" title="">Blog</a></li>
 	<li><a href="" title="">Profile</a></li>
 	<li><a href="" title="">Contact Us</a></li>	
 	<li><a href="" title="">Team Members</a></li>
 </ul>
 -->

 <?php 

wp_nav_menu([

'theme_location'  =>  'mainmenu',

'container_class'  =>  'con_class',
'container_id'    =>  'con_id',
'menu_class'    =>   'me_class',
'menu_id'       =>  'me_id',

]);

  ?>

<!-- 
   <div class="left_sidebar">
  
<?php dynamic_sidebar('left'); ?>

  </div>
  <div class="right_sidebar"><?php dynamic_sidebar('right'); ?></div>
  <div class="footer_bar"><?php dynamic_sidebar('footer'); ?></div>  -->

<?php while (have_posts() ) : the_post(); {
	// code...
} ?>
<div class="posts">
	<h1><?php the_title(); ?></h1>
<?php the_post_thumbnail(); ?>
<p><?php the_content(); ?></p>

</div>

<?php endwhile; ?>

  

	<?php wp_footer(); ?>

</body>
</html>