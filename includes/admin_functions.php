<?php 

if (!defined('ABSPATH'))
  exit;


/*============ Start form Team Member code ================= */

function ourtems_create_team_member_posttype() {
	  $team_member = array(
	            'labels' => array(
	                'name' => __( 'Team Member' ),
	                'singular_name' => __( 'Member' )
	            ),
	            'public' => true,
	            'has_archive' => true,
	            'rewrite' => array('slug' => 'Team Member'),
	            'show_in_rest' => true,
	            'supports' => array( 'title', 'thumbnail' ),
	 
	  );
	    register_post_type( 'Team Member', $team_member);

/* =============== Start form Short Code ===============*/

	    $team_member_Shortcodes = array(
	            'labels' => array(
	                'name' => __( 'Shortcodes' ),
	                'singular_name' => __( 'Shortcodes' )
	            ),
	            'public' => true,
	            'has_archive' => true,
	            'rewrite' => array('slug' => 'Shortcodes'),
	            'show_in_rest' => true,
	            'supports' => array(),
	            'show_in_menu'  =>	'edit.php?post_type=teammember',
	 
	  );
	    register_post_type( 'team_shortcodes', $team_member_Shortcodes);

/* =============== Ends  form Short Code ===============*/


}

add_action( 'init', 'ourtems_create_team_member_posttype' );




function ourtems_team_member_meta_box_markup(){
	global $post;

	?>
		<div class="teammember_details">
			 <ul class="teammember-tabs">
	            <li class="teammember-tab-link teammember-current" data-tab="teammember-tab-general">
	                <?php echo __( 'General', 'our-team-group' ); ?>
	            </li>
	            <li class="teammember-tab-link" data-tab="teammember-tab-form">
	                <?php echo __( 'Social', 'our-team-group' ); ?>
	            </li>
	           
	        </ul>
	        <div>
		        <div id="teammember-tab-general" class="teammember-tab-content teammember-current">

		        	<div class="general_data">
		        		<table>
		        			<tr>
		        				<td><lable><?php echo __( 'Description', 'our-team-group' ); ?></lable></td>
		        			</tr>
		        			<tr>
		        				<td>
		        					<textarea name="octem_description" rows="3"><?php echo get_post_meta( $post->ID, 'octem_description',true ); ?></textarea>
		        				</td>
		        			</tr>
		        			<tr>
		        				<td><lable><?php echo __( 'Designation', 'our-team-group' ); ?></lable></td>
		        			</tr>
		        			<tr>
		        				<td>
		        					<input type="text" name="octem_designation" value="<?php echo  get_post_meta( $post->ID, 'octem_designation',true ); ?>">
		        					
		        				</td>
		        			</tr>
		        			
		        		</table>
		        	</div>

		        </div>

		        <div id="teammember-tab-form" class="teammember-tab-content">
		        	<table style="width:40%">
		          	<tr>
		          		<th> <?php echo __( 'Mobile', 'our-team-group' ); ?></th>
		          		<td><input type="number" name="octem_mo_number" value="<?php echo  get_post_meta( $post->ID, 'octem_mo_number',true ); ?>"></td>
		          	</tr>
		          	<tr>
		          		<th><?php echo __( 'Website', 'our-team-group' ); ?></th>
		          		<td><input type="text" name="octem_website" value="<?php echo  get_post_meta( $post->ID, 'octem_website',true ); ?>"></td>
		          	</tr>
		          	<tr>
		          		<th><?php echo __( 'Email', 'our-team-group' ); ?></th>
		          		<td><input type="email" name="octem_email" value="<?php echo  get_post_meta( $post->ID, 'octem_email',true ); ?>"></td>
		          	</tr>
		          	<tr>
		          		<th><?php echo __( 'Skype', 'our-team-group' ); ?></th>
		          		<td><input type="text" name="octem_skype" value="<?php echo  get_post_meta( $post->ID, 'octem_skype',true ); ?>"></td>
		          	</tr>
		          	<tr>
		          		<th><?php echo __( 'Facebook', 'our-team-group' ); ?></th>
		          		<td><input type="text" name="octem_facebook" value="<?php echo  get_post_meta( $post->ID, 'octem_facebook',true ); ?>"></td>
		          	</tr>
		          	<tr>
		          		<th><?php echo __( 'Twitter', 'our-team-group' ); ?></th>
		          		<td><input type="text" name="octem_twitter" value="<?php echo  get_post_meta( $post->ID, 'octem_twitter',true ); ?>"></td>
		          	</tr>
		          	<tr>
		          		<th><?php echo __( 'Pinterest', 'our-team-group' ); ?></th>
		          		<td><input type="text" name="octem_pinterest" value="<?php echo  get_post_meta( $post->ID, 'octem_pinterest',true ); ?>"></td>
		          	</tr>
		          	<tr>
		          		<th><?php echo __( 'Linkedin', 'our-team-group' ); ?></th>
		          		<td><input type="text" name="octem_linkedin" value="<?php echo  get_post_meta( $post->ID, 'octem_linkedin',true ); ?>"></td>
		          	</tr>
		          	
		          	<tr>
		          		<th><?php echo __( 'Instagram', 'our-team-group' ); ?></th>
		          		<td><input type="text" name="octem_instagram" value="<?php echo  get_post_meta( $post->ID, 'octem_instagram',true ); ?>"></td>
		          	</tr>
		          </table>
		        </div>


        	</div>
		</div>
	<?php
			    
}

