<?php 
/* Custom Post Types */


add_action('admin_menu', 'isa_remove_menus', 999); 
function isa_remove_menus() {
remove_menu_page( 'edit.php' );
}

add_action('init', 'js_custom_init');
function js_custom_init() 
{
	
	// Register the Homepage Project
  
     $labels = array(
	    'name' => _x('Projects', 'post type general name'),
    'singular_name' => _x('Project', 'post type singular name'),
    'add_new' => _x('Add New', 'Project'),
    'add_new_item' => __('Add New Project'),
    'edit_item' => __('Edit Projects'),
    'new_item' => __('New Project'),
    'view_item' => __('View Projects'),
    'search_items' => __('Search Projects'),
    'not_found' =>  __('No Projects found'),
    'not_found_in_trash' => __('No Projects found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Projects'
  );
  $args = array(
	'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
	
  ); 
  register_post_type('Project',$args); // name used in query
  
  // Add more between here
  
     $labels = array(
    'name' => _x('Aboutphotos', 'post type general name'),
    'singular_name' => _x('Aboutphoto', 'post type singular name'),
    'add_new' => _x('Add New', 'Aboutphoto'),
    'add_new_item' => __('Add New Aboutphoto'),
    'edit_item' => __('Edit Aboutphotos'),
    'new_item' => __('New Aboutphoto'),
    'view_item' => __('View Aboutphotos'),
    'search_items' => __('Search Aboutphotos'),
    'not_found' =>  __('No Aboutphotos found'),
    'not_found_in_trash' => __('No Aboutphotos found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Aboutphotos'
  );
  $args = array(
  'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => false, // 'false' acts like posts 'true' acts like pages
    'menu_position' => 20,
    'supports' => array('title','editor','custom-fields','thumbnail'),
  
  ); 
  register_post_type('Aboutphoto',$args); // name used in query
  
  } // close custom post type