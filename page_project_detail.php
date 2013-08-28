<?php
/*
 * Template Name: Project Detail
 * Description: Page template for projects category
*/
?>

<?php get_header(); ?>

                    <div id="primary" class="content-area">
                        <div id="content" class="site-content" role="main">
                            <?php while ( have_posts() ) : the_post(); ?>
                                
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <header class="entry-header">
                                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                                        <div class="entry-thumbnail">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <?php endif; ?>
                
                                        <h1 class="entry-title"><?php the_title(); ?></h1>
                                    </header><!-- .entry-header -->
                
                                    <div class="entry-content">
                                        <?php the_content(); ?>

										<ul>
										<?php // Display subchildren as tree
                                            $subpage_args = array(
                                                'child_of' => $post->ID,
                                                'title_li' => __(''),
												'post_status'  => 'publish',
                                            );
                                            wp_list_pages($subpage_args);
                                        ?>
                                        </ul>
                                        
                                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                                    </div><!-- .entry-content -->
                                </article><!-- #post -->
                
                                <?php comments_template(); ?>
                            <?php endwhile; ?>
                        </div><!--#content-->
                    </div><!--#primary-->                    

<?php get_sidebar(); ?>
<?php get_footer(); ?>