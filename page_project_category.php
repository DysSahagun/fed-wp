<?php
/*
 * Template Name: Project Category
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
                                        
                                        <?php // Display the sub-pages
											$mypages = get_pages( array(
												'child_of' => $post->ID,
												'parent' => $post->ID,
												'hierarchical ' => 0,
												'sort_column' => 'post_modified',
												'sort_order' => 'ASC',
												'post_status' => 'publish',
											) );
											foreach( $mypages as $page ) {
												$content = $page->post_content;
												if ( ! $content ) // Check for empty page
													continue;								
												$content = apply_filters( 'the_content', $content );
											?>                                    
										
										<article id="post-<?php echo $page->ID; ?>">
											<h1><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo get_the_title( $page->ID ); ?></a></h1>
											<a href="<?php echo get_edit_post_link( $page->ID ) ?>">Edit</a>
                                            <div class="entry-content">
												<?php echo $content; ?>
                                                <?php // Display the comments
													$comment_args = array(
														'post_id' => $page->ID,
														'status' => 'approve',
														'orderby' => 'ASC',
														'number' => '3',
													);										
													$comments = get_comments( $comment_args );
														foreach($comments as $comment) {
													?>
														
													<p><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_avatar( $comment, 32 ); ?></a> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_comment_author(); ?></a></p>
													<p><?php echo get_comment_text(); ?></p>
													<p>
													<?php
														$d = "m/d/y g:i a";
														$comment_date = get_comment_date( $d, $comment_ID );
														echo $comment_date;
													?>
													</p>
												<?php } ?>
                                                <?php // Display comment form                                           
													$comment_form_args = array(
													'must_log_in' => '',
													'title_reply' => '',
													'comment_notes_after' => '',		
													'logged_in_as' => '',
													'comment_field' => '<input id="comment" type="text" name="comment" aria-required="true" autocomplete="off">',
													'label_submit' => 'Post',
													);
													
													comment_form( $comment_form_args, $page->ID );
												?> 
											</div>
										</article>
										
										<?php } ?>                                        
                                        
                                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                                    </div><!-- .entry-content -->
                                </article><!-- #post -->
                
                                <?php comments_template(); ?>
                            <?php endwhile; ?>
                        </div><!--#content-->
                    </div><!--#primary-->                    

<?php get_sidebar(); ?>
<?php get_footer(); ?>