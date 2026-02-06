<?php
$specia_MediaId 			= get_option('specia_media_id');
$specia_title  				= 'Make a Great Website with <span>Specia</span>';
$specia_content				= '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever.</p>';
$specia_title2 				= 'We Create <span>Value &amp; Build</span> Confidence';
$specia_title3 				= 'World Digital Resolutions for <span>Business Leaders</span>';
$specia_title4 				= 'Specia well suited for any types of websites';
$specia_cta_content			= 'Avira,Proficient,HeroPress,MagZee,Fabify';
$specia_cta_pg_ttl1			= 'Trusted Services';
$specia_cta_content1		= 'We are trusted our customers';
$specia_cta_pg_ttl2			= '24x7 Supports';
$specia_cta_content2		= '014 1265 478 – 123 4567 890';
$specia_cta_pg_ttl3			= 'Well Experienced';
$specia_cta_content3		= '25 years of experience';
$specia_cta_pg_ttl4			= 'Process Improved';
$specia_cta_content4		= 'Believe in process improvements';
$specia_cta_pg_ttl5			= 'Trusted Services';
$specia_cta_content5		= 'We are trusted our customers';
$specia_service_pg_ttl1		= 'Easy Customizable';
$specia_service_pg_ttl2		= 'WooCommerce Ready';
$specia_service_pg_ttl3		= 'Elementor Plugin';
$specia_service_data		= 'Customize everything from the theme Appearance customize.';
$specia_portfolio_pg_ttl1	= 'Responsive Design';
$specia_portfolio_pg_ttl2	= 'Ethics Features';
$specia_portfolio_pg_ttl3	= 'Plugin Supports';
$specia_blog_ttl1			= 'The most popular page builder included';
$specia_blog_ttl2			= 'Presentations play role in market';
$specia_blog_ttl3			= 'A digital prescription for business';
$specia_postData = array(
				array(
					'post_title' => $specia_title,
					'post_status' => 'publish',
					'post_content' => $specia_content,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_title,
					'meta_input'   => array(
						'slider_caption_align' => 'text-left',
						'slider_subtitle' => 'Digital Marketing Starategy',
						'slidebutton' => 'Buy Now',
					),
				),
				array(
					'post_title' => $specia_title2,
					'post_status' => 'publish',
					'post_content' => $specia_content,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_title2,
					'meta_input'   => array(
						'slider_caption_align' => 'text-center',
						'slider_subtitle' => 'Succesful Goal & Plans',
						'slidebutton' => 'Buy Now',
					),
				),
				array(
					'post_title' => $specia_title3,
					'post_status' => 'publish',
					'post_content' => $specia_content,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_title3,
					'meta_input'   => array(
						'slider_caption_align' => 'text-right',
						'slider_subtitle' => 'Think accurately for new business',
						'slidebutton' => 'Buy Now',
					),
				),
				array(
					'post_title' => $specia_title4,
					'post_status' => 'publish',
					'post_content' => $specia_cta_content,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_cta_content,
				),
				array(
					'post_title' => $specia_service_pg_ttl1,
					'post_status' => 'publish',
					'post_content' => $specia_service_data,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_service_pg_ttl1,
					'meta_input'   => array(
						'icons' => 'fa-file-text-o',
					),
				),
				array(
					'post_title' => $specia_service_pg_ttl2,
					'post_status' => 'publish',
					'post_content' => $specia_service_data,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_service_pg_ttl2,
					'meta_input'   => array(
						'icons' => 'fa-cart-plus',
					),
				),
				array(
					'post_title' => $specia_service_pg_ttl3,
					'post_status' => 'publish',
					'post_content' => $specia_service_data,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_service_pg_ttl3,
					'meta_input'   => array(
						'icons' => 'fa-columns',
					),
				),
				array(
					'post_title' => $specia_portfolio_pg_ttl1,
					'post_status' => 'publish',
					'post_content' => $specia_service_data,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_portfolio_pg_ttl1,
					'meta_input'   => array(
						'icons' => 'fa-columns',
					),
				),
				array(
					'post_title' => $specia_portfolio_pg_ttl2,
					'post_status' => 'publish',
					'post_content' => $specia_service_data,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_portfolio_pg_ttl2,
					'meta_input'   => array(
						'icons' => 'fa-columns',
					),
				),
				array(
					'post_title' => $specia_portfolio_pg_ttl3,
					'post_status' => 'publish',
					'post_content' => $specia_service_data,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_portfolio_pg_ttl3,
					'meta_input'   => array(
						'icons' => 'fa-columns',
					),
				),
				array(
					'post_title' => $specia_blog_ttl1,
					'post_status' => 'publish',
					'post_content' => $specia_content,
					'post_author' => 1,
					'post_type'         =>   'post',
					'post_category' => array('latest Post','News'),
				),
				array(
					'post_title' => $specia_blog_ttl2,
					'post_status' => 'publish',
					'post_content' => $specia_content,
					'post_author' => 1,
					'post_type'         =>   'post',
					'post_category' => array('latest Post','News'),
				),
				array(
					'post_title' => $specia_blog_ttl3,
					'post_status' => 'publish',
					'post_content' => $specia_content,
					'post_author' => 1,
					'post_type'         =>   'post',
					'post_category' => array('latest Post','News'),
				),
				array(
					'post_title' => $specia_cta_pg_ttl1,
					'post_status' => 'publish',
					'post_content' => $specia_cta_content1,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_cta_pg_ttl1,
					'meta_input'   => array(
						'icons' => 'fa-file-text-o',
					),
				),
				array(
					'post_title' => $specia_cta_pg_ttl2,
					'post_status' => 'publish',
					'post_content' => $specia_cta_content2,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_cta_pg_ttl2,
					'meta_input'   => array(
						'icons' => 'fa-transgender-alt',
					),
				),
				array(
					'post_title' => $specia_cta_pg_ttl3,
					'post_status' => 'publish',
					'post_content' => $specia_cta_content3,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_cta_pg_ttl3,
					'meta_input'   => array(
						'icons' => 'fa-columns',
					),
				),
				array(
					'post_title' => $specia_cta_pg_ttl4,
					'post_status' => 'publish',
					'post_content' => $specia_cta_content4,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_cta_pg_ttl4,
					'meta_input'   => array(
						'icons' => 'fa-bar-chart',
					),
				),
				array(
					'post_title' => $specia_cta_pg_ttl5,
					'post_status' => 'publish',
					'post_content' => $specia_cta_content5,
					'post_author' => 1,
					'post_type'         =>   'page',
					'post_date' => gmdate('Y-m-d H:i:s'),
					'post_name' => $specia_cta_pg_ttl5,
					'meta_input'   => array(
						'icons' => 'fa-file-text-o',
					),
				),
			);

