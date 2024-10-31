<?php
if (!defined('ABSPATH'))
  exit;



function ourtems_teams_shortcode(){
	global $post;
	$octem_layouts = get_post_meta( $post->ID, 'octem_layouts',true );
	$octem_title_position=get_post_meta( $post->ID, 'octem_title_position',true );
	$octem_title_fontweight=get_post_meta( $post->ID, 'octem_title_fontweight',true );
	$octem_post_title_position=get_post_meta( $post->ID, 'octem_post_title_position',true );
	$octem_post_title_fontweight=get_post_meta( $post->ID, 'octem_post_title_fontweight',true );
	$octem_post_designation_position=get_post_meta( $post->ID, 'octem_post_designation_position',true );
	$octem_post_designation_fontweight=get_post_meta( $post->ID, 'octem_post_designation_fontweight',true );
	$octem_post_description_position=get_post_meta( $post->ID, 'octem_post_description_position',true );
	$octem_post_description_fontweight=get_post_meta( $post->ID, 'octem_post_description_fontweight',true );
	$octem_slider_autoplay=get_post_meta( $post->ID, 'octem_slider_autoplay',true );
	$octem_slider_timeout=get_post_meta( $post->ID, 'octem_slider_timeout',true );
	$octem_slider_arrows=get_post_meta( $post->ID, 'octem_slider_arrows',true );
	$octem_template=get_post_meta( $post->ID, 'octem_template',true );
	$octem_animation_effect=get_post_meta( $post->ID, 'octem_animation_effect',true );

/*echo $layouts;*/
	?>
	
	<div class="teams_settings">
		<ul class="team-data-tabs">
	            <li class="team-data-tab-link team-data-current" data-tab="team-data-tab-general">
	                <?php echo __( 'General', 'our-team-group' ); ?>
	            </li>
	            <li class="team-data-tab-link" data-tab="team-data-tab-title">
	                <?php echo __( 'Title Settings', 'our-team-group' ); ?>
	            </li>
	            
	        </ul>
	        <div class="">
	        	<div id="team-data-tab-general" class="team-data-tab-content team-data-current">
	        		<table>
						<tr>
							<th>
								<label>	<?php echo __( 'Template', 'our-team-group' ); ?></label>
							</th>
							<td>
								<input class="octem_template" type="radio" name="octem_template" value="octem_template1" <?php if ($octem_template=='octem_template1') {
								    	echo "checked";
								    } ?>>
								<label><?php echo __( 'Template 1', 'our-team-group' ); ?></label>
								<input class="octem_template" type="radio" name="octem_template" value="octem_template2" <?php if ($octem_template=='octem_template2') {
								    	echo "checked";
								    } ?>>
								<label><?php echo __( 'Template 2', 'our-team-group' ); ?></label>
								<input class="octem_template" type="radio" name="octem_template" value="octem_template3" <?php if ($octem_template=='octem_template3') {
								    	echo "checked";
								    } ?>>
								<label><?php echo __( 'Template 3', 'our-team-group' ); ?></label>
								<input class="octem_template" type="radio" name="octem_template" value="octem_template4" <?php if ($octem_template=='octem_template4') {
								    	echo "checked";
								    } ?>>
								<label><?php echo __( 'Template 4', 'our-team-group' ); ?></label>
							</td>
							
						</tr>
						<tr>
							<th>
								<label><?php echo __( 'Animation Effect', 'our-team-group' ); ?></label>
							</th>
							<td>
								<select name="octem_animation_effect">
									<option value="Flip-y" <?php if ($octem_animation_effect =='Flip-y') {echo "selected";}?>><?php echo __( 'Flip-y', 'our-team-group' ); ?></option>
									<option value="ZoomIn" <?php if ($octem_animation_effect=='ZoomIn') {echo "selected";}?>><?php echo __( 'ZoomIn', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<th>
								<label><?php echo __( 'Hover Background Color', 'our-team-group' ); ?></label>
							</th>
							<td>
								<input class="octem_color" type="text" name="octem_hover_bg_color" value="<?php echo  get_post_meta( $post->ID, 'octem_hover_bg_color',true ); ?>">
							</td>
						</tr>
					</table>
	        		<table>
						<tr>
							<th>
								<label><?php echo __( 'Layouts', 'our-team-group' ); ?></label>
							</th>
							<td>
								<input class="team_layouts" type="radio" name="octem_layouts" value="grid_view" <?php if ($octem_layouts=='grid_view') {
								    	echo "checked";
								    } ?>>
								<label><?php echo __( 'Grid View', 'our-team-group' ); ?></label>
								<input class="team_layouts" type="radio" name="octem_layouts" value="slider_view" <?php if ($octem_layouts=='slider_view') {
								    	echo "checked";
								    } ?>>
								<label><?php echo __( 'Slider View', 'our-team-group' ); ?></label>
							</td>
						</tr>
					</table>
					<table  class="team_slider" <?php if ($octem_layouts=='slider_view'){ echo "style='display: inline-block;'";}?>>
						<tr>
							<th>
								<label><?php echo __( 'Slides Per Row', 'our-team-group' ); ?></label>
							</th>
							<td>
								<input type="number" name="octem_slider_colum" value="<?php echo  get_post_meta( $post->ID, 'octem_slider_colum',true ); ?>">
							</td>
						</tr>
						<tr>
							<th>
								<label><?php echo __( 'Auto Play', 'our-team-group' ); ?></label>
							</th>
							<td>
								<select name="octem_slider_autoplay">
									<option value="true" <?php if ($octem_slider_autoplay =='true') {echo "selected";}?>><?php echo __( 'Yes', 'our-team-group' ); ?></option>
									<option value="false" <?php if ($octem_slider_autoplay=='false') {echo "selected";}?>><?php echo __( 'No', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<th>
								<label><?php echo __( 'Auto Play Timeout', 'our-team-group' ); ?></label>
							</th>
							<td>
								<input type="number" name="octem_slider_timeout" value="<?php echo  get_post_meta( $post->ID, 'octem_slider_timeout',true ); ?>">
							</td>
						</tr>
						<tr>
							<th>
								<label><?php echo __( 'Navigation arrows', 'our-team-group' ); ?></label>
							</th>
							<td>
								<select name="octem_slider_arrows">
									<option value="true" <?php if ($octem_slider_arrows =='true') {echo "selected";}?>><?php echo __( 'Yes', 'our-team-group' ); ?></option>
									<option value="false" <?php if ($octem_slider_arrows=='false') {echo "selected";}?>><?php echo __( 'No', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<th>
								<label><?php echo __( 'Mobile Per Row', 'our-team-group' ); ?></label>
							</th>
							<td>
								<input type="number" name="octem_slider_mob_row" value="<?php echo  get_post_meta( $post->ID, 'octem_slider_mob_row',true ); ?>">
							</td>
						</tr>
					</table>
						<table  class="team_grid" <?php if ($octem_layouts=='grid_view'){ echo "style='display: inline-block;'";}?>>
						<tr>
							<th>
								<label><?php echo __( 'Per Row Colum', 'our-team-group' ); ?></label>
							</th>
							<td>
								<input type="number" name="octem_colum" value="<?php echo  get_post_meta( $post->ID, 'octem_colum',true ); ?>">
							</td>
						</tr>
						
					</table>
	        	</div>
	        	<div id="team-data-tab-title" class="team-data-tab-content">
	        		<h3 class="team_heading"> <?php echo __( 'Page Title Settings', 'our-team-group' ); ?></h3>
	        		<table>
	        			<tr>
							<td>
								<label><?php echo __( 'Title', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input type="text" name="octem_title" value="<?php echo  get_post_meta( $post->ID, 'octem_title',true ); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Title Color', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input class="octem_color" type="text" name="octem_title_color" value="<?php echo  get_post_meta( $post->ID, 'octem_title_color',true ); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Title Font Size', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input class="" type="number" name="octem_title_fontsize" value="<?php echo  get_post_meta( $post->ID, 'octem_title_fontsize',true ); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Title Position', 'our-team-group' ); ?></label>
							</td>
							<td>
								<select name="octem_title_position">
									<option value="Left" <?php if ($octem_title_position =='Left') {echo "selected";}?>><?php echo __( 'Left', 'our-team-group' ); ?></option>
									<option value="Center" <?php if ($octem_title_position=='Center') {echo "selected";}?>><?php echo __( 'Center', 'our-team-group' ); ?></option>
									<option value="Right" <?php if ($octem_title_position=='Right') {echo "selected";}?>><?php echo __( 'Right', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Title Font Weight', 'our-team-group' ); ?></label>
							</td>
							<td>
								<select name="octem_title_fontweight">
									<option value="Normal" <?php if ($octem_title_fontweight =='Normal') {echo "selected";}?>><?php echo __( 'Normal', 'our-team-group' ); ?></option>
									<option value="Bold" <?php if ($octem_title_fontweight=='Bold') {echo "selected";}?>><?php echo __( 'Bold', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
	        		</table>
	        		<h3 class="team_heading"> <?php echo __( 'Post Title Settings', 'our-team-group' ); ?></h3>
	        		<table>
	        			<tr>
							<td>
								<label><?php echo __( 'Title Color', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input class="octem_color" type="text" name="octem_post_title_color" value="<?php echo  get_post_meta( $post->ID, 'octem_post_title_color',true ); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Title Font Size', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input class="" type="number" name="octem_post_title_fontsize" value="<?php echo  get_post_meta( $post->ID, 'octem_post_title_fontsize',true ); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Title Position', 'our-team-group' ); ?></label>
							</td>
							<td>
								<select name="octem_post_title_position">
									<option value="Left" <?php if ($octem_post_title_position =='Left') {echo "selected";}?>><?php echo __( 'Left', 'our-team-group' ); ?></option>
									<option value="Center" <?php if ($octem_post_title_position=='Center') {echo "selected";}?>><?php echo __( 'Center', 'our-team-group' ); ?></option>
									<option value="Right" <?php if ($octem_post_title_position=='Right') {echo "selected";}?>><?php echo __( 'Right', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Title Font Weight', 'our-team-group' ); ?></label>
							</td>
							<td>
								<select name="octem_post_title_fontweight">
									<option value="Normal" <?php if ($octem_post_title_fontweight =='Normal') {echo "selected";}?>><?php echo __( 'Normal', 'our-team-group' ); ?></option>
									<option value="Bold" <?php if ($octem_post_title_fontweight=='Bold') {echo "selected";}?>><?php echo __( 'Bold', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
	        		</table>
	        		<h3 class="team_heading"><?php echo __( 'Post Designation Settings', 'our-team-group' ); ?> </h3>
	        		<table>
	        			<tr>
							<td>
								<label><?php echo __( 'Text Color', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input class="octem_color" type="text" name="octem_post_designation_color" value="<?php echo  get_post_meta( $post->ID, 'octem_post_designation_color',true ); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Text Font Size', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input class="" type="number" name="octem_post_designation_fontsize" value="<?php echo  get_post_meta( $post->ID, 'octem_post_designation_fontsize',true ); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Text Position', 'our-team-group' ); ?></label>
							</td>
							<td>
								<select name="octem_post_designation_position">
									<option value="Left" <?php if ($octem_post_designation_position =='Left') {echo "selected";}?>><?php echo __( 'Left', 'our-team-group' ); ?></option>
									<option value="Center" <?php if ($octem_post_designation_position=='Center') {echo "selected";}?>><?php echo __( 'Center', 'our-team-group' ); ?></option>
									<option value="Right" <?php if ($octem_post_designation_position=='Right') {echo "selected";}?>><?php echo __( 'Right', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Text Font Weight', 'our-team-group' ); ?></label>
							</td>
							<td>
								<select name="octem_post_designation_fontweight">
									<option value="Normal" <?php if ($octem_post_designation_fontweight =='Normal') {echo "selected";}?>><?php echo __( 'Normal', 'our-team-group' ); ?></option>
									<option value="Bold" <?php if ($octem_post_designation_fontweight=='Bold') {echo "selected";}?>><?php echo __( 'Bold', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
	        		</table>
	        		<h3 class="team_heading"><?php echo __( 'Post Description Settings', 'our-team-group' ); ?> </h3>
	        		<table>
	        			<tr>
							<td>
								<label><?php echo __( 'Text Color', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input class="octem_color" type="text" name="octem_post_description_color" value="<?php echo  get_post_meta( $post->ID, 'octem_post_description_color',true ); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Text Font Size', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input class="" type="number" name="octem_post_description_fontsize" value="<?php echo  get_post_meta( $post->ID, 'octem_post_description_fontsize',true ); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Text Position', 'our-team-group' ); ?></label>
							</td>
							<td>
								<select name="octem_post_description_position">
									<option value="Left" <?php if ($octem_post_description_position =='Left') {echo "selected";}?>><?php echo __( 'Left', 'our-team-group' ); ?></option>
									<option value="Center" <?php if ($octem_post_description_position=='Center') {echo "selected";}?>><?php echo __( 'Center', 'our-team-group' ); ?></option>
									<option value="Right" <?php if ($octem_post_description_position=='Right') {echo "selected";}?>><?php echo __( 'Right', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Text Font Weight', 'our-team-group' ); ?></label>
							</td>
							<td>
								<select name="octem_post_description_fontweight">
									<option value="Normal" <?php if ($octem_post_description_fontweight =='Normal') {echo "selected";}?>><?php echo __( 'Normal', 'our-team-group' ); ?></option>
									<option value="Bold" <?php if ($octem_post_description_fontweight=='Bold') {echo "selected";}?>><?php echo __( 'Bold', 'our-team-group' ); ?></option>
								</select>
							</td>
						</tr>
	        		</table>
	        		<h3 class="team_heading"><?php echo __( 'Post Social Settings', 'our-team-group' ); ?> </h3>
	        		<table>
	        			<tr>
							<td>
								<label><?php echo __( 'Icon Color', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input class="octem_color" type="text" name="octem_post_socialicon_color" value="<?php echo  get_post_meta( $post->ID, 'octem_post_socialicon_color',true ); ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label><?php echo __( 'Icon Width', 'our-team-group' ); ?></label>
							</td>
							<td>
								<input class="" type="number" name="octem_post_socialicon_width" value="<?php echo  get_post_meta( $post->ID, 'octem_post_socialicon_width',true ); ?>">
							</td>
						</tr>
						
	        		</table>
	        	</div>
	        </div>
		
	</div>
		
	<?php
			    
}

function ourtems_teams_shortcode_meta_box(){
	add_meta_box("teams_shortcode", "Team Settings", "ourtems_teams_shortcode", "team_shortcodes", "advanced", "high", null);
}
add_action("add_meta_boxes", "ourtems_teams_shortcode_meta_box");

add_action( 'save_post', 'ourtems_set_post_default_category3', 10,3 );

function ourtems_set_post_default_category3( $post_id, $post, $update ) {


	update_post_meta( $post_id, 'octem_layouts', sanitize_text_field($_REQUEST['octem_layouts']) );
	update_post_meta( $post_id, 'octem_colum', sanitize_text_field($_REQUEST['octem_colum']) );
	update_post_meta( $post_id, 'octem_title', sanitize_text_field($_REQUEST['octem_title']) );
	update_post_meta( $post_id, 'octem_title_color', sanitize_text_field($_REQUEST['octem_title_color']) );
	update_post_meta( $post_id, 'octem_title_fontsize', sanitize_text_field($_REQUEST['octem_title_fontsize']) );
	update_post_meta( $post_id, 'octem_title_position', sanitize_text_field($_REQUEST['octem_title_position']) );
	update_post_meta( $post_id, 'octem_title_fontweight', sanitize_text_field($_REQUEST['octem_title_fontweight']) );
	update_post_meta( $post_id, 'octem_post_title_color', sanitize_text_field($_REQUEST['octem_post_title_color']) );
	update_post_meta( $post_id, 'octem_post_title_fontsize', sanitize_text_field($_REQUEST['octem_post_title_fontsize']) );
	update_post_meta( $post_id, 'octem_post_title_position', sanitize_text_field($_REQUEST['octem_post_title_position']) );
	update_post_meta( $post_id, 'octem_post_title_fontweight', sanitize_text_field($_REQUEST['octem_post_title_fontweight']) );
	update_post_meta( $post_id, 'octem_post_designation_color', sanitize_text_field($_REQUEST['octem_post_designation_color']) );
	update_post_meta( $post_id, 'octem_post_designation_fontsize', sanitize_text_field($_REQUEST['octem_post_designation_fontsize']) );
	update_post_meta( $post_id, 'octem_post_designation_position', sanitize_text_field($_REQUEST['octem_post_designation_position']) );
	update_post_meta( $post_id, 'octem_post_designation_fontweight', sanitize_text_field($_REQUEST['octem_post_designation_fontweight']) );
	update_post_meta( $post_id, 'octem_post_description_color', sanitize_text_field($_REQUEST['octem_post_description_color']) );
	update_post_meta( $post_id, 'octem_post_description_fontsize', sanitize_text_field($_REQUEST['octem_post_description_fontsize']) );
	update_post_meta( $post_id, 'octem_post_description_position', sanitize_text_field($_REQUEST['octem_post_description_position']) );
	update_post_meta( $post_id, 'octem_post_description_fontweight', sanitize_text_field($_REQUEST['octem_post_description_fontweight']) );
	update_post_meta( $post_id, 'octem_post_socialicon_color', sanitize_text_field($_REQUEST['octem_post_socialicon_color']) );
	update_post_meta( $post_id, 'octem_post_socialicon_width', sanitize_text_field($_REQUEST['octem_post_socialicon_width']) );
	update_post_meta( $post_id, 'octem_slider_colum', sanitize_text_field($_REQUEST['octem_slider_colum']) );
	update_post_meta( $post_id, 'octem_slider_autoplay', sanitize_text_field($_REQUEST['octem_slider_autoplay']) );
	update_post_meta( $post_id, 'octem_slider_timeout', sanitize_text_field($_REQUEST['octem_slider_timeout']) );
	update_post_meta( $post_id, 'octem_slider_arrows', sanitize_text_field($_REQUEST['octem_slider_arrows']) );
	update_post_meta( $post_id, 'octem_slider_mob_row', sanitize_text_field($_REQUEST['octem_slider_mob_row']) );
	update_post_meta( $post_id, 'octem_template', sanitize_text_field($_REQUEST['octem_template']) );
	update_post_meta( $post_id, 'octem_animation_effect', sanitize_text_field($_REQUEST['octem_animation_effect']) );
	update_post_meta( $post_id, 'octem_hover_bg_color', sanitize_text_field($_REQUEST['octem_hover_bg_color']) );
 
}
