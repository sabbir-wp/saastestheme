<?php 


// Add Custom Dashboard Widget
function add_custom_dashboard_widgets() {

	wp_add_dashboard_widget(
		'my_custom_widget',
		'My Custom Widget',
		'dashboard_widget_function'
	);

	global $wp_meta_boxes;
	$normal_dashboard = $wp_meta_boxes['dashboard']['normal']['core'];
	$my_custom_widget_backup = array( 'my_custom_widget' => $normal_dashboard['my_custom_widget'] );
	unset( $normal_dashboard['my_custom_widget'] );
	$sorted_dashboard = array_merge( $my_custom_widget_backup, $normal_dashboard );
	$wp_meta_boxes['dashboard']['normal']['core'] = $sorted_dashboard;

}
add_action( 'wp_dashboard_setup', 'add_custom_dashboard_widgets' );


function dashboard_widget_function() {

	echo "Hi WordPress, I'm a custom Dashboard Widget from wp-hasty.com";
}

?>
