				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <div id="secondary" class="sidebar-container" role="complementary">
                        <div id="secondary-cr">
                            <div class="widget-area">
                                <?php dynamic_sidebar( 'sidebar-1' ); ?>
                            </div><!-- .widget-area -->
                        </div>
                    </div><!-- #secondary -->
                <?php endif; ?>