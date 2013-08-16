                </div>
            </div><!--#main-->
            
            <footer id="colophon" class="site-footer" role="contentinfo">
                <div id="colophon-cr">
                    <?php get_sidebar( 'main' ); ?>
                    <div class="site-info">
						<?php do_action( 'twentythirteen_credits' ); ?>
                        <a href="<?php echo esc_url( __( 'http://', 'twentythirteen' ) ); ?>"><?php printf( __( '&copy; 2013 %s. All rights reserved. ', 'twentythirteen' ), 'Site title' ); ?></a>
                    </div><!-- .site-info -->
                </div>
            </footer><!--#colophon-->
        
        </div><!--#page-->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        <?php wp_footer(); ?>
    </body>
</html>