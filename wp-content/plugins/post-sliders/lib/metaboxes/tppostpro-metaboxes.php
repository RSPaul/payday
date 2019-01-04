<?php

	if( !defined( 'ABSPATH' ) ){
	    exit;
	}
	

	function tppostslider_pro_register_meta_boxes() {

		$tppostspro = array( 'tppostpro');
		add_meta_box(
			'tppostslider_probox_set1',                    	     	# Metabox
			__( 'Post Slider Settings', 'post-sliders' ),           # Title
			'tppostslider_pro_type_function',                    	# Call Back func
			$tppostspro,                                         	# post type
			'normal'                                                # Text Content
		);
	}
	add_action( 'add_meta_boxes', 'tppostslider_pro_register_meta_boxes' );

# Call Back Function...
function tppostslider_pro_type_function( $post, $args){

	#Call get post meta.
	$tppostsliderpro_postoptions		= get_post_meta($post->ID, 'tppostsliderpro_postoptions', true );
	if(!empty($tppostsliderpro_postoptions['post_types'])){
		$post_types = $tppostsliderpro_postoptions['post_types'];
	}
	else{
		$post_types = array();
	}

	if(!empty($tppostsliderpro_postoptions['categories'])){
		$categories = $tppostsliderpro_postoptions['categories'];
	}
	else{
		$categories = array();
	}


	$tppostsliderpro_bg_color 				= get_post_meta($post->ID, 'tppostsliderpro_bg_color', true);
	$tppostsliderpro_hide_image				= get_post_meta($post->ID, 'tppostsliderpro_hide_image', true);
	$tppostsliderpro_thumb_size       		= get_post_meta($post->ID, 'tppostsliderpro_thumb_size', true);
	$tppostsliderpro_image_height       	= get_post_meta($post->ID, 'tppostsliderpro_image_height', true);
	$tppostsliderpro_titletext_color    	= get_post_meta($post->ID, 'tppostsliderpro_titletext_color', true);
	$tppostsliderpro_titlehover_color    	= get_post_meta($post->ID, 'tppostsliderpro_titlehover_color', true);
	$tppostsliderpro_titlefont_size    	 	= get_post_meta($post->ID, 'tppostsliderpro_titlefont_size', true);
	$tppostsliderpro_title_alignment    	= get_post_meta($post->ID, 'tppostsliderpro_title_alignment', true);
	$tppostsliderpro_hidedate				= get_post_meta($post->ID, 'tppostsliderpro_hidedate', true);	
	$tppostsliderpro_hidecats				= get_post_meta($post->ID, 'tppostsliderpro_hidecats', true);	
	$tppostsliderpro_hideauthors			= get_post_meta($post->ID, 'tppostsliderpro_hideauthors', true);	
	$tppostsliderpro_author_size			= get_post_meta($post->ID, 'tppostsliderpro_author_size', true);	
	$tppostsliderpro_author_color			= get_post_meta($post->ID, 'tppostsliderpro_author_color', true);	
	$tppostsliderpro_cat_color				= get_post_meta($post->ID, 'tppostsliderpro_cat_color', true);	
	$tppostsliderpro_catbg_color			= get_post_meta($post->ID, 'tppostsliderpro_catbg_color', true);	
	$tppostsliderpro_date_size				= get_post_meta($post->ID, 'tppostsliderpro_date_size', true);	
	$tppostsliderpro_date_color				= get_post_meta($post->ID, 'tppostsliderpro_date_color', true);
	$tppostsliderpro_content_alignment		= get_post_meta($post->ID, 'tppostsliderpro_content_alignment', true);
	$tppostsliderpro_content_fontsize		= get_post_meta($post->ID, 'tppostsliderpro_content_fontsize', true);
	$tppostsliderpro_content_colors			= get_post_meta($post->ID, 'tppostsliderpro_content_colors', true);
	$tppostsliderpro_overlay_colors 		= get_post_meta($post->ID, 'tppostsliderpro_overlay_colors', true);
	$tppostsliderpro_border_size 			= get_post_meta($post->ID, 'tppostsliderpro_border_size', true);
	$tppostsliderpro_border_colors 			= get_post_meta($post->ID, 'tppostsliderpro_border_colors', true);
	$excerpt_lenght 	  					= get_post_meta($post->ID, 'excerpt_lenght', true);
	$tppostsliderpro_excerpt_colors     	= get_post_meta($post->ID, 'tppostsliderpro_excerpt_colors', true);
	$tppostsliderpro_excerpt_size     		= get_post_meta($post->ID, 'tppostsliderpro_excerpt_size', true);
	$tppostsliderpro_read_alignment     	= get_post_meta($post->ID, 'tppostsliderpro_read_alignment', true);
	$tppostsliderpro_excerpt_bgcolors   	= get_post_meta($post->ID, 'tppostsliderpro_excerpt_bgcolors', true);
	$tppostsliderpro_styles 				= get_post_meta($post->ID, 'tppostsliderpro_styles', true);
	$tppostsliderpro_ordercats 				= get_post_meta($post->ID, 'tppostsliderpro_ordercats', true);
	$tppostsliderpro_orders 				= get_post_meta($post->ID, 'tppostsliderpro_orders', true);
	$btn_readmore         					= get_post_meta($post->ID, 'btn_readmore', true);
	$nav_value              				= get_post_meta($post->ID, 'nav_value', true);	

	
	#Call get post meta.
	$tppostsliderpro_autoplay   			= get_post_meta($post->ID, 'tppostsliderpro_autoplay', true);
	$tppostsliderpro_autoplay_speed   		= get_post_meta($post->ID, 'tppostsliderpro_autoplay_speed', true);
	$tppostsliderpro_autohidemode   		= get_post_meta($post->ID, 'tppostsliderpro_autohidemode', true);
	$tppostsliderpro_center_mode   			= get_post_meta($post->ID, 'tppostsliderpro_center_mode', true);
	$tppostsliderpr_stophover   			= get_post_meta($post->ID, 'tppostsliderpr_stophover', true);
	$tppostsliderpro_autoplaytimeout    	= get_post_meta($post->ID, 'tppostsliderpro_autoplaytimeout', true);

	$tppostsliderpr_items 					= get_post_meta($post->ID, 'tppostsliderpr_items', true);
	$tppostsliderpr_itemsdesktop   			= get_post_meta($post->ID, 'tppostsliderpr_itemsdesktop', true);
	$tppostsliderpr_itemsdesktopsmall  		= get_post_meta($post->ID, 'tppostsliderpr_itemsdesktopsmall', true);
	$tppostsliderpr_itemsmobile   			= get_post_meta($post->ID, 'tppostsliderpr_itemsmobile', true);
	$tppostsliderpr_loops 					= get_post_meta($post->ID, 'tppostsliderpr_loops', true);
	$tppostsliderpr_margin 					= get_post_meta($post->ID, 'tppostsliderpr_margin', true);

	$tppostsliderpr_navigation 				= get_post_meta($post->ID, 'tppostsliderpr_navigation', true);
	$tppostsliderpr_navigation_position 	= get_post_meta($post->ID, 'tppostsliderpr_navigation_position', true);
	$tppostsliderpr_navtextcolors     		= get_post_meta($post->ID, 'tppostsliderpr_navtextcolors', true);	
	$tppostsliderpr_navtextcolors_hover   	= get_post_meta($post->ID, 'tppostsliderpr_navtextcolors_hover', true);	
	$tppostsliderpr_navbgcolors       		= get_post_meta($post->ID, 'tppostsliderpr_navbgcolors', true);
	$tppostsliderpr_navbghovercolors     	= get_post_meta($post->ID, 'tppostsliderpr_navbghovercolors', true);
	$tppostsliderpr_paginations 			= get_post_meta($post->ID, 'tppostsliderpr_paginations', true);
	$tppostsliderpr_paginationsposition 	= get_post_meta($post->ID, 'tppostsliderpr_paginationsposition', true);
	$tppostsliderpr_paginations_color   	= get_post_meta($post->ID, 'tppostsliderpr_paginations_color', true);
	$tppostsliderpr_paginations_bgcolor		= get_post_meta($post->ID, 'tppostsliderpr_paginations_bgcolor', true);
	$tppostsliderpr_paginations_style		= get_post_meta($post->ID, 'tppostsliderpr_paginations_style', true);
?>


<div class="tppost-sliderpro-settings post-grid-metabox">
	<!-- <div class="wrap"> -->
    <ul class="tab-nav"> 
        <li nav="1" class="nav1 <?php if($nav_value == 1){echo "active";}?>"><i class="fa fa-file-code-o" aria-hidden="true" ></i> <?php _e('Shortcodes','post-sliders'); ?></li>
        <li nav="2" class="nav2 <?php if($nav_value == 2){echo "active";}?>"><i class="fa fa-clipboard" aria-hidden="true"></i><?php _e('Query Post ','post-sliders'); ?></li>
        <li nav="3" class="nav3 <?php if($nav_value == 3){echo "active";}?>"><i class="fa fa-eyedropper" aria-hidden="true"></i><?php _e('Content Settings ','post-sliders'); ?></li>
        <li nav="4" class="nav4 <?php if($nav_value == 4){echo "active";}?>"><i class="fa fa-cogs" aria-hidden="true"></i><?php _e('Slider Settings','post-sliders'); ?></li>
        <li nav="5" class="nav5 <?php if($nav_value == 5){echo "active";}?>"><i class="fa fa-life-ring" aria-hidden="true"></i> <?php _e('Support & Doc','post-sliders'); ?></li>
    </ul> <!-- tab-nav end -->
    <?php 
    	$getNavValue = "";
    	if(!empty($nav_value)){ $getNavValue = $nav_value; } else { $getNavValue = 1; }
    ?>
    <input type="hidden" name="nav_value" id="nav_value" value="<?php echo $getNavValue; ?>"> 

	<ul class="box">
		<!-- Tab 1  -->
        <li style="<?php if($nav_value == 1){echo "display: block;";} else{ echo "display: none;"; }?>" class="box1 tab-box <?php if($nav_value == 1){echo "active";}?>">
            <div class="option-box">
                <p class="option-title"><?php _e('Shortcode','post-sliders'); ?></p>
                <p class="option-info"><?php _e('Copy this shortcode and paste on page or post where you want to display Post Slider.','post-sliders'); ?></p>
                <textarea cols="50" rows="1" onClick="this.select();" >[tppostpro <?php echo 'id="'.$post->ID.'"';?>]</textarea>
				<br /><br />

				<p class="option-info"><?php _e('Use PHP code to your themes file to display Post Slider.','post-sliders'); ?></p>
				<textarea cols="50" rows="2" onClick="this.select();" ><?php echo '<?php echo do_shortcode("[tppostpro id='; echo "'".$post->ID."']"; echo '"); ?>'; ?></textarea>  
            </div>
        </li>
		
		<!-- Tab 2  -->
        <li style="<?php if($nav_value == 2){echo "display: block;";} else{ echo "display: none;"; }?>" class="box2 tab-box <?php if($nav_value == 2){echo "active";}?>">

			<div class="wrap">
				<div class="option-box">
					<p class="option-title"><?php _e('Query Post','post-sliders'); ?></p>
					<table class="form-table">
						<tr valign="top">
							<th scope="row">
								<label for="post-type"><?php _e('Post Type', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Select your post type (post) or any custom post types\'s. if not selected any post type it not showing any categories.','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select required name="tppostsliderpro_postoptions[post_types][]" id="tppostsliderpro_postoptions" class="timezone_string changer">
									<option value="">Select</option>	
									<?php 
										foreach ( get_post_types( '', 'names' ) as $post_type ) 
										{
											global $wp_post_types;
											
											if(in_array($post_type,$post_types))
											{
												$selected = "selected";
											}
											else
											{
												$selected = '';
											}						  
									?>
									<option value="<?php echo $post_type; ?>" <?php echo $selected; ?>><?php _e($post_type, 'tppostpro')?></option>
									<?php } ?>
								</select>
							</td>
						</tr><!-- End Post Type -->

						<tr valign="top">
							<th scope="row">
								<label for="pgpro_name"><?php _e('Post Categories', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('When you select any post type\'s, All categories visable here. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;" id="get_cate_area">
								<div class="bubblingG" style="display:none;">
									<span id="bubblingG_1">
									</span>
									<span id="bubblingG_2">
									</span>
									<span id="bubblingG_3">
									</span>
								</div>			
								<?php
									echo carpros_get_taxonomy_categories( get_the_ID() );
								?> 
							</td>
						</tr><!-- End Categories -->	

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_styles"><?php _e('Slider Styles', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose your post slider style. all style available only pro version. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_styles" id="tppostsliderpro_styles" class="timezone_string">
									<option value="1" <?php if ( isset ( $tppostsliderpro_styles ) ) selected( $tppostsliderpro_styles, '1' ); ?>><?php _e('Post Slider Style 1', 'post-sliders')?></option>
									<option value="2" <?php if ( isset ( $tppostsliderpro_styles ) ) selected( $tppostsliderpro_styles, '2' ); ?>><?php _e('Post Slider Style 2', 'post-sliders')?></option>
									<option value="3" disabled <?php if ( isset ( $tppostsliderpro_styles ) ) selected( $tppostsliderpro_styles, '3' ); ?>><?php _e(' Style 3 (Only Pro)', 'post-sliders')?></option>
									<option value="4" disabled <?php if ( isset ( $tppostsliderpro_styles ) ) selected( $tppostsliderpro_styles, '4' ); ?>><?php _e(' Style 4 (Only Pro)', 'post-sliders')?></option>
									<option value="5" disabled <?php if ( isset ( $tppostsliderpro_styles ) ) selected( $tppostsliderpro_styles, '5' ); ?>><?php _e(' Style 5 (Only Pro)', 'post-sliders')?></option>
									<option value="6" disabled <?php if ( isset ( $tppostsliderpro_styles ) ) selected( $tppostsliderpro_styles, '6' ); ?>><?php _e(' Style 6 (Only Pro)', 'post-sliders')?></option>
									<option value="7" disabled <?php if ( isset ( $tppostsliderpro_styles ) ) selected( $tppostsliderpro_styles, '7' ); ?>><?php _e(' Style 7 (Only Pro)', 'post-sliders')?></option>
									<option value="8" disabled <?php if ( isset ( $tppostsliderpro_styles ) ) selected( $tppostsliderpro_styles, '8' ); ?>><?php _e(' Style 8 (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Slider Styles -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_ordercats"><?php _e('Order By', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose post Order By ( Author, Title, Date etc ). ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_ordercats" id="tppostsliderpro_ordercats" class="timezone_string">
									<option value="author" <?php if ( isset ( $tppostsliderpro_ordercats ) ) selected( $tppostsliderpro_ordercats, 'author' ); ?>><?php _e('Author', 'post-sliders')?></option>
									<option value="post_date" <?php if ( isset ( $tppostsliderpro_ordercats ) ) selected( $tppostsliderpro_ordercats, 'post_date' ); ?>><?php _e('date', 'post-sliders')?></option>
									<option value="title" <?php if ( isset ( $tppostsliderpro_ordercats ) ) selected( $tppostsliderpro_ordercats, 'title' ); ?>><?php _e('Title', 'post-sliders')?></option>
									<option value="modified" <?php if ( isset ( $tppostsliderpro_ordercats ) ) selected( $tppostsliderpro_ordercats, 'modified' ); ?>><?php _e('Modified', 'post-sliders')?></option>
									<option value="rand" <?php if ( isset ( $tppostsliderpro_ordercats ) ) selected( $tppostsliderpro_ordercats, 'rand' ); ?>><?php _e('Rand', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Order By -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_orders"><?php _e('Order', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose post Order Option ( Ascending or Descending). ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_orders" id="tppostsliderpro_orders" class="timezone_string">
									<option value="DESC" <?php if ( isset ( $tppostsliderpro_orders ) ) selected( $tppostsliderpro_orders, 'DESC' ); ?>><?php _e('Descending', 'post-sliders')?></option>
									<option value="ASC" <?php if ( isset ( $tppostsliderpro_orders ) ) selected( $tppostsliderpro_orders, 'ASC' ); ?>><?php _e('Ascending', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Order -->
						
						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_hide_image"><?php _e('Thumbnail', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Show/Hide Post Thumbnail Image. Default: Show ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_hide_image" id="tppostsliderpro_hide_image" class="timezone_string">
									<option value="1" <?php if ( isset ( $tppostsliderpro_hide_image ) ) selected( $tppostsliderpro_hide_image, '1' ); ?>><?php _e('Show', 'post-sliders')?></option>
									<option disabled value="2" <?php if ( isset ( $tppostsliderpro_hide_image ) ) selected( $tppostsliderpro_hide_image, '2' ); ?>><?php _e('Hide (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Image Show/Hide -->
						
						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_thumb_size"><?php _e('Thumbnail Size', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose post Thumbnail Size Default or Custom Size. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_thumb_size" id="tppostsliderpro_thumb_size" class="timezone_string">
									<option value="1" <?php if ( isset ( $tppostsliderpro_thumb_size ) ) selected( $tppostsliderpro_thumb_size, '1' ); ?>><?php _e('Default', 'post-sliders')?></option>
									<option disabled value="2" <?php if ( isset ( $tppostsliderpro_thumb_size ) ) selected( $tppostsliderpro_thumb_size, '2' ); ?>><?php _e('Custom (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Image Show/Hide -->
						

						<tr valign="top" id="img_controller2" style="<?php if($tppostsliderpro_thumb_size == 2){	echo "display:none;"; }?>">
							<th scope="row">
								<label for="tppostsliderpro_image_height"><?php _e('Image Height (px)', 'post-sliders')?></label>
							</th>
							<td style="vertical-align: middle;">
								<input type="number" name="tppostsliderpro_image_height" id="tppostsliderpro_image_height" maxlength="4" class="timezone_string" required value="<?php  if($tppostsliderpro_image_height !=''){echo $tppostsliderpro_image_height; }else{ echo '250';} ?>">
							</td>
						</tr><!-- End Image Size -->

					</table>
				</div>
			</div>
		</li>
		
		<li style="<?php if($nav_value == 3){echo "display: block;";} else{ echo "display: none;"; }?>" class="box3 tab-box <?php if($nav_value == 3){echo "active";}?>"> 
			<div class="wrap">
				<div class="option-box">
					<p class="option-title"><?php _e('Content Settings','post-sliders'); ?>
					<span><?php _e('Note: all Content options not available in free version. upgrade pro version to unlock all features.','post-sliders'); ?></span>
					</p>
					<table class="form-table">

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_titlefont_size"><?php _e('Title Font Size', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Title Font Size. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="number" name="tppostsliderpro_titlefont_size" id="tppostsliderpro_titlefont_size" min="10" max="45" class="timezone_string" required value="<?php  if($tppostsliderpro_titlefont_size !=''){echo $tppostsliderpro_titlefont_size; }else{ echo '16';} ?>">px
							</td>
						</tr><!-- End Title Font Size-->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_titletext_color"><?php _e('Title Text Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Title Text Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpro_titletext_color" value="<?php if($tppostsliderpro_titletext_color !=''){echo $tppostsliderpro_titletext_color;} else{ echo "#333";} ?>" class="jscolor">
							</td>
						</tr><!-- End Title Text Color -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_titlehover_color"><?php _e('Title Hover Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Title Text Hover Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpro_titlehover_color" value="<?php if($tppostsliderpro_titlehover_color !=''){echo $tppostsliderpro_titlehover_color;} else{ echo "#ddd";} ?>" class="jscolor">
							</td>
						</tr><!-- End Title Text Color -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_title_alignment"><?php _e('Title Text Alignment', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Title Text Alignment. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_title_alignment" id="tppostsliderpro_title_alignment" class="timezone_string">
									<option value="left" <?php if ( isset ( $tppostsliderpro_title_alignment ) ) selected( $tppostsliderpro_title_alignment, 'left' ); ?>><?php _e('Left', 'post-sliders')?></option>
									<option disabled value="center" <?php if ( isset ( $tppostsliderpro_title_alignment ) ) selected( $tppostsliderpro_title_alignment, 'center' ); ?>><?php _e('Center (Only Pro)', 'post-sliders')?></option>
									<option disabled value="right" <?php if ( isset ( $tppostsliderpro_title_alignment ) ) selected( $tppostsliderpro_title_alignment, 'right' ); ?>><?php _e('Right (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Caption Text Alignment-->					

						<tr valign="top" id="bgcontroller">
							<th scope="row">
								<label for="tppostsliderpro_bg_color"><?php _e('Background Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Item Background Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpro_bg_color" value="<?php if($tppostsliderpro_bg_color !=''){echo $tppostsliderpro_bg_color;} else{ echo "#f1f1f1";} ?>" class="jscolor">
							</td>
						</tr><!-- End Background Color -->				
						
						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_hidecats"><?php _e('Categories', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Show/Hide Post Slider Categories Section. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_hidecats" id="tppostsliderpro_hidecats" class="timezone_string">
									<option value="1" <?php if ( isset ( $tppostsliderpro_hidecats ) ) selected( $tppostsliderpro_hidecats, '1' ); ?>><?php _e('Show', 'post-sliders')?></option>
									<option value="2" <?php if ( isset ( $tppostsliderpro_hidecats ) ) selected( $tppostsliderpro_hidecats, '2' ); ?>><?php _e('Hide', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Date & Time Show/Hide -->
						
						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_cat_color"><?php _e('Category Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Categories Text Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpro_cat_color" value="<?php if($tppostsliderpro_cat_color !=''){echo $tppostsliderpro_cat_color;} else{ echo "#333";} ?>" class="jscolor">
							</td>
						</tr><!-- End cat text Color -->
						
						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_catbg_color"><?php _e('Category BG Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Categories Background Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpro_catbg_color" value="<?php if($tppostsliderpro_catbg_color !=''){echo $tppostsliderpro_catbg_color;} else{ echo "#f1f1f1";} ?>" class="jscolor">
							</td>
						</tr><!-- End cat Background Color -->
						
						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_hideauthors"><?php _e('Author Info', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Show/Hide Post Slider Author Information. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_hideauthors" id="tppostsliderpro_hideauthors" class="timezone_string">
									<option value="1" <?php if ( isset ( $tppostsliderpro_hideauthors ) ) selected( $tppostsliderpro_hideauthors, '1' ); ?>><?php _e('Show', 'post-sliders')?></option>
									<option value="2" <?php if ( isset ( $tppostsliderpro_hideauthors ) ) selected( $tppostsliderpro_hideauthors, '2' ); ?>><?php _e('Hide', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Author info Show/Hide -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_author_size"><?php _e('Author Font Size', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Author Font Size. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="number" name="tppostsliderpro_author_size" id="tppostsliderpro_author_size" min="10" max="45" class="timezone_string" required value="<?php  if($tppostsliderpro_author_size !=''){echo $tppostsliderpro_author_size; }else{ echo '12';} ?>">px
							</td>
						</tr><!-- End Author Font Size-->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_author_color"><?php _e('Author Text Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Author Text Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input name="tppostsliderpro_author_color" value="<?php if($tppostsliderpro_author_color !=''){echo $tppostsliderpro_author_color;} else{ echo "#333";} ?>" class="jscolor" />
							</td>
						</tr><!-- End Author Font Color -->
						

						<tr valign="top" id="datetimes">
							<th scope="row">
								<label for="tppostsliderpro_hidedate"><?php _e('Date & Time', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Show/Hide Post Slider Date & Time Section. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_hidedate" id="tppostsliderpro_hidedate" class="timezone_string">
									<option value="1" <?php if ( isset ( $tppostsliderpro_hidedate ) ) selected( $tppostsliderpro_hidedate, '1' ); ?>><?php _e('Show', 'post-sliders')?></option>
									<option value="2" <?php if ( isset ( $tppostsliderpro_hidedate ) ) selected( $tppostsliderpro_hidedate, '2' ); ?>><?php _e('Hide', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Date & Time Show/Hide -->

						<tr valign="top" id="datefsize">
							<th scope="row">
								<label for="tppostsliderpro_date_size"><?php _e('Date Font Size', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Date Font Size. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="number" name="tppostsliderpro_date_size" id="tppostsliderpro_date_size" min="10" max="45" class="timezone_string" required value="<?php  if($tppostsliderpro_date_size !=''){echo $tppostsliderpro_date_size; }else{ echo '12';} ?>">px
							</td>
						</tr><!-- End Content Font Size-->

						<tr valign="top" id="datefcolors">
							<th scope="row">
								<label for="tppostsliderpro_date_color"><?php _e('Date Text Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Date Text Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input name="tppostsliderpro_date_color" value="<?php if($tppostsliderpro_date_color !=''){echo $tppostsliderpro_date_color;} else{ echo "#333";} ?>" class="jscolor" />
							</td>
						</tr><!-- End Content Font Color -->

						<tr valign="top" id="conalign">
							<th scope="row">
								<label for="tppostsliderpro_content_alignment"><?php _e('Content Text Alignment', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Content Text Alignment. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_content_alignment" id="tppostsliderpro_content_alignment" class="timezone_string">
									<option value="left" <?php if ( isset ( $tppostsliderpro_content_alignment ) ) selected( $tppostsliderpro_content_alignment, 'left' ); ?>><?php _e('Left', 'post-sliders')?></option>
									<option disabled value="center" <?php if ( isset ( $tppostsliderpro_content_alignment ) ) selected( $tppostsliderpro_content_alignment, 'center' ); ?>><?php _e('Center (Only Pro)', 'post-sliders')?></option>
									<option disabled value="right" <?php if ( isset ( $tppostsliderpro_content_alignment ) ) selected( $tppostsliderpro_content_alignment, 'right' ); ?>><?php _e('Right (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Content Text Alignment-->

						<tr valign="top" id="content_textsize">
							<th scope="row">
								<label for="tppostsliderpro_content_fontsize"><?php _e('Content Font Size', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Content Font Size. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="number" name="tppostsliderpro_content_fontsize" id="tppostsliderpro_content_fontsize" min="10" max="45" class="timezone_string" required value="<?php  if($tppostsliderpro_content_fontsize !=''){echo $tppostsliderpro_content_fontsize; }else{ echo '13';} ?>">px
							</td>
						</tr><!-- End Content Font Size-->

						<tr valign="top" id="conhide">
							<th scope="row">
								<label for="tppostsliderpro_content_colors"><?php _e('Content Text Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Content Text Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input name="tppostsliderpro_content_colors" value="<?php if($tppostsliderpro_content_colors !=''){echo $tppostsliderpro_content_colors;} else{ echo "#000";} ?>" class="jscolor" />
							</td>
						</tr><!-- End Content Font Color -->			

						<tr valign="top" id="hide1">
							<th scope="row">
								<label for="tppostsliderpro_overlay_colors"><?php _e('Overlay Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Overlay Background Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" class="color-picker" data-alpha="true" data-default-color="rgba(0,0,0,0.6)" name="tppostsliderpro_overlay_colors" value="<?php echo $tppostsliderpro_overlay_colors?>" />
							</td>
						</tr><!-- End Overlay Color -->
						
						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_border_size"><?php _e('Border', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Item Border Size. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="number" name="tppostsliderpro_border_size" id="tppostsliderpro_border_size" min="0" max="45" class="timezone_string" required value="<?php  if($tppostsliderpro_border_size !=''){echo $tppostsliderpro_border_size; }else{ echo '1';} ?>">px
							</td>
						</tr><!-- End Border Size-->

						<tr valign="top" id="hide4">
							<th scope="row">
								<label for="tppostsliderpro_border_colors"><?php _e('Border Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Item Border Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input name="tppostsliderpro_border_colors" value="<?php if($tppostsliderpro_border_colors !=''){echo $tppostsliderpro_border_colors;} else{ echo "#ddd";} ?>" class="jscolor" />
							</td>
						</tr><!-- End Overlay Icons Color -->

						<tr valign="top" id="cp_ex_length_area">
							<th scope="row">
								<label for="excerpt_lenght"><?php _e('Excerpt Length in Characters (Only Pro)', 'cppostslider')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Details Excerpt Lenght. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="number" name="excerpt_lenght"  id="excerpt_lenght" maxlength="3" class="timezone_string" value="<?php echo $excerpt_lenght; ?>" >

								<input type="text" name="btn_readmore" id="btn_readmore" maxlength="20" class="timezone_string" value="<?php echo $btn_readmore; ?>" >
							</td>
						</tr><!-- End Excerpt Length -->
						
						<tr valign="top" id="datefsize">
							<th scope="row">
								<label for="tppostsliderpro_excerpt_size"><?php _e('Read More Font Size', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Read More Button Font Size. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="number" name="tppostsliderpro_excerpt_size" id="tppostsliderpro_excerpt_size" min="10" max="45" class="timezone_string" required value="<?php  if($tppostsliderpro_excerpt_size !=''){echo $tppostsliderpro_excerpt_size; }else{ echo '12';} ?>">px
							</td>
						</tr><!-- End Content Font Size-->
						
						<tr valign="top" id="conalign">
							<th scope="row">
								<label for="tppostsliderpro_read_alignment"><?php _e('Read More Text Alignment', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Read More Button Alignment. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_read_alignment" id="tppostsliderpro_read_alignment" class="timezone_string">
									<option value="left" <?php if ( isset ( $tppostsliderpro_read_alignment ) ) selected( $tppostsliderpro_read_alignment, 'left' ); ?>><?php _e('Left', 'post-sliders')?></option>
									<option value="center" <?php if ( isset ( $tppostsliderpro_read_alignment ) ) selected( $tppostsliderpro_read_alignment, 'center' ); ?>><?php _e('Center', 'post-sliders')?></option>
									<option value="right" <?php if ( isset ( $tppostsliderpro_read_alignment ) ) selected( $tppostsliderpro_read_alignment, 'right' ); ?>><?php _e('Right', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Content Text Alignment-->

						<tr valign="top" id="hide5">
							<th scope="row">
								<label for="tppostsliderpro_excerpt_colors"><?php _e('Read More Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Read More Text Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input name="tppostsliderpro_excerpt_colors" value="<?php if($tppostsliderpro_excerpt_colors !=''){echo $tppostsliderpro_excerpt_colors;} else{ echo "#000";} ?>" class="jscolor" />
							</td>
						</tr><!-- End Excerpt Color -->

						<tr valign="top" id="hide6">
							<th scope="row">
								<label for="tppostsliderpro_excerpt_bgcolors"><?php _e('Read More Hover Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Read More Hover Text Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input name="tppostsliderpro_excerpt_bgcolors" value="<?php if($tppostsliderpro_excerpt_bgcolors !=''){echo $tppostsliderpro_excerpt_bgcolors;} else{ echo "#7862D4";} ?>" class="jscolor" />
							</td>
						</tr><!-- End Excerpt Color -->	

					</table>
				</div>
			</div>
		</li>

		<li style="<?php if($nav_value == 4){echo "display: block;";} else{ echo "display: none;"; }?>" class="box4 tab-box <?php if($nav_value == 4){echo "active";}?>">
			<div class="wrap">
				<div class="option-box">
					<p class="option-title"><?php _e('Slider Settings','post-sliders'); ?>
					<span><?php _e('Note: all slider options not available in free version. upgrade pro version to unlock all features.','post-sliders'); ?></span>
					</p>
					<table class="form-table">

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_autoplay"><?php _e('Autoplay', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Autoplay Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_autoplay" id="tppostsliderpro_autoplay" class="timezone_string">
									<option value="true" <?php if ( isset ( $tppostsliderpro_autoplay ) ) selected( $tppostsliderpro_autoplay, 'true' ); ?>><?php _e('True', 'post-sliders')?></option>
									<option value="false" <?php if ( isset ( $tppostsliderpro_autoplay ) ) selected( $tppostsliderpro_autoplay, 'false' ); ?>><?php _e('False', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Autoplay -->
						
						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_autohidemode"><?php _e('Auto Hide Mode', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Auto Hide Mode. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_autohidemode" id="tppostsliderpro_autohidemode" class="timezone_string">
									<option value="true" <?php if ( isset ( $tppostsliderpro_autohidemode ) ) selected( $tppostsliderpro_autohidemode, 'true' ); ?>><?php _e('True (Only Pro)', 'post-sliders')?></option>
									<option value="false" <?php if ( isset ( $tppostsliderpro_autohidemode ) ) selected( $tppostsliderpro_autohidemode, 'false' ); ?>><?php _e('False (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr>
						<!-- End Autoplay -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_center_mode"><?php _e('Centered Mode', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Centered Mode. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_center_mode" id="tppostsliderpro_center_mode" class="timezone_string">
									<option value="false" <?php if ( isset ( $tppostsliderpro_center_mode ) ) selected( $tppostsliderpro_center_mode, 'false' ); ?>><?php _e('False (Only Pro)', 'post-sliders')?></option>
									<option value="true" <?php if ( isset ( $tppostsliderpro_center_mode ) ) selected( $tppostsliderpro_center_mode, 'true' ); ?>><?php _e('True (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr>
						<!-- End Autoplay -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_autoplay_speed"><?php _e('Slide Delay', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Dealy Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input disabled type="text" name="tppostsliderpro_autoplay_speed" id="tppostsliderpro_autoplay_speed" maxlength="4" class="timezone_string" required value="<?php  if($tppostsliderpro_autoplay_speed !=''){echo $tppostsliderpro_autoplay_speed; }else{ echo 'Only Pro';} ?>">							
							</td>
						</tr><!-- End Slide Delay -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_stophover"><?php _e('Stop Hover', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Stop Mouse Hover Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_stophover" id="tppostsliderpr_stophover" class="timezone_string">
									<option value="true" <?php if ( isset ( $tppostsliderpr_stophover ) ) selected( $tppostsliderpr_stophover, 'true' ); ?>><?php _e('True', 'post-sliders')?></option>	
									<option value="false" <?php if ( isset ( $tppostsliderpr_stophover ) ) selected( $tppostsliderpr_stophover, 'false' ); ?>><?php _e('False', 'post-sliders')?></option>
								</select>							
							</td>
						</tr><!-- End Stop Hover -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpro_autoplaytimeout"><?php _e('Autoplay Time Out (Sec)', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Autoplay Time Out (Sec). ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpro_autoplaytimeout" id="tppostsliderpro_autoplaytimeout" class="timezone_string">
									<option value="1000" <?php if ( isset ( $tppostsliderpro_autoplaytimeout ) ) selected( $tppostsliderpro_autoplaytimeout, '1000' ); ?>><?php _e('1', 'post-sliders')?></option>
									<option value="2000" <?php if ( isset ( $tppostsliderpro_autoplaytimeout ) ) selected( $tppostsliderpro_autoplaytimeout, '2000' ); ?>><?php _e('2 ', 'post-sliders')?></option>
									<option value="3000" <?php if ( isset ( $tppostsliderpro_autoplaytimeout ) ) selected( $tppostsliderpro_autoplaytimeout, '3000' ); ?>><?php _e('3 ', 'post-sliders')?></option>
									<option value="4000" <?php if ( isset ( $tppostsliderpro_autoplaytimeout ) ) selected( $tppostsliderpro_autoplaytimeout, '4000' ); ?>><?php _e('4 ', 'post-sliders')?></option>
									<option value="5000" <?php if ( isset ( $tppostsliderpro_autoplaytimeout ) ) selected( $tppostsliderpro_autoplaytimeout, '5000' ); ?>><?php _e('5 ', 'post-sliders')?></option>
									<option value="6000" <?php if ( isset ( $tppostsliderpro_autoplaytimeout ) ) selected( $tppostsliderpro_autoplaytimeout, '6000' ); ?>><?php _e('6 ', 'post-sliders')?></option>
									<option value="7000" <?php if ( isset ( $tppostsliderpro_autoplaytimeout ) ) selected( $tppostsliderpro_autoplaytimeout, '7000' ); ?>><?php _e('7 ', 'post-sliders')?></option>
									<option value="8000" <?php if ( isset ( $tppostsliderpro_autoplaytimeout ) ) selected( $tppostsliderpro_autoplaytimeout, '8000' ); ?>><?php _e('8 ', 'post-sliders')?></option>
									<option value="9000" <?php if ( isset ( $tppostsliderpro_autoplaytimeout ) ) selected( $tppostsliderpro_autoplaytimeout, '9000' ); ?>><?php _e('9 ', 'post-sliders')?></option>
									<option value="10000" <?php if ( isset ( $tppostsliderpro_autoplaytimeout ) ) selected( $tppostsliderpro_autoplaytimeout, '10000' ); ?>><?php _e('10', 'post-sliders')?></option>
								</select>							
							</td>
						</tr><!-- End Autoplay Time Out -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_items"><?php _e('Items No', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Display Items. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_items" id="tppostsliderpr_items" class="timezone_string">
									<option value="3" <?php if ( isset ( $tppostsliderpr_items ) )  selected( $tppostsliderpr_items, '3' ); ?>><?php _e('3', 'post-sliders')?></option>
									<option value="1" <?php if ( isset ( $tppostsliderpr_items ) )  selected( $tppostsliderpr_items, '1' ); ?>><?php _e('1', 'post-sliders')?></option>
									<option value="2" <?php if ( isset ( $tppostsliderpr_items ) )  selected( $tppostsliderpr_items, '2' ); ?>><?php _e('2', 'post-sliders')?></option>
									<option disabled value="4" <?php if ( isset ( $tppostsliderpr_items ) )  selected( $tppostsliderpr_items, '4' ); ?>><?php _e('4', 'post-sliders')?></option>
									<option disabled value="5" <?php if ( isset ( $tppostsliderpr_items ) )  selected( $tppostsliderpr_items, '5' ); ?>><?php _e('5', 'post-sliders')?></option>
									<option disabled value="6" <?php if ( isset ( $tppostsliderpr_items ) )  selected( $tppostsliderpr_items, '6' ); ?>><?php _e('6', 'post-sliders')?></option>
									<option disabled value="7" <?php if ( isset ( $tppostsliderpr_items ) )  selected( $tppostsliderpr_items, '7' ); ?>><?php _e('7', 'post-sliders')?></option>
									<option disabled value="8" <?php if ( isset ( $tppostsliderpr_items ) )  selected( $tppostsliderpr_items, '8' ); ?>><?php _e('8', 'post-sliders')?></option>
									<option disabled value="9" <?php if ( isset ( $tppostsliderpr_items ) )  selected( $tppostsliderpr_items, '9' ); ?>><?php _e('9', 'post-sliders')?></option>
									<option disabled value="10" <?php if ( isset ( $tppostsliderpr_items ) ) selected( $tppostsliderpr_items, '10' ); ?>><?php _e('10', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Items No -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_itemsdesktop"><?php _e('Items Desktop (Only Pro)', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Display Items on Desktop Devices. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_itemsdesktop" id="tppostsliderpr_itemsdesktop" class="timezone_string">
									<option value="3" <?php if ( isset ( $tppostsliderpr_itemsdesktop ) ) selected( $tppostsliderpr_itemsdesktop, '3' ); ?>><?php _e('3', 'post-sliders')?></option>
									<option value="1" <?php if ( isset ( $tppostsliderpr_itemsdesktop ) ) selected( $tppostsliderpr_itemsdesktop, '1' ); ?>><?php _e('1', 'post-sliders')?></option>
									<option value="2" <?php if ( isset ( $tppostsliderpr_itemsdesktop ) ) selected( $tppostsliderpr_itemsdesktop, '2' ); ?>><?php _e('2', 'post-sliders')?></option>
									<option value="4" <?php if ( isset ( $tppostsliderpr_itemsdesktop ) ) selected( $tppostsliderpr_itemsdesktop, '4' ); ?>><?php _e('4', 'post-sliders')?></option>
									<option value="5" <?php if ( isset ( $tppostsliderpr_itemsdesktop ) ) selected( $tppostsliderpr_itemsdesktop, '5' ); ?>><?php _e('5', 'post-sliders')?></option>
									<option value="6" <?php if ( isset ( $tppostsliderpr_itemsdesktop ) ) selected( $tppostsliderpr_itemsdesktop, '6' ); ?>><?php _e('6', 'post-sliders')?></option>
									<option value="7" <?php if ( isset ( $tppostsliderpr_itemsdesktop ) ) selected( $tppostsliderpr_itemsdesktop, '7' ); ?>><?php _e('7', 'post-sliders')?></option>
									<option value="8" <?php if ( isset ( $tppostsliderpr_itemsdesktop ) ) selected( $tppostsliderpr_itemsdesktop, '8' ); ?>><?php _e('8', 'post-sliders')?></option>
									<option value="9" <?php if ( isset ( $tppostsliderpr_itemsdesktop ) ) selected( $tppostsliderpr_itemsdesktop, '9' ); ?>><?php _e('9', 'post-sliders')?></option>
									<option value="10" <?php if ( isset ( $tppostsliderpr_itemsdesktop ) ) selected( $tppostsliderpr_itemsdesktop, '10' ); ?>><?php _e('10', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Items Desktop -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_itemsdesktopsmall"><?php _e('Items Desktop Small (Only Pro)', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Display Items on Desktop Small Devices. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_itemsdesktopsmall" id="tppostsliderpr_itemsdesktopsmall" class="timezone_string">
									<option value="1" <?php if ( isset ( $tppostsliderpr_itemsdesktopsmall ) ) selected( $tppostsliderpr_itemsdesktopsmall, '1' ); ?>><?php _e('1', 'post-sliders')?></option>
									<option value="2" <?php if ( isset ( $tppostsliderpr_itemsdesktopsmall ) ) selected( $tppostsliderpr_itemsdesktopsmall, '2' ); ?>><?php _e('2', 'post-sliders')?></option>
									<option value="3" <?php if ( isset ( $tppostsliderpr_itemsdesktopsmall ) ) selected( $tppostsliderpr_itemsdesktopsmall, '3' ); ?>><?php _e('3', 'post-sliders')?></option>
									<option value="4" <?php if ( isset ( $tppostsliderpr_itemsdesktopsmall ) ) selected( $tppostsliderpr_itemsdesktopsmall, '4' ); ?>><?php _e('4', 'post-sliders')?></option>
									<option value="5" <?php if ( isset ( $tppostsliderpr_itemsdesktopsmall ) ) selected( $tppostsliderpr_itemsdesktopsmall, '5' ); ?>><?php _e('5', 'post-sliders')?></option>
									<option value="6" <?php if ( isset ( $tppostsliderpr_itemsdesktopsmall ) ) selected( $tppostsliderpr_itemsdesktopsmall, '6' ); ?>><?php _e('6', 'post-sliders')?></option>
									<option value="7" <?php if ( isset ( $tppostsliderpr_itemsdesktopsmall ) ) selected( $tppostsliderpr_itemsdesktopsmall, '7' ); ?>><?php _e('7', 'post-sliders')?></option>
									<option value="8" <?php if ( isset ( $tppostsliderpr_itemsdesktopsmall ) ) selected( $tppostsliderpr_itemsdesktopsmall, '8' ); ?>><?php _e('8', 'post-sliders')?></option>
									<option value="9" <?php if ( isset ( $tppostsliderpr_itemsdesktopsmall ) ) selected( $tppostsliderpr_itemsdesktopsmall, '9' ); ?>><?php _e('9', 'post-sliders')?></option>
									<option value="10" <?php if ( isset ( $tppostsliderpr_itemsdesktopsmall ) ) selected( $tppostsliderpr_itemsdesktopsmall, '10' ); ?>><?php _e('10', 'post-sliders')?></option>
								</select>			
							</td>
						</tr><!-- End Items Desktop Small -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_itemsmobile"><?php _e('Items Mobile (Only Pro)', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Display Items on Mobile Devices. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_itemsmobile" id="tppostsliderpr_itemsmobile" class="timezone_string">
									<option value="1" <?php if ( isset ( $tppostsliderpr_itemsmobile ) ) selected( $tppostsliderpr_itemsmobile, '1' ); ?>><?php _e('1', 'post-sliders')?></option>
									<option value="2" <?php if ( isset ( $tppostsliderpr_itemsmobile ) ) selected( $tppostsliderpr_itemsmobile, '2' ); ?>><?php _e('2', 'post-sliders')?></option>
									<option value="3" <?php if ( isset ( $tppostsliderpr_itemsmobile ) ) selected( $tppostsliderpr_itemsmobile, '3' ); ?>><?php _e('3', 'post-sliders')?></option>
									<option value="4" <?php if ( isset ( $tppostsliderpr_itemsmobile ) ) selected( $tppostsliderpr_itemsmobile, '4' ); ?>><?php _e('4', 'post-sliders')?></option>
									<option value="5" <?php if ( isset ( $tppostsliderpr_itemsmobile ) ) selected( $tppostsliderpr_itemsmobile, '5' ); ?>><?php _e('5', 'post-sliders')?></option>
									<option value="6" <?php if ( isset ( $tppostsliderpr_itemsmobile ) ) selected( $tppostsliderpr_itemsmobile, '6' ); ?>><?php _e('6', 'post-sliders')?></option>
									<option value="7" <?php if ( isset ( $tppostsliderpr_itemsmobile ) ) selected( $tppostsliderpr_itemsmobile, '7' ); ?>><?php _e('7', 'post-sliders')?></option>
									<option value="8" <?php if ( isset ( $tppostsliderpr_itemsmobile ) ) selected( $tppostsliderpr_itemsmobile, '8' ); ?>><?php _e('8', 'post-sliders')?></option>
									<option value="9" <?php if ( isset ( $tppostsliderpr_itemsmobile ) ) selected( $tppostsliderpr_itemsmobile, '9' ); ?>><?php _e('9', 'post-sliders')?></option>
									<option value="10" <?php if ( isset ( $tppostsliderpr_itemsmobile ) ) selected( $tppostsliderpr_itemsmobile, '10' ); ?>><?php _e('10', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Items Mobile -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_loops"><?php _e('Loop (Only Pro)', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Loop Options. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_loops" id="tppostsliderpr_loops" class="timezone_string">
									<option value="true" <?php if ( isset ( $tppostsliderpr_loops ) ) selected( $tppostsliderpr_loops, 'true' ); ?>><?php _e('True (Only Pro)', 'post-sliders')?></option>
									<option value="false" <?php if ( isset ( $tppostsliderpr_loops ) ) selected( $tppostsliderpr_loops, 'false' ); ?>><?php _e('False (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Loop -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_margin"><?php _e('Margin (Only Pro)', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Margin Options. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="number" name="tppostsliderpr_margin" id="tppostsliderpr_margin" maxlength="3" class="timezone_string" value="<?php if($tppostsliderpr_margin !=''){echo $tppostsliderpr_margin;} else{ echo '10'; } ?>" value="0">
							</td>
						</tr><!-- End Margin -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_navigation"><?php _e('Navigation', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Show/Hide Post Slider Navigation Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_navigation" id="tppostsliderpr_navigation" class="timezone_string">
									<option value="true" <?php if ( isset ( $tppostsliderpr_navigation ) ) selected( $tppostsliderpr_navigation, 'true' ); ?>><?php _e('True', 'post-sliders')?></option>
									<option value="false" <?php if ( isset ( $tppostsliderpr_navigation ) ) selected( $tppostsliderpr_navigation, 'false' ); ?>><?php _e('False', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Navigation -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_navigation_position"><?php _e('Navigation Position', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Navigation Position Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_navigation_position" id="tppostsliderpr_navigation_position" class="timezone_string">
									<option value="1" <?php if ( isset ( $tppostsliderpr_navigation_position ) ) selected( $tppostsliderpr_navigation_position, '1' ); ?>><?php _e('Top Right', 'post-sliders')?></option>
									<option disabled value="2" <?php if ( isset ( $tppostsliderpr_navigation_position ) ) selected( $tppostsliderpr_navigation_position, '2' ); ?>><?php _e('Top Left (Only Pro)', 'post-sliders')?></option>
									<option disabled value="3" <?php if ( isset ( $tppostsliderpr_navigation_position ) ) selected( $tppostsliderpr_navigation_position, '3' ); ?>><?php _e('Bottom Center (Only Pro)', 'post-sliders')?></option>
									<option disabled value="4" <?php if ( isset ( $tppostsliderpr_navigation_position ) ) selected( $tppostsliderpr_navigation_position, '4' ); ?>><?php _e('Bottom Left (Only Pro)', 'post-sliders')?></option>
									<option disabled value="5" <?php if ( isset ( $tppostsliderpr_navigation_position ) ) selected( $tppostsliderpr_navigation_position, '5' ); ?>><?php _e('Bottom Right (Only Pro)', 'post-sliders')?></option>
									<option disabled value="6" <?php if ( isset ( $tppostsliderpr_navigation_position ) ) selected( $tppostsliderpr_navigation_position, '6' ); ?>><?php _e('Centred (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Navigation Position -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_navtextcolors"><?php _e('Navigation Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Show/Hide Post Slider Navigation Color Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpr_navtextcolors" value="<?php if($tppostsliderpr_navtextcolors !=''){echo $tppostsliderpr_navtextcolors;} else{ echo "#A28352";} ?>" class="jscolor">
							</td>
						</tr><!-- End Navigation Color -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_navtextcolors_hover"><?php _e('Navigation Hover Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Show/Hide Post Slider Navigation Hover Color Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpr_navtextcolors_hover" value="<?php if($tppostsliderpr_navtextcolors_hover !=''){echo $tppostsliderpr_navtextcolors_hover;} else{ echo "#A28352";} ?>" class="jscolor">
							</td>
						</tr><!-- End Navigation Hover Color -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_navbgcolors"><?php _e('Navigation Background Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Show/Hide Post Slider Navigation Background Color Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpr_navbgcolors" value="<?php if($tppostsliderpr_navbgcolors !=''){echo $tppostsliderpr_navbgcolors;} else{ echo "#DBEAF7";} ?>" class="jscolor">
							</td>
						</tr><!-- End Navigation Background Color -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_navbghovercolors"><?php _e('Navigation Hover Background Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Show/Hide Post Slider Navigation Hover Background Colo Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpr_navbghovercolors" value="<?php if($tppostsliderpr_navbghovercolors !=''){echo $tppostsliderpr_navbghovercolors;} else{ echo "#DBEAF7";} ?>" class="jscolor">
							</td>
						</tr><!-- End Navigation Hover Background Color -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_paginations"><?php _e('Pagination', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Show/Hide Post Slider Pagination Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_paginations" id="tppostsliderpr_paginations" class="timezone_string">
									<option value="true" <?php if ( isset ( $tppostsliderpr_paginations ) ) selected( $tppostsliderpr_paginations, 'true' ); ?>><?php _e('True', 'post-sliders')?></option>
									<option value="false" <?php if ( isset ( $tppostsliderpr_paginations ) ) selected( $tppostsliderpr_paginations, 'false' ); ?>><?php _e('False', 'post-sliders')?></option>
								</select>							
							</td>
						</tr><!-- End Pagination -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_paginations_color"><?php _e('Pagination Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Pagination Color. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpr_paginations_color" value="<?php if($tppostsliderpr_paginations_color !=''){echo $tppostsliderpr_paginations_color;} else{ echo "#f001f0";} ?>" class="jscolor">
							</td>
						</tr><!-- End Pagination Color -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_paginations_bgcolor"><?php _e('Pagination Background Color', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Pagination Background Colo Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<input type="text" name="tppostsliderpr_paginations_bgcolor" value="<?php if($tppostsliderpr_paginations_bgcolor !=''){echo $tppostsliderpr_paginations_bgcolor;} else{ echo "#7A4B94";} ?>" class="jscolor">
							</td>
						</tr><!-- End Pagination Background Color -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_paginations_style"><?php _e('Pagination Style', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Pagination Styles. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_paginations_style" id="tppostsliderpr_paginations_style" class="timezone_string">
									<option value="1" <?php if ( isset ( $tppostsliderpr_paginations_style ) ) selected( $tppostsliderpr_paginations_style, '1' ); ?>><?php _e('Round', 'post-sliders')?></option>
									<option disabled value="2" <?php if ( isset ( $tppostsliderpr_paginations_style ) ) selected( $tppostsliderpr_paginations_style, '2' ); ?>><?php _e('Square (Only Pro)', 'post-sliders')?></option>
									<option disabled value="3" <?php if ( isset ( $tppostsliderpr_paginations_style ) ) selected( $tppostsliderpr_paginations_style, '3' ); ?>><?php _e('Star (Only Pro)', 'post-sliders')?></option>
									<option disabled value="4" <?php if ( isset ( $tppostsliderpr_paginations_style ) ) selected( $tppostsliderpr_paginations_style, '4' ); ?>><?php _e('Line (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Pagination Position -->

						<tr valign="top">
							<th scope="row">
								<label for="tppostsliderpr_paginationsposition"><?php _e('Pagination Position', 'post-sliders')?></label>
								<br />
								<span class="postsliderhints"><?php _e('Choose Post Slider Pagination Position Option. ','post-sliders'); ?></span>
							</th>
							<td style="vertical-align: middle;">
								<select name="tppostsliderpr_paginationsposition" id="tppostsliderpr_paginationsposition" class="timezone_string">
									<option value="center" <?php if ( isset ( $tppostsliderpr_paginationsposition ) ) selected( $tppostsliderpr_paginationsposition, 'center' ); ?>><?php _e('Center', 'post-sliders')?></option>
									<option disabled value="left" <?php if ( isset ( $tppostsliderpr_paginationsposition ) ) selected( $tppostsliderpr_paginationsposition, 'left' ); ?>><?php _e('Left (Only Pro)', 'post-sliders')?></option>
									<option disabled value="right" <?php if ( isset ( $tppostsliderpr_paginationsposition ) ) selected( $tppostsliderpr_paginationsposition, 'right' ); ?>><?php _e('Right (Only Pro)', 'post-sliders')?></option>
								</select>
							</td>
						</tr><!-- End Pagination Position -->

					</table>
				</div>
			</div>
		</li>
		
		<li style="<?php if($nav_value == 5){echo "display: block;";} else{ echo "display: none;"; }?>" class="box5 tab-box <?php if($nav_value == 5){echo "active";}?>"> 
			<div class="wrap">
				<div class="option-box">
					<p class="option-title"><?php _e('Need Support','post-sliders'); ?></p>
					<table class="form-table">
						<tr valign="top">
							<th scope="row"><label style="padding-left:10px;" for="tppostsliderpr_support_info"><?php echo __('Support Forum', 'post-sliders'); ?></label></th>
							<td style="vertical-align:middle;">
								If you need any helps, please don't hesitate to post it on our <a href="https://themepoints.com/questions-answer/">Support Forum</a> or <a href="https://themepoints.com/contact/">Contact</a> us directly via our website contact form for quick support.
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><label style="padding-left:10px;" for="tppostsliderpr_support_info"><?php echo __('Live Preview', 'post-sliders'); ?></label></th>
							<td style="vertical-align:middle;">
								<a target="_blank" href="https://themepoints.com/product/post-slider-pro/">Live Preview</a>
							</td>
						</tr>
						<tr valign="top">
							<th scope="row"><label style="padding-left:10px;" for="tppostsliderpr_support_info"><?php echo __('Documentation', 'post-sliders'); ?></label></th>
							<td style="vertical-align:middle;">
								<a target="_blank" href="https://themepoints.com/postsliderpro/installation/">Documentation</a>
							</td>
						</tr>

					</table>
					
				</div>

			</div>
		</li>
		
		
		
		
	</ul>
</div>
<?php }   //

	
# Data save in custom metabox field
function tppostsliderpr_meta_box_pro_save_func($post_id){

	# Doing autosave then return.
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return;

	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_postoptions' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_postoptions', $_POST['tppostsliderpro_postoptions'] );
	}



	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_styles' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_styles', $_POST['tppostsliderpro_styles'] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_ordercats' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_ordercats', $_POST[ 'tppostsliderpro_ordercats' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_orders' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_orders', $_POST[ 'tppostsliderpro_orders' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_bg_color' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_bg_color', $_POST[ 'tppostsliderpro_bg_color' ] );
	}

	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_hide_image' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_hide_image', $_POST[ 'tppostsliderpro_hide_image' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_image_height' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_image_height', $_POST[ 'tppostsliderpro_image_height' ] );
	}
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_thumb_size' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_thumb_size', $_POST[ 'tppostsliderpro_thumb_size' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_border_colors' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_border_colors', $_POST[ 'tppostsliderpro_border_colors' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_border_size' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_border_size', $_POST[ 'tppostsliderpro_border_size' ] );
	}	

	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_titletext_color' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_titletext_color', $_POST[ 'tppostsliderpro_titletext_color' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_titlehover_color' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_titlehover_color', $_POST[ 'tppostsliderpro_titlehover_color' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_content_colors' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_content_colors', $_POST[ 'tppostsliderpro_content_colors' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_hidedate' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_hidedate', $_POST[ 'tppostsliderpro_hidedate' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_hidecats' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_hidecats', $_POST[ 'tppostsliderpro_hidecats' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_hideauthors' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_hideauthors', $_POST[ 'tppostsliderpro_hideauthors' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_author_size' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_author_size', $_POST[ 'tppostsliderpro_author_size' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_author_color' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_author_color', $_POST[ 'tppostsliderpro_author_color' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_cat_color' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_cat_color', $_POST[ 'tppostsliderpro_cat_color' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_catbg_color' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_catbg_color', $_POST[ 'tppostsliderpro_catbg_color' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_date_color' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_date_color', $_POST[ 'tppostsliderpro_date_color' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_date_size' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_date_size', $_POST[ 'tppostsliderpro_date_size' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_content_alignment' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_content_alignment', $_POST[ 'tppostsliderpro_content_alignment' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_content_fontsize' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_content_fontsize', $_POST[ 'tppostsliderpro_content_fontsize' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_title_alignment' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_title_alignment', $_POST[ 'tppostsliderpro_title_alignment' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_titlefont_size' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_titlefont_size', $_POST[ 'tppostsliderpro_titlefont_size' ] );
	}

	#Checks for input and saves
	if( isset( $_POST[ 'tppostsliderpro_overlay_colors' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_overlay_colors', esc_html($_POST['tppostsliderpro_overlay_colors']) );
	}
	
	#Checks for input and sanitizes/saves if needed
    if( isset($_POST['excerpt_lenght']) && ($_POST['excerpt_lenght'] != '')  && ($_POST['excerpt_lenght'] != '0') && (strlen($_POST['excerpt_lenght']) <= 3)) {
        update_post_meta( $post_id, 'excerpt_lenght', esc_html($_POST['excerpt_lenght']) );
    } else{
    	update_post_meta( $post_id, 'excerpt_lenght', 100 );
    }

	#Checks for input and sanitizes/saves if needed
    if( isset( $_POST['btn_readmore'] ) && ( $_POST['btn_readmore'] != '') && ( strlen($_POST['btn_readmore']) <= 20) ) {
        update_post_meta( $post_id, 'btn_readmore', esc_html($_POST['btn_readmore']) );
    } else{
        update_post_meta( $post_id, 'btn_readmore', 'Read More' );

    }
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_excerpt_colors' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_excerpt_colors', $_POST[ 'tppostsliderpro_excerpt_colors' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_excerpt_size' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_excerpt_size', $_POST[ 'tppostsliderpro_excerpt_size' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_read_alignment' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_read_alignment', $_POST[ 'tppostsliderpro_read_alignment' ] );
	}
	
	#Checks for input and saves if needed
	if( isset( $_POST[ 'tppostsliderpro_excerpt_bgcolors' ] ) ) {
	    update_post_meta( $post_id, 'tppostsliderpro_excerpt_bgcolors', $_POST[ 'tppostsliderpro_excerpt_bgcolors' ] );
	}


    // Carousal Settings

	#Checks for input and sanitizes/saves if needed
    if( isset($_POST['tppostsliderpr_items']) && ($_POST['tppostsliderpr_items'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_items', esc_html($_POST['tppostsliderpr_items']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_loops']) && ($_POST['tppostsliderpr_loops'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_loops', esc_html($_POST['tppostsliderpr_loops']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset( $_POST['tppostsliderpr_margin'] ) ) {
    	if(strlen($_POST['tppostsliderpr_margin']) > 2){     // input value length greate than 2 

    	} else{
	    	if( $_POST['tppostsliderpr_margin'] == '' || $_POST['tppostsliderpr_margin'] == is_null($_POST['tppostsliderpr_margin']) ){

	    		update_post_meta( $post_id, 'tppostsliderpr_margin', 0 );

	    	}
	    	else
	    	{
	    		if (is_numeric($_POST['tppostsliderpr_margin'])) {

	    			update_post_meta( $post_id, 'tppostsliderpr_margin', esc_html($_POST['tppostsliderpr_margin']) );

	    		}

	    	}
    	}
    }
	
	
	#Value check and saves if needed
	if( isset( $_POST[ 'nav_value' ] ) ) {
		update_post_meta( $post_id, 'nav_value', $_POST['nav_value'] );
	} else {
		update_post_meta( $post_id, 'nav_value', 1 );
	}

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_navigation']) && ($_POST['tppostsliderpr_navigation'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_navigation', esc_html($_POST['tppostsliderpr_navigation']) );
    }
	
 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_navigation_position']) && ($_POST['tppostsliderpr_navigation_position'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_navigation_position', esc_html($_POST['tppostsliderpr_navigation_position']) );
    }
	
 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_paginationsposition']) && ($_POST['tppostsliderpr_paginationsposition'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_paginationsposition', esc_html($_POST['tppostsliderpr_paginationsposition']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_paginations']) && ($_POST['tppostsliderpr_paginations'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_paginations', esc_html($_POST['tppostsliderpr_paginations']) );
    }  

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_paginations_color']) && ($_POST['tppostsliderpr_paginations_color'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_paginations_color', esc_html($_POST['tppostsliderpr_paginations_color']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_paginations_bgcolor']) && ($_POST['tppostsliderpr_paginations_bgcolor'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_paginations_bgcolor', esc_html($_POST['tppostsliderpr_paginations_bgcolor']) );
    } 

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_paginations_style']) && ($_POST['tppostsliderpr_paginations_style'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_paginations_style', esc_html($_POST['tppostsliderpr_paginations_style']) );
    }    
    
 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpro_autoplay']) && ($_POST['tppostsliderpro_autoplay'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpro_autoplay', esc_html($_POST['tppostsliderpro_autoplay']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset( $_POST['tppostsliderpro_autoplay_speed'] ) ) {
    	if(strlen($_POST['tppostsliderpro_autoplay_speed']) > 4 ){

    	} else{

    		if($_POST['tppostsliderpro_autoplay_speed'] == '' || is_null($_POST['tppostsliderpro_autoplay_speed'])){

    			update_post_meta( $post_id, 'tppostsliderpro_autoplay_speed', 700 );
    		}
    		else{
	    		if (is_numeric($_POST['tppostsliderpr_margin']) && strlen($_POST['tppostsliderpro_autoplay_speed']) <= 4) {

	    			update_post_meta( $post_id, 'tppostsliderpro_autoplay_speed', esc_html($_POST['tppostsliderpro_autoplay_speed']) );

	    		}    

    		}
    	}
    }
	
 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpro_autohidemode']) && ($_POST['tppostsliderpro_autohidemode'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpro_autohidemode', esc_html($_POST['tppostsliderpro_autohidemode']) );
    } 
    
 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpro_center_mode']) && ($_POST['tppostsliderpro_center_mode'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpro_center_mode', esc_html($_POST['tppostsliderpro_center_mode']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_stophover']) && ($_POST['tppostsliderpr_stophover'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_stophover', esc_html($_POST['tppostsliderpr_stophover']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_itemsdesktop']) && ($_POST['tppostsliderpr_itemsdesktop'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_itemsdesktop', esc_html($_POST['tppostsliderpr_itemsdesktop']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_itemsdesktopsmall']) && ($_POST['tppostsliderpr_itemsdesktopsmall'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_itemsdesktopsmall', esc_html($_POST['tppostsliderpr_itemsdesktopsmall']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_itemsmobile']) && ($_POST['tppostsliderpr_itemsmobile'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_itemsmobile', esc_html($_POST['tppostsliderpr_itemsmobile']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpro_autoplaytimeout']) && ($_POST['tppostsliderpro_autoplaytimeout'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpro_autoplaytimeout', esc_html($_POST['tppostsliderpro_autoplaytimeout']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_navtextcolors']) && ($_POST['tppostsliderpr_navtextcolors'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_navtextcolors', esc_html($_POST['tppostsliderpr_navtextcolors']) );
    }
	
 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_navtextcolors_hover']) && ($_POST['tppostsliderpr_navtextcolors_hover'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_navtextcolors_hover', esc_html($_POST['tppostsliderpr_navtextcolors_hover']) );
    }

 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_navbgcolors']) && ($_POST['tppostsliderpr_navbgcolors'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_navbgcolors', esc_html($_POST['tppostsliderpr_navbgcolors']) );
    }
 	#Checks for input and sanitizes/saves if needed    
    if( isset($_POST['tppostsliderpr_navbghovercolors']) && ($_POST['tppostsliderpr_navbghovercolors'] != '') ) {
        update_post_meta( $post_id, 'tppostsliderpr_navbghovercolors', esc_html($_POST['tppostsliderpr_navbghovercolors']) );
    }

}
add_action( 'save_post', 'tppostsliderpr_meta_box_pro_save_func' );
# Custom metabox field end