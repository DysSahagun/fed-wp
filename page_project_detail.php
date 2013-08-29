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
                
                                        <div class="entry-header-pri">
											<?php // Display breadcrumb navigation
                                                if (is_page() && !is_front_page() || is_single() || is_category()) {
                                                    if (is_page()) {
                                                        $ancestors = get_post_ancestors($post);
                                             
                                                        if ($ancestors) {
                                                            $ancestors = array_reverse($ancestors);
                                                            echo '<ul class="breadcrumbs">';
                                             
                                                            foreach ($ancestors as $crumb) {
                                                                echo '<li><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a></li>';
                                                            }
                                                        }
                                                    }
                                                    if (is_single()) {
                                                        $category = get_the_category();
                                                        echo '<ul class="breadcrumbs">';
                                                        echo '<li><a href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a></li>';
                                                    }
                                                    if (is_category()) {
                                                        $category = get_the_category();
                                                        echo '<ul class="breadcrumbs">';
                                                        echo '<li>'.$category[0]->cat_name.'</li>';
                                                    }
                                                    echo '</ul>';
                                                } elseif (is_front_page()) {
                                                    // Front page
                                                    echo '<ul class="breadcrumbs">';
                                                    echo '<li class="front_page"><a href="'.get_bloginfo('url').'">'.get_bloginfo('name').'</a></li>';
                                                    echo '<li class="current">Home Page</li>';
                                                    echo '</ul>';
                                                }
                                            ?><!-- .breadcrumbs -->
                                            
                                            <h1 class="entry-title"><?php the_title(); ?></h1>
                                        </div><!-- .entry-header-pri -->
                                        
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