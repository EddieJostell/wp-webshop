<?php
/*
Template name: Home-page template
*/

get_header();
?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
					<h2>Recent Posts</h2>
					<?php
					$args = array("posts_per_page" => 2, "orderby" => "comment_count");
					$posts_array = get_posts($args);
					foreach($posts_array as $post)
					{
						echo "<h1>" . $post->post_title . "</h1><br>";
						echo "<p>" . $post->post_content . "</p><br>";
						echo "<p>" . $post->post_date . "</p><br>";
					} 
					?>
				</ul>  
			</section>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php

	get_footer();
	?>