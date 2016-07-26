<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Flatter
 */

get_header(); ?>

	<section class="inner-content">
    	<div class="container-fluid">
        	<div class="row">
        		<?php
					$class = 'col-md-6';
					$sidebar =  get_theme_mod('single_post_sidebar_position',__('right','flatter'));
					 if($sidebar != 'both'){
							$class = 'col-md-8 left-content';
					}
				?>          
					
				<?php
				    if ($sidebar == 'left' || $sidebar == 'both'){ 
				        get_sidebar('left');
				       }
				?>

				<div class="<?php echo $class;?> detail-content">
					<h2 class="hidden"><?php the_title(); ?></h2>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'single' ); ?>					

					<?php endwhile; // End of the loop. ?>
				</div>

				<?php
				    if ($sidebar == 'right' || $sidebar == 'both'){ 
				        get_sidebar('right');
				       }
				?>
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- section -->
<?php get_footer(); ?>