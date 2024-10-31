jQuery(document).ready(function() {
		jQuery('.octem_color').wpColorPicker();
		
        jQuery('ul.teammember-tabs li').click(function(){
            var tab_id = jQuery(this).attr('data-tab');
            jQuery('ul.teammember-tabs li').removeClass('teammember-current');
            jQuery('.teammember-tab-content').removeClass('teammember-current');
            jQuery(this).addClass('teammember-current');
            jQuery("#"+tab_id).addClass('teammember-current');
        });

        jQuery('ul.team-data-tabs li').click(function(){
            var tab_id = jQuery(this).attr('data-tab');
            jQuery('ul.team-data-tabs li').removeClass('team-data-current');
            jQuery('.team-data-tab-content').removeClass('team-data-current');
            jQuery(this).addClass('team-data-current');
            jQuery("#"+tab_id).addClass('team-data-current');
        });

        jQuery( ".team_layouts" ).change(function() {
		  var team_grid = jQuery(this).val();
		  /*alert(team_grid);*/
		  if (team_grid== "grid_view") {
		  	jQuery(".team_slider").hide();
		  	jQuery(".team_grid").show();
		  } else {
		  	//alert("asdsad");
		  	jQuery(".team_slider").show();
		  	jQuery(".team_grid").hide();
		  }

		});

		


});