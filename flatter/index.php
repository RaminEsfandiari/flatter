<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flatter
 */

get_header(); ?>

	<section class="inner-content">

    	<div class="container-fluid">
        	
        	<div class="row">

						<div class="col-xs-12 col-md-12 most-popular">
	      			<h2 id="purpose-header">OUR PURPOSE</h2>
	      			<h3 id="change-header">to change the framework in which millions of people think about political questions</h3>
	      		</div> 

					</div>


        	<div class="row">

<!-- change to col-md-9 if you bring back sidebar -->
        		<div class ="col-xs-12 col-md-12" id="most-recent">
      				<div class="detail-content">
								<?php if ( have_posts() ) : ?>
									<div class="masonry-3">

										<?php if (! is_front_page() ) : ?>
											<header>
												<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
											</header>
										<?php endif; ?>

										<?php /* Start the Loop */ ?>
										<?php while ( have_posts() ) : the_post(); ?>

											<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

										<?php endwhile; ?>
									</div>

									<?php flatter_pagination_bars(); ?>

									<?php else : ?>

									<?php get_template_part( 'template-parts/content', 'none' ); ?>

								<?php endif; ?>
							</div>
        		</div>

					</div>
	      	
	      	<?php /*get_sidebar('right');*/?>		

        	<div class="row">

						<div class="col-xs-12 col-md-12 most-popular">
	      			<h3 id="popular-header">Popular</h3>
	      			<?php
								$posts = wp_most_popular_get_popular( array( 'limit' => 3, 'post_type' => 'post', 'range' => 'all_time' ) );
								global $post;
								if ( count( $posts ) > 0 ): foreach ( $posts as $post ):
								    setup_postdata( $post );
								    ?>
								    <div class="col-md-4 most-pop-square"><a href="https://wordpress.org/plugins/wp-most-popular/&" 
								    	title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>">
								    	<?php get_template_part( 'template-parts/content', get_post_format() ); ?></a></div>
								    <?php
								endforeach; endif;
								?>
	      		</div> 

					</div>
	

			
		</div>
	</section>
<?php get_footer(); ?>
