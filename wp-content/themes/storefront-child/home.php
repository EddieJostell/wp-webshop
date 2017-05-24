<?php
/*
Template name: Home-page template
*/

get_header();
?>
	<div class="site-main about-content">

		<?php while ( have_posts() ) : the_post();

		do_action( 'storefront_page_before' );

		get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

				endwhile; // End of the loop. ?>
				<section class="home-page">
					<?php
					if(function_exists('insert_text')) {
						insert_text();
					}
					?>
					<!--<h1>Recent News!</h1>-->
					<?php
					$args = array("posts_per_page" => 3, "orderby" => "DESC");
					$posts_array = get_posts($args);
					foreach($posts_array as $post)
					{
						echo "<h3 style='font-weight:bold;'>" . $post->post_title . "</h3><br>";
						echo "<p>" . $post->post_content . "</p><br>";
						echo "<p>" . $post->post_date . "</p><br>";
					} 
					?>
				</ul>  
			</section>
		</div><!-- #content -->
	<?php
	get_footer();
	?>