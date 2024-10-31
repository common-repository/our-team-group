<?php 
if (!defined('ABSPATH'))
  exit;

function ourtems_teams_short_code($atts){
	ob_start();

	$octem_colum = get_post_meta( $atts['id'], 'octem_colum',true ); 
	$octem_layouts = get_post_meta( $atts['id'], 'octem_layouts',true ); 

	$octem_title = get_post_meta( $atts['id'], 'octem_title',true );
	$octem_title_color = get_post_meta( $atts['id'], 'octem_title_color',true );
	$octem_title_fontsize = get_post_meta( $atts['id'], 'octem_title_fontsize',true );
	$octem_title_positions = get_post_meta( $atts['id'], 'octem_title_position',true );
	$octem_title_fontweights = get_post_meta( $atts['id'], 'octem_title_fontweight',true );

	$octem_post_title_colors = get_post_meta( $atts['id'], 'octem_post_title_color',true );
	$octem_post_title_fontsizes = get_post_meta( $atts['id'], 'octem_post_title_fontsize',true );
	$octem_post_title_positions = get_post_meta( $atts['id'], 'octem_post_title_position',true );
	$octem_post_title_fontweights = get_post_meta( $atts['id'], 'octem_post_title_fontweight',true );

	$octem_post_designation_colors = get_post_meta( $atts['id'], 'octem_post_designation_color',true );
	$octem_post_designation_fontsizes = get_post_meta( $atts['id'], 'octem_post_designation_fontsize',true );
	$octem_post_designation_positions = get_post_meta( $atts['id'], 'octem_post_designation_position',true );
	$octem_post_designation_fontweights = get_post_meta( $atts['id'], 'octem_post_designation_fontweight',true );

	$octem_post_description_colors = get_post_meta( $atts['id'], 'octem_post_description_color',true );
	$octem_post_description_fontsizes = get_post_meta( $atts['id'], 'octem_post_description_fontsize',true );
	$octem_post_description_positions = get_post_meta( $atts['id'], 'octem_post_description_position',true );
	$octem_post_description_fontweights = get_post_meta( $atts['id'], 'octem_post_description_fontweight',true );

	$octem_post_socialicon_colors = get_post_meta( $atts['id'], 'octem_post_socialicon_color',true );
	$octem_post_socialicon_widths = get_post_meta( $atts['id'], 'octem_post_socialicon_width',true );

	$octem_slider_colum = get_post_meta( $atts['id'], 'octem_slider_colum',true ); 

	$octem_slider_autoplays = get_post_meta( $atts['id'], 'octem_slider_autoplay',true );
	$octem_slider_timeout = get_post_meta( $atts['id'], 'octem_slider_timeout',true );

	$octem_slider_arrows = get_post_meta( $atts['id'], 'octem_slider_arrows',true );

	$octem_slider_mob_row = get_post_meta( $atts['id'], 'octem_slider_mob_row',true );

	$octem_template = get_post_meta( $atts['id'], 'octem_template',true );

	$octem_animation_effect = get_post_meta( $atts['id'], 'octem_animation_effect',true );

	$octem_hover_bg_color = get_post_meta( $atts['id'], 'octem_hover_bg_color',true );


	



	/*echo "<pre>";
	print_r($octem_colum);
	echo "</pre>";*/
	$octem_colum_per=100/$octem_colum;
	//echo $octem_layouts;
	?>
	<style type="text/css">
		.teammyu_<?php echo $atts['id']; ?> .teamlist > ul > li{
			    width: <?php echo $octem_colum_per; ?>%;
		}
		.teammyu_<?php echo $atts['id']; ?>  .team_title h2{
			    color:  <?php echo $octem_title_color; ?>;
			    font-size: <?php echo $octem_title_fontsize; ?>px;
			    text-align: <?php echo $octem_title_positions; ?>;
			    font-weight: <?php echo $octem_title_fontweights; ?>;
		}
		.teammyu_<?php echo $atts['id']; ?>  .team_details h2{
			    color:  <?php echo $octem_post_title_colors; ?>;
			    font-size: <?php echo $octem_post_title_fontsizes; ?>px;
			    text-align: <?php echo $octem_post_title_positions; ?>;
			    font-weight: <?php echo $octem_post_title_fontweights; ?>;
		}
		.teammyu_<?php echo $atts['id']; ?>  .team_details span{
			    color:  <?php echo $octem_post_designation_colors; ?>;
			    font-size: <?php echo $octem_post_designation_fontsizes; ?>px;
			    text-align: <?php echo $octem_post_designation_positions; ?>;
			    font-weight: <?php echo $octem_post_designation_fontweights; ?>;
			    width: 100%;
    			display: inline-block;
		}
		.teammyu_<?php echo $atts['id']; ?>  .team_details p{
			    color:  <?php echo $octem_post_description_colors; ?>;
			    font-size: <?php echo $octem_post_description_fontsizes; ?>px;
			    text-align: <?php echo $octem_post_description_positions; ?>;
			    font-weight: <?php echo $octem_post_description_fontweights; ?>;
			    width: 100%;
    			display: inline-block;
    			    padding: 10px 0;
		}
		.teammyu_<?php echo $atts['id']; ?>  .team_details .oc_team_icon svg{
			    color:  <?php echo $octem_post_socialicon_colors; ?>;
			    fill: <?php echo $octem_post_socialicon_colors; ?>;
			    width:  <?php echo $octem_post_socialicon_widths; ?>px;
			    height: 24px;
		}
		.teammyu_<?php echo $atts['id']." .".$octem_template.".".$octem_animation_effect; ?>  .team_details{
			    background-color: <?php echo $octem_hover_bg_color; ?>;
		}
	</style>
		<div class="team_data teammyu_<?php echo $atts['id']; ?>">
			<div class="team_title">
				<h2><?php echo $octem_title; ?></h2>
			</div>
			<div class="teamlist <?php echo($octem_template); ?> <?php echo($octem_animation_effect); ?>">
			<?php
				if($octem_layouts == "slider_view") {
					include ('teams_slider.php');
				}

				if($octem_layouts == "grid_view") {
					include ('grid_view.php');
				}
			 ?>
		</div>
		</div>
		<script type="text/javascript">
					jQuery(document).ready(function(){
						var octem_slider_arrows = <?php echo get_post_meta( $atts['id'], 'octem_slider_arrows',true );?>;
						jQuery('.owl-carousel').owlCarousel({
						    loop:true,
						    autoplay: <?php echo $octem_slider_autoplays ?>,
						    autoplayTimeout: <?php echo $octem_slider_timeout ?>,
						    margin:10, 
						    responsiveClass:true,
						    responsive:{
						        0:{
						            items:<?php echo $octem_slider_mob_row ?>,
						            nav:true
						        },
						        600:{
						            items:<?php echo $octem_slider_mob_row ?>,
						            nav:false
						        },
						        1000:{
						            items:<?php echo $octem_slider_colum ?>,
						            nav:true,
						            loop:false
						        }
						    }
						})
						if(octem_slider_arrows == true) {
                          jQuery('.owl-carousel').find('.owl-nav').removeClass('disabled');
                          jQuery('.owl-carousel').on('changed.owl.carousel', function(event) {
                                jQuery('.owl-carousel').find('.owl-nav').removeClass('disabled');
                          });
                       }

                       if(octem_slider_arrows == false) {
                          jQuery('.owl-carousel').find('.owl-nav').addClass('disabled');
                          jQuery('.owl-carousel').on('changed.owl.carousel', function(event) {
                                      jQuery('.owl-carousel').find('.owl-nav').addClass('disabled');
                          });
                       }
					})
				</script>
	<?php
	$xml = ob_get_clean();
    return $xml;
}
add_shortcode('teams', 'ourtems_teams_short_code'); 
?>