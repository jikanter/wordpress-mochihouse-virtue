<footer id="containerfooter" class="footerclass" role="contentinfo">
  <div class="container">
  	<div class="row">
  		<?php global $virtue; if(isset($virtue['footer_layout'])) { $footer_layout = $virtue['footer_layout']; } else { $footer_layout = 'fourc'; }
  			if ($footer_layout == "fourc") {
  				if (is_active_sidebar('footer_1') ) { ?> 
					<div class="col-md-3 col-sm-6 footercol1">
					<?php dynamic_sidebar('footer_1'); ?>
					</div> 
            	<?php }; ?>
				<?php if (is_active_sidebar('footer_2') ) { ?> 
					<div class="col-md-3  col-sm-6 footercol2">
					<?php dynamic_sidebar('footer_2'); ?>
					</div> 
		        <?php }; ?>
		        <?php if (is_active_sidebar('footer_3') ) { ?> 
					<div class="col-md-3 col-sm-6 footercol3">
					<?php dynamic_sidebar('footer_3'); ?>
					</div> 
	            <?php }; ?>
				<?php if (is_active_sidebar('footer_4') ) { ?> 
					<div class="col-md-3 col-sm-6 footercol4">
					<?php dynamic_sidebar('footer_4'); ?>
					</div> 
		        <?php }; ?>
		    <?php } else if($footer_layout == "threec") {
		    	if (is_active_sidebar('footer_third_1') ) { ?> 
					<div class="col-md-4 footercol1">
					<?php dynamic_sidebar('footer_third_1'); ?>
					</div> 
            	<?php }; ?>
				<?php if (is_active_sidebar('footer_third_2') ) { ?> 
					<div class="col-md-4 footercol2">
					<?php dynamic_sidebar('footer_third_2'); ?>
					</div> 
		        <?php }; ?>
		        <?php if (is_active_sidebar('footer_third_3') ) { ?> 
					<div class="col-md-4 footercol3">
					<?php dynamic_sidebar('footer_third_3'); ?>
					</div> 
	            <?php }; ?>
			<?php } else {
					if (is_active_sidebar('footer_double_1') ) { ?>
					<div class="col-md-6 footercol1">
					<?php dynamic_sidebar('footer_double_1'); ?> 
					</div> 
		            <?php }; ?>
		        <?php if (is_active_sidebar('footer_double_2') ) { ?>
					<div class="col-md-6 footercol2">
					<?php dynamic_sidebar('footer_double_2'); ?> 
					</div> 
		            <?php }; ?>
		        <?php } ?>
        </div>
        <div class="footercredits clearfix">
    		
    		<?php if (has_nav_menu('footer_navigation')) :
        	?><div class="footernav clearfix"><?php 
              wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'footermenu'));
            ?></div><?php
        	endif;?>
        	<p><?php 
            // change by j/k 2014
            $virtue['footer_text'] = "Copyright 2014 (c) Mochi House. Theme by <a href='http://boomshaka.starschreck.com/signup'>Boomshaka Design</a>";
            if(isset($virtue['footer_text'])) { $footertext = $virtue['footer_text'];} else {$footertext = '[copyright] [the-year] [site-name] [theme-credits]';} echo do_shortcode($footertext); ?></p>
    	</div>

  </div>

</footer>

<?php wp_footer(); ?>
