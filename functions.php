<?php
/*-----------------------------------------------------------------------------------*/
/* Include Theme Functions */
/*-----------------------------------------------------------------------------------*/
load_theme_textdomain('virtue', get_template_directory() . '/languages');
function mochi_artist_type_init() { 
	register_post_type('artist', 
		array('labels' => array(
								'name' => __('Artists', 'mochihouse'),
								'singular_name' => __('Artist', 'mochihouse'),
								'add_new_item'  => __('Add new Artist', 'mochihouse'),
								'edit_item'     => __('Edit Artist', 'mochihouse'),
								'view_item'     => __('View Artist', 'mochihouse'),
								'all_items'     => __('All Artists', 'mochihouse'),
								'search_items'  => __('Search Artists', 'mochihouse'), 
							),
		 	   'description' => __('A Mochi Artist'),
			   'public' => true,
			   'menu_position' => 25,
			   'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes', 'post-formats'),
			   'rewrite' => array('slug' => 'artist', 'with_front' => false ) // do not add the /blog to the front of this 
		)
	);
	
}
add_action( 'init', 'mochi_artist_type_init' );

function mochi_project_type_init() { 
  register_post_type('project', 
    array('labels' => array(
              'name' => __('Projects', 'mochihouse'),
              'singular_name' => __('Project', 'mochihouse'),
              'add_new_item'  => __('Add new Project', 'mochihouse'),
              'edit_item'     => __('Edit Project', 'mochihouse'),
              'view_item'     => __('View Project', 'mochihouse'),
              'all_items'     => __('All Projects', 'mochihouse'),
              'search_items'  => __('Search Projects', 'mochihouse'),   
            ),
          'description' => __('A Mochi Project'),
          'public'      => true,
          'menu_position' => 26,
          'supports' => array('title', 'editor', 'thumbnail', 'exerpt', 'custom-fields', 'revisions', 'page-attributes', 'post-formats'),
          'rewrite' => array('slug' => 'project', 'with_front' => false) // do not add the /blog to the front of this
      )
    );
    
}
add_action( 'init', 'mochi_project_type_init' );
require_once locate_template('/themeoptions/options/virtue_extension.php'); // Options framework extension
require_once locate_template('/themeoptions/framework.php');        // Options framework
require_once locate_template('/themeoptions/options.php');     		// Options framework
require_once locate_template('/lib/utils.php');           			// Utility functions
require_once locate_template('/lib/init.php');            			// Initial theme setup and constants
require_once locate_template('/lib/sidebar.php');         			// Sidebar class
require_once locate_template('/lib/config.php');          			// Configuration
require_once locate_template('/lib/cleanup.php');        			// Cleanup
require_once locate_template('/lib/nav.php');            			// Custom nav modifications
require_once locate_template('/lib/metaboxes.php');     			// Custom metaboxes
require_once locate_template('/lib/gallery_metabox.php');     		// Custom metaboxes
require_once locate_template('/lib/comments.php');        			// Custom comments modifications
require_once locate_template('/lib/shortcodes.php');      			// Shortcodes
require_once locate_template('/lib/gallery.php');      				// Gallery Shortcode
require_once locate_template('/lib/widgets.php');         			// Sidebars and widgets
require_once locate_template('/lib/aq_resizer.php');      			// Resize on the fly
require_once locate_template('/lib/scripts.php');        			// Scripts and stylesheets
require_once locate_template('/lib/custom.php');          			// Custom functions
require_once locate_template('/lib/admin_scripts.php');          	// Icon functions
require_once locate_template('/lib/authorbox.php');         		// Author box
require_once locate_template('/lib/custom-woocommerce.php'); 		// Woocommerce functions
require_once locate_template('/lib/virtuetoolkit-activate.php'); 	// Plugin Activation
require_once locate_template('/lib/custom-css.php'); 			    // Fontend Custom CSS
