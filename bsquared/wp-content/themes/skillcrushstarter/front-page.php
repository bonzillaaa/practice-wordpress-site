<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p> <?php the_content(); ?></p>
				<a href="<?php echo site_url('/about-me/'); ?>" class="btn">Learn More</a>
			<?php endwhile; ?>
	  	</br>
			</br>
			<?php echo do_shortcode("[smbtoolbar]"); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
