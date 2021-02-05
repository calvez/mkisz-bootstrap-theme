<header class="muvesz-list page-header">
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'mkisz-artist-thumbnail' );
					}
					else {
						echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
						        . '/images/blank-artist.png" />';
						} ?>
			</a>  

				<h3 class="muvesz-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><i><?php the_title(); ?></i></a></h3>
			</header><!-- .entry-header -->
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ></a>                     

