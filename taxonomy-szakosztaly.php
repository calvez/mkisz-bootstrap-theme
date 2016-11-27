<?php
/**
 * The template for displaying Szakosztaéy pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package activello
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<h1 class="page-title">

				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-md-3">
			<header class="muvesz-list page-header">
				<h3 class="muvesz-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			</header><!-- .entry-header -->
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ></a>                     
			</div>


			<?php endwhile; ?>

			<?php activello_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
			
		</main><!-- #main -->
	</section><!-- #primary -->
<?php get_footer(); ?>