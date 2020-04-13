<?php
	// If Single or Archive (Category, Tag, Author or a Date based page)
	if ( is_single() || is_archive() ) :
?>
		</div><!-- /.col -->

		<?php get_sidebar(); ?>

	</div><!-- /.row -->
<?php
	endif;
?>

	</main><!-- /#main -->

<!--Footer Widget Area Start-->
<div class="footer-widget-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <div class="footer-logo">
                    </div>
                    <div class="social-icons">
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <h3>GET IN TOUCH</h3>
                </div>
            </div>
            <div class="col-md-3 hidden-sm">
                <div class="single-footer-widget">
                    <h3>Useful Links</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-4">
                <div class="single-footer-widget">
                    <h3>Instagram</h3>
                    <div class="instagram-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Footer Widget Area-->
<!--Footer Area Start-->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-7">
                <p>&copy; <?php echo date( 'Y' ); ?> <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></p>
            </div>
            <div class="col-md-6 col-sm-5">
                <div class="column-right">
                  
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End of Footer Area-->
</div>
</div><!-- /#wrapper -->

<?php wp_footer(); ?>

</body>
</html>