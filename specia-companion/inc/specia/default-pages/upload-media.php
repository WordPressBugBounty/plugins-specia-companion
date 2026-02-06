<?php
$specia_theme = wp_get_theme(); // gets the current theme
$specia_file = SPECIA_COMPANION_PLUGIN_URL .'inc/specia/images/logo/'.$specia_theme->name.'.png';
if( $specia_theme->name == 'Zestoria' || $specia_theme->name == 'Anavo' ) {
	$specia_ImagePath = SPECIA_COMPANION_PLUGIN_URL .'inc/child/images';
}else{
	$specia_ImagePath = SPECIA_COMPANION_PLUGIN_URL .'inc/specia/images';
}

$specia_images = array(
$specia_file,
$specia_ImagePath. '/slider/slider-1.jpg',
$specia_ImagePath. '/slider/slider-2.jpg',
$specia_ImagePath. '/slider/slider-3.jpg',
$specia_ImagePath. '/portfolio/portfolio1.jpg',
$specia_ImagePath. '/portfolio/portfolio2.jpg',
$specia_ImagePath. '/portfolio/portfolio3.jpg',
);
$specia_post_id = null;
foreach($specia_images as $specia_name) {
$specia_filename = basename($specia_name);
$specia_upload_file = wp_upload_bits($specia_filename, null, file_get_contents($specia_name));
if (!$specia_upload_file['error']) {
	$specia_wp_filetype = wp_check_filetype($specia_filename, null );
	$specia_attachment = array(
		'post_mime_type' => $specia_wp_filetype['type'],
		'post_parent' => $specia_post_id,
		'post_title' => preg_replace('/\.[^.]+$/', '', $specia_filename),
		'post_excerpt' => 'specia caption',
		'post_status' => 'inherit'
	);
	$specia_ImageId[] = $specia_attachment_id = wp_insert_attachment( $specia_attachment, $specia_upload_file['file'], $specia_post_id );
	
	if (!is_wp_error($specia_attachment_id)) {
		require_once(ABSPATH . "wp-admin" . '/includes/image.php');
		$specia_attachment_data = wp_generate_attachment_metadata( $specia_attachment_id, $specia_upload_file['file'] );
		wp_update_attachment_metadata( $specia_attachment_id,  $specia_attachment_data );
	}
}

}

 update_option( 'specia_media_id', $specia_ImageId );

?>
