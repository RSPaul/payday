<?php

function carpros_get_taxonomy_categories($postid){
	
	if( current_user_can('manage_options') ){
		if( isset($_POST['post_types']) ){
			$post_types = stripslashes_deep( $_POST['post_types'] );
			$postid = sanitize_text_field( $_POST['postid'] );		
			$tppostsliderpro_postoptions = get_post_meta( $postid, 'tppostsliderpro_postoptions', true );
			
			if(!empty( $tppostsliderpro_postoptions['categories']) ){
				$categories = $tppostsliderpro_postoptions['categories'];
			}
			else{
				$categories = array();
			}
		}
		else{
			$tppostsliderpro_postoptions = get_post_meta( $postid, 'tppostsliderpro_postoptions', true );
			
			if(	!empty($tppostsliderpro_postoptions['post_types']) ){
				$post_types = $tppostsliderpro_postoptions['post_types'];
			}
			else{
				$post_types = array();
			}
			if( !empty($tppostsliderpro_postoptions['categories']) ){
				$categories = $tppostsliderpro_postoptions['categories'];
			}
			else{
				$categories = array();
			}
		}

		if(isset($_POST['postid'])){
			$postid = sanitize_text_field($_POST['postid']);
		}

		$taxonomies = get_object_taxonomies( $post_types );

		if(!empty($taxonomies)){
			echo '<select required style="min-width:162px !important"  class="timezone_string" name="tppostsliderpro_postoptions[categories][]" multiple="multiple" size="10">';

			foreach ( $taxonomies as $taxonomy ){
				$the_taxonomy = get_taxonomy( $taxonomy );
				
				$args = array(
				  'orderby' => 'name',
				  'order' => 'ASC',
				  'taxonomy' => $taxonomy,
				  'hide_empty' => false,
				  );
				
				$categories_all = get_categories( $args );
				
				if( !empty( $categories_all ) ){
					foreach( $categories_all as $category_info ){
						if(in_array($taxonomy.','.$category_info->cat_ID, $categories)){
							$selected = 'selected';
						}
						else{
							$selected = '';
						}
					?>
						<option <?php echo $selected; ?> value="<?php echo $taxonomy.','.$category_info->cat_ID; ?>" ><?php echo $category_info->cat_name; ?></option>
					<?php
					}
				}
			}
			echo '</select>';
		}
		else{
			echo 'No categories found.';
		}
	}

	if(isset($_POST['post_types'])){
		die();
	}
}
add_action('wp_ajax_carpros_get_taxonomy_categories', 'carpros_get_taxonomy_categories');