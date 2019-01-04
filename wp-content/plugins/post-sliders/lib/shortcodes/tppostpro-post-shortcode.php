<?php 

if ( ! defined( 'ABSPATH' ) )
	exit; # Exit if accessed directly

# shortocde
function tppostslider_pro_post_query($atts, $content = null){
	$atts = shortcode_atts(
		array(
			'id' => "",
			), $atts);
	global $post;
	
	$postid = $atts['id'];


	$tppostsliderpro_postoptions = get_post_meta( $postid, 'tppostsliderpro_postoptions', true );

	if(!empty($tppostsliderpro_postoptions['post_types'])){
		$post_types = $tppostsliderpro_postoptions['post_types'];
	}
	else{
		$post_types = array('post');
	}

	if(!empty($tppostsliderpro_postoptions['categories'])){
		$categories = $tppostsliderpro_postoptions['categories'];
	}
	else{
		$categories = array();
	}


	$tppostsliderpro_ordercats  		= get_post_meta($postid, 'tppostsliderpro_ordercats', true);
	$tppostsliderpro_orders    			= get_post_meta($postid, 'tppostsliderpro_orders', true);
	$tppostsliderpro_styles   			= get_post_meta($postid, 'tppostsliderpro_styles', true);
	$excerpt_lenght      				= get_post_meta($postid, 'excerpt_lenght', true);
	$btn_readmore 		 				= get_post_meta($postid, 'btn_readmore', true);
	$tppostsliderpro_hidecats 			= get_post_meta($postid, 'tppostsliderpro_hidecats', true);
	$tppostsliderpro_hideauthors 		= get_post_meta($postid, 'tppostsliderpro_hideauthors', true);
	$tppostsliderpro_author_size 		= get_post_meta($postid, 'tppostsliderpro_author_size', true);
	$tppostsliderpro_author_color 		= get_post_meta($postid, 'tppostsliderpro_author_color', true);
	$tppostsliderpro_titlehover_color 	= get_post_meta($postid, 'tppostsliderpro_titlehover_color', true);
	$tppostsliderpro_read_alignment 	= get_post_meta($postid, 'tppostsliderpro_read_alignment', true);

	foreach($categories as $category){
		$tax_cat = explode(',',$category);
		$tax_terms[$tax_cat[0]][] = $tax_cat[1];
	}

	if(empty($tax_terms)){
		$tax_terms = array(); 
	}

	foreach($tax_terms as $taxonomy=>$terms){
		$tax_query[] = array(
		'taxonomy' => $taxonomy,
		'field'    => 'term_id',
		'terms'    => $terms
		);
	}

	if(empty($tax_query)){
		$tax_query = array();
	}

	$args = array (
		'post_type' 	 => $post_types,
		'post_status' 	 => 'publish',
		'tax_query' 	 => $tax_query,
		'posts_per_page' => -1,
		'orderby'	   	 =>$tppostsliderpro_ordercats,
		'order'			 => $tppostsliderpro_orders,
	);

	$query = new WP_Query($args);

	$html='';
	switch ($tppostsliderpro_styles) {
	    case '1':
			include tppostslider_plugin_dir.'themes/theme-1.php';
	    break;
	    case '2':
	        include tppostslider_plugin_dir.'themes/theme-2.php';
	    break;
	}
	return $html;
}
add_shortcode('tppostpro', 'tppostslider_pro_post_query');