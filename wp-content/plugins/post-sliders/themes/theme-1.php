<?php

    if( !defined( 'ABSPATH' ) ){
        exit;
    }
	$html = '';
    $html .='<div class="content_area-'.$postid.'">';
    $tppostsliderpr_items   				= get_post_meta($postid, 'tppostsliderpr_items', true);
    $tppostsliderpro_autohidemode           = get_post_meta($postid, 'tppostsliderpro_autohidemode', true);
    $tppostsliderpro_center_mode           	= get_post_meta($postid, 'tppostsliderpro_center_mode', true);
    $tppostsliderpr_itemsdesktop     		= get_post_meta($postid, 'tppostsliderpr_itemsdesktop', true);
    $tppostsliderpr_itemsdesktopsmall		= get_post_meta($postid, 'tppostsliderpr_itemsdesktopsmall', true);
    $tppostsliderpr_itemsmobile      		= get_post_meta($postid, 'tppostsliderpr_itemsmobile', true); 
    $tppostsliderpr_loops    				= get_post_meta($postid, 'tppostsliderpr_loops', true);
    $tppostsliderpr_margin   				= get_post_meta($postid, 'tppostsliderpr_margin', true);
    $tppostsliderpro_autoplay         		= get_post_meta($postid, 'tppostsliderpro_autoplay', true);
    $tppostsliderpro_autoplay_speed  	 	= get_post_meta($postid, 'tppostsliderpro_autoplay_speed', true);
    $tppostsliderpro_autoplaytimeout  		= get_post_meta($postid, 'tppostsliderpro_autoplaytimeout', true);
    $tppostsliderpr_navigation         		= get_post_meta($postid, 'tppostsliderpr_navigation', true);
    $tppostsliderpr_navigation_position  	= get_post_meta($postid, 'tppostsliderpr_navigation_position', true);
    $tppostsliderpr_paginations          	= get_post_meta($postid, 'tppostsliderpr_paginations', true);
    $tppostsliderpr_paginationsposition   	= get_post_meta($postid, 'tppostsliderpr_paginationsposition', true);
    $tppostsliderpr_stophover            	= get_post_meta($postid, 'tppostsliderpr_stophover', true);
    $tppostsliderpr_navtextcolors        	= get_post_meta($postid, 'tppostsliderpr_navtextcolors', true);
    $tppostsliderpr_navtextcolors_hover   	= get_post_meta($postid, 'tppostsliderpr_navtextcolors_hover', true);
    $tppostsliderpr_navbgcolors        		= get_post_meta($postid, 'tppostsliderpr_navbgcolors', true);
    $tppostsliderpr_navbghovercolors     	= get_post_meta($postid, 'tppostsliderpr_navbghovercolors', true);
    $tppostsliderpr_paginations_color     	= get_post_meta($postid, 'tppostsliderpr_paginations_color', true);
    $tppostsliderpr_paginations_bgcolor   	= get_post_meta($postid, 'tppostsliderpr_paginations_bgcolor', true);
    $tppostsliderpr_paginations_style    	= get_post_meta($postid, 'tppostsliderpr_paginations_style', true);
	
    $tppostsliderpro_hide_image         	= get_post_meta($postid, 'tppostsliderpro_hide_image', true);
    $tppostsliderpro_thumb_size         	= get_post_meta($postid, 'tppostsliderpro_thumb_size', true);
    $tppostsliderpro_image_height         	= get_post_meta($postid, 'tppostsliderpro_image_height', true);
    $tppostsliderpro_overlay_colors 		= get_post_meta($postid, 'tppostsliderpro_overlay_colors', true);
	
	# Excerpt color 
    $tppostsliderpro_excerpt_size 			= get_post_meta($postid, 'tppostsliderpro_excerpt_size', true);
    $tppostsliderpro_excerpt_colors 		= get_post_meta($postid, 'tppostsliderpro_excerpt_colors', true);
    $tppostsliderpro_excerpt_bgcolors 		= get_post_meta($postid, 'tppostsliderpro_excerpt_bgcolors', true);
	
	# Content
	$tppostsliderpro_content_colors 		= get_post_meta($postid, 'tppostsliderpro_content_colors', true);
	$tppostsliderpro_content_alignment 		= get_post_meta($postid, 'tppostsliderpro_content_alignment', true);
	$tppostsliderpro_content_fontsize 		= get_post_meta($postid, 'tppostsliderpro_content_fontsize', true);
	
	# bg color 
	$tppostsliderpro_bg_color 				= get_post_meta($postid, 'tppostsliderpro_bg_color', true);
	$tppostsliderpro_border_size 			= get_post_meta($postid, 'tppostsliderpro_border_size', true);
	$tppostsliderpro_border_colors 			= get_post_meta($postid, 'tppostsliderpro_border_colors', true);

	# Date & Time
	$tppostsliderpro_hidedate 				= get_post_meta($postid, 'tppostsliderpro_hidedate', true);
	$tppostsliderpro_date_size 				= get_post_meta($postid, 'tppostsliderpro_date_size', true);
	$tppostsliderpro_date_color 			= get_post_meta($postid, 'tppostsliderpro_date_color', true);

	# Caption color settings
	$tppostsliderpro_titletext_color 		= get_post_meta($postid, 'tppostsliderpro_titletext_color', true);
    $tppostsliderpro_titlefont_size 		= get_post_meta($postid, 'tppostsliderpro_titlefont_size', true);
    $tppostsliderpro_title_alignment 		= get_post_meta($postid, 'tppostsliderpro_title_alignment', true);
    $tppostsliderpro_catbg_color 			= get_post_meta($postid, 'tppostsliderpro_catbg_color', true);
    $tppostsliderpro_cat_color 				= get_post_meta($postid, 'tppostsliderpro_cat_color', true);

    
	$html .='<script>
            jQuery(document).ready(function($) {
              $("#tpcarouselpro-'.$postid.'").owlCarousel({
                autoplay: '.$tppostsliderpro_autoplay.',
                autoplayHoverPause: '.$tppostsliderpr_stophover.',
                nav : '.$tppostsliderpr_navigation.',
                navText:["<",">"],
                dots: '.$tppostsliderpr_paginations.',
				margin: 10,
                smartSpeed: 450,
                clone:false,
                responsive:{
                    0:{
                      items:1,
                    },
                    678:{
                      items:3,
                    },
                    980:{
                      items:3,
                    },
                    1199:{
                      items:'.$tppostsliderpr_items.',
                    }
                }
              });
            });
          </script>';
      
    $html .='<style>';
	if($tppostsliderpro_thumb_size == 1){
		$html .='
		#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_slider_items_post_images img{
		  height:auto;
		  box-shadow:none;
		}';
	}

	
	# navigation & pagination style
	if($tppostsliderpr_navigation_position == 1){
		$html .='
		#tpcarouselpro-'.$postid.' .owl-nav{
			margin-right: 0;
			margin-top: 0;
			position: absolute;
			right: 0;
			top: -50px;
		}';
	}
	$html .='
		#tpcarouselpro-'.$postid.' .owl-nav .owl-prev{
			background: #'.$tppostsliderpr_navbgcolors.';
			border-radius: 0;
			color: #'.$tppostsliderpr_navtextcolors.';
			cursor: pointer;
			display: inline-block;
			font-size: 14px;
			margin: 0 4px 0 0;
			padding: 5px;
			width: 25px;
		}';
	$html .='
		#tpcarouselpro-'.$postid.' .owl-nav .owl-next{
			background: #'.$tppostsliderpr_navbgcolors.';
			border-radius: 0;
			color: #'.$tppostsliderpr_navtextcolors.';
			cursor: pointer;
			display: inline-block;
			font-size: 14px;
			margin: 0;
			padding: 5px;
			width: 25px;
		}';
	$html .='	
		#tpcarouselpro-'.$postid.' .owl-nav .owl-next:hover, #tpcarouselpro-'.$postid.' .owl-nav .owl-prev:hover {
		  background: #'.$tppostsliderpr_navbghovercolors.';
		  color: #'.$tppostsliderpr_navtextcolors_hover.';
		}';
	$html .='	
		#tpcarouselpro-'.$postid.'.owl-theme .owl-dots {
		  text-align: '.$tppostsliderpr_paginationsposition.';
		  margin-top: 10px;
		}';
	if($tppostsliderpr_paginations_style == 1){
		$html .='
		#tpcarouselpro-'.$postid.'.owl-theme .owl-dots .owl-dot span {
		  backface-visibility: visible;
		  background: #'.$tppostsliderpr_paginations_bgcolor.';
		  border-radius: 30px;
		  display: block;
		  height: 10px;
		  margin: 5px 7px;
		  transition: opacity 200ms ease 0s;
		  width: 10px;
		}';
	}

	$html .='
		#tpcarouselpro-'.$postid.'.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
		  background: #'.$tppostsliderpr_paginations_color.';
		}';
		
	$html.='

	#tpcarouselpro-'.$postid.' .tps_single_slider_items {
		border: '.$tppostsliderpro_border_size.'px solid #'.$tppostsliderpro_border_colors.';
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_slider_item_reviews{
		background: #'.$tppostsliderpro_bg_color.';
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items:hover .tps_single_slider_items_post_images::before{
		background: '.$tppostsliderpro_overlay_colors.';
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_slider_item_post_title{
		text-align: left;
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_slider_item_post_title a {
		font-size: '.$tppostsliderpro_titlefont_size.'px;
		color: #'.$tppostsliderpro_titletext_color.';
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_slider_item_post_title a:hover {
		color: #'.$tppostsliderpro_titlehover_color.';
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_items_meta_info .tps_single_slider_item_author a{
		color: #'.$tppostsliderpro_author_color.';
		font-size: '.$tppostsliderpro_author_size.'px;
		float:left;
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_items_meta_info .tps_single_slider_item_author a i.fa{
		margin-right:5px;
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_slider_item_reviews .tps_single_slider_item_date{
		color: #'.$tppostsliderpro_date_color.';
		font-size: '.$tppostsliderpro_date_size.'px;
		float:right;
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_slider_item_description, .tps_single_excerpt_area {
		color: #'.$tppostsliderpro_content_colors.';
		font-size: '.$tppostsliderpro_content_fontsize.'px;
		text-align:left;
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_excerpt_area{
		text-align: left;
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_excerpt_area > a {
		color: #'.$tppostsliderpro_excerpt_colors.';
		font-size: '.$tppostsliderpro_excerpt_size.'px;
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items .tps_single_excerpt_area > a:hover {
		color: #'.$tppostsliderpro_excerpt_bgcolors.';
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items_category {
		background: #'.$tppostsliderpro_catbg_color.';
	}
	#tpcarouselpro-'.$postid.' .tps_single_slider_items_category a {
		color: #'.$tppostsliderpro_cat_color.';
	}
';


	$html .='</style>';
	
	
	
    require_once('excerpt.php');

    $html .= '<div id="tpcarouselpro-'.$postid.'" class="owl-carousel owl-theme">';
    while ($query->have_posts()) : $query->the_post();
	$post_thumb 	= wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
	$catid 			= get_the_ID();
	$cats 			= get_the_category($catid);

	$html.='
		<div class="tps_single_slider_items">
			<div class="shadow-effect">
				<div class="tps_single_slider_items_post_images">';

					$html.='<div class="tps-slider-thumb">';
						if ( has_post_thumbnail() ) {
							$html.='<img src="'.$post_thumb.'" alt="'.esc_attr(get_the_title()).'" />';
						}
					$html.='</div>';
						

						$html.='<div class="tps_single_slider_items_category">';
							foreach ( $cats as $cat ){
								$html.='<a href="'.get_category_link($cat->cat_ID).'">'.$cat->name.'</a>';
							}
						$html.='</div>';
				$html.='
				</div>';

				$html.='
				<div class="tps_single_slider_item_reviews">';
					
					$html.='<div class="tps_single_items_meta_info">';
						$html.='<div class="tps_single_slider_item_author">
									<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ).'"><i class="fa fa-user"></i>'.get_the_author().'</a>
								</div>';

							$html.='<div class="tps_single_slider_item_date"><i class="fa fa-clock-o"></i> '.get_the_date('d,M,y').'</div>';

					$html.='</div>';

					$html.='
					<div class="tps_single_slider_item_post_title">
						<a href="'.esc_url(get_the_permalink()).'">'.esc_attr(get_the_title()).'</a>
					</div>
					<div class="tps_single_slider_item_description">
						'.caropro_get_excerpt('100').'
					</div>
					<div class="tps_single_excerpt_area">
						<a href="'.esc_url(get_the_permalink()).'">Read More</a>
					</div>
				</div>
			</div>
		</div>
	';

    endwhile;
    $html .='</div>';
    $html .='</div>';