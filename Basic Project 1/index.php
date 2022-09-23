<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<title><?php bloginfo("title");?></title>
</head>

<?php wp_head(); ?>

<body <?php body_class(); ?>
	

	<section class="menu_section">


		<div class="menu">

			<div class="mid">

				<div class="logo">
					<?php the_custom_logo();?>
				</div>

<!-- 
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Info</a></li>
					<li><a href="#">Contact</a></li>
				</ul> -->

				<?php 
					wp_nav_menu ([


                 'theme_location' => 'main_menu',

                 'container_class'  => '',
                 'container_id'     => '',
                 'menu_class'       => '',
                 'menu_id'          => '',


                   
					]);
				?>
			</div>
		</div>

	</section>

	<section class="header_image">

		<img src="<?php header_image();?>" alt="">
		
	</section>

  

	<section class="posts">

		<div class="post">
			
			<h2>Our Latest Post</h2>
			
			<hr>
			

			<div class="mid">

                 <?php while(have_posts() ) : the_post(); ?>


				<div class="post1">
					<?php the_post_thumbnail(); ?>
					<h3><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				</div>

				<?php endwhile; ?>

                  
			</div>

		</div>

	</section>




<?php wp_footer(); ?>
</body>
</html>