kses_remove_filters();
//foreach ( $specia_MediaId as $media) :
foreach ( $specia_postData as $specia_i => $specia_postData1) : 
	$id = wp_insert_post($specia_postData1);
	
	if($specia_i==0){
		set_post_thumbnail( $id, $specia_MediaId[$specia_i + 1] );
		set_theme_mod('slider-page1',$id);
	}
	
	if($specia_i==1){
		set_post_thumbnail( $id, $specia_MediaId[$specia_i + 1] );
		set_theme_mod('slider-page2',$id);
	}
	
	if($specia_i==2){
		set_post_thumbnail( $id, $specia_MediaId[$specia_i + 1] );
		set_theme_mod('slider-page3',$id);
	}
	
	if($specia_i==3){
		set_theme_mod('call_action_page',$id);
	}	
	
	if($specia_i==4) {
		set_theme_mod('service-page1',$id);
	}
	
	if($specia_i==5) {
		set_theme_mod('service-page2',$id);
	}
	
	if($specia_i==6) {
		set_theme_mod('service-page3',$id);
	}
	
	if($specia_i==7) {
		set_post_thumbnail( $id, $specia_MediaId[4] );
		set_theme_mod('portfolio-page1',$id);
	}
	
	if($specia_i==8) {
		set_post_thumbnail( $id, $specia_MediaId[5] );
		set_theme_mod('portfolio-page2',$id);
	}
	
	if($specia_i==9) {
		set_post_thumbnail( $id, $specia_MediaId[6] );
		set_theme_mod('portfolio-page3',$id);
	}
	
	if($specia_i==10){
		set_post_thumbnail( $id, $specia_MediaId['1'] );
	}
	
	if($specia_i==11){
		set_post_thumbnail( $id, $specia_MediaId['2'] );
	}
	
	if($specia_i==12){
		set_post_thumbnail( $id, $specia_MediaId['3'] );
	}
	
	if($specia_i==13){
		set_theme_mod('call_action_page1',$id);
	}
	
	if($specia_i==14){
		set_theme_mod('call_action_page2',$id);
	}
	
	if($specia_i==15){
		set_theme_mod('call_action_page3',$id);
	}
	
	if($specia_i==16){
		set_theme_mod('call_action_page4',$id);
	}
	
	if($specia_i==17){
		set_theme_mod('call_action_page5',$id);
	}
	
endforeach;
//endforeach;
	
kses_init_filters();
