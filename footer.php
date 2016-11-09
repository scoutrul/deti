<div id="menu-wrap-wide"></div>
		
<div id="footer">
	<div class="container relat">
		<div class="footer_flex">
			<?php wp_reset_query(); ?>
			<?php   wp_nav_menu( 
								array( 
										'container' => '',
										'fallback_cb' => 'false',
										'theme_location' => 'footer',
										'menu_id' => 'footer_menu',
										'menu_class' => '',
										'depth' => 1
									)	   
					);
			?>
			
			<div id="powered">
				<p class="copyright">©<?php echo date('Y'); ?>
				<a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>
				</p>		
			</div>
			</div>	
	</div><!--#footer_inner-->

	
<?php include('forms.php');?>
<div id="feedback_me">Обратный звонок</div>
</div>	

	
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
<?php if(of_get_option('ga_code')) { ?>
	<?php echo of_get_option('ga_code'); ?>
  <!-- Show Google Analytics -->	
<?php } ?>
</body>
</html>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">


<script>
	$(function(){
		var wprop = $('[id ^= wpshop_property_]');
		wprop.appendTo(".shortcode");
	})
</script>