function ourtems_team_member_meta_box(){
	add_meta_box("team_member", "Team Member", "ourtems_team_member_meta_box_markup", "teammember", "side", "high", null);
}
add_action("add_meta_boxes", "ourtems_team_member_meta_box");

add_action( 'save_post', 'ourtems_set_post_default_category2', 10,3 );

function ourtems_set_post_default_category2( $post_id, $post, $update ) {

 
/*echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
exit();
*/
update_post_meta( $post_id, 'octem_mo_number', sanitize_text_field($_REQUEST['octem_mo_number']) );
update_post_meta( $post_id, 'octem_website', sanitize_text_field($_REQUEST['octem_website']) );
update_post_meta( $post_id, 'octem_email', sanitize_text_field($_REQUEST['octem_email']) );
update_post_meta( $post_id, 'octem_skype', sanitize_text_field($_REQUEST['octem_skype']) );
update_post_meta( $post_id, 'octem_facebook', sanitize_text_field($_REQUEST['octem_facebook']) );
update_post_meta( $post_id, 'octem_twitter', sanitize_text_field($_REQUEST['octem_twitter']) );
update_post_meta( $post_id, 'octem_pinterest', sanitize_text_field($_REQUEST['octem_pinterest']) );
update_post_meta( $post_id, 'octem_linkedin', sanitize_text_field($_REQUEST['octem_linkedin']) );
update_post_meta( $post_id, 'octem_instagram', sanitize_text_field($_REQUEST['octem_instagram']) );
update_post_meta( $post_id, 'octem_description', sanitize_text_field($_REQUEST['octem_description']) );
update_post_meta( $post_id, 'octem_designation', sanitize_text_field($_REQUEST['octem_designation']) );



 
}


add_filter( 'manage_team_shortcodes_posts_columns', 'ourtems_smashing_filter_posts_columns' );
function ourtems_smashing_filter_posts_columns( $team_shortcodes_columns ) {
  	//$team_shortcodes_columns = array();
	
	$team_shortcodes_columns['shortcode']   = 'Shortcode';
	return $team_shortcodes_columns;
}

add_action( 'manage_team_shortcodes_posts_custom_column', 'smashing_realestate_column', 10, 2);
function smashing_realestate_column( $column, $post_id ) {
  // Image column
  if ( $column == 'shortcode' ) {
  	?>
    	<input type='text'  value='[teams id="<?php echo $post_id;?>"]' size='30' onclick='' readonly>
<?php
  }
}
/*============ Start form Team Member code ================= */
?>