<?php
/**
 * Builds the Custom CSS Builder admin content.
 *
 * @package Extender
 */
?>

<div style="display:none;" id="genesis-extender-custom-css-builder" class="genesis-extender-optionbox-outer-1col">
	<div class="genesis-extender-optionbox-inner-1col">
		<h3 style="width:804px; border-bottom:0;"><?php _e( 'Custom CSS Builder', 'extender' ); ?> <a href="http://extenderdocs.cobaltapps.com/article/97-custom-css-builder" class="tooltip-mark" target="_blank">[?]</a></h3>

		<div id="genesis-extender-custom-css-builder-wrap">
		<form name="form">
			<div id="genesis-extender-custom-css-builder-wrap-inner" class="bg-box">
				<div id="genesis-extender-custom-css-builder-nav">
					<ul>
						<li id="custom-css-builder-nav-open-close-elements" class="genesis-extender-css-builder-nav-all"><a href="#">Elements</a></li><li id="custom-css-builder-nav-backgrounds" class="genesis-extender-css-builder-nav-all"><a href="#">Backgrounds</a></li><li id="custom-css-builder-nav-borders" class="genesis-extender-css-builder-nav-all"><a href="#">Borders</a></li><li id="custom-css-builder-nav-margins-padding" class="genesis-extender-css-builder-nav-all"><a href="#">Margins & Padding</a></li><li id="custom-css-builder-nav-fonts" class="genesis-extender-css-builder-nav-all genesis-extender-options-nav-active"><a href="#">Fonts</a></li><li id="custom-css-builder-nav-dimensions-position" class="genesis-extender-css-builder-nav-all"><a href="#">Dimensions & Position</a></li><li id="custom-css-builder-nav-shadows" class="genesis-extender-css-builder-nav-all"><a class="genesis-extender-options-nav-last" href="#">Shadows</a></li>
					</ul>
				</div>
				
				<div id="custom-css-builder-nav-open-close-elements-box" class="genesis-extender-all-css-builder">
					<p style="float:left;">
						<span style="color:#444; font-size:13px; font-weight:bold; line-height:21px;"><?php _e( 'Select and Insert [&raquo;] Elements to be styled:', 'extender' ); ?><br /></span>
						<?php _e( 'Select Element Type', 'extender' ); ?><br />
						<select id="custom_css_elements" class="css-builder-elements-select" name="custom_css_elements" size="1">
						<?php genesis_extender_build_css_builder_elements_menu(); ?>
						</select><br />

						<span id="page_elements" class="css_builder_element_select">
						<?php _e( 'Page Elements', 'extender' ); ?><br />
						<select id="page_css_divs" class="css-builder-elements-select" name="page_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_page_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.page_css_divs.value+'\n\n}\n')">
						</span>

						<span id="inner_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Container Elements', 'extender' ); ?><br />
						<select id="inner_css_divs" class="css-builder-elements-select" name="inner_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_inner_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.inner_css_divs.value+'\n\n}\n')">
						</span>

						<span id="header_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Header Elements', 'extender' ); ?><br />
						<select id="header_css_divs" class="css-builder-elements-select" name="header_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_header_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.header_css_divs.value+'\n\n}\n')">
						</span>

						<span id="header_menu_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Header Menu Elements', 'extender' ); ?><br />
						<select id="header_menu_css_divs" class="css-builder-elements-select" name="header_menu_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_header_menu_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.header_menu_css_divs.value+'\n\n}\n')">
						</span>

						<span id="primary_navigation_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Primary Nav Elements', 'extender' ); ?><br />
						<select id="nav_css_divs" class="css-builder-elements-select" name="nav_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_primary_navigation_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.nav_css_divs.value+'\n\n}\n')">
						</span>

						<span id="secondary_navigation_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Secondary Nav Elements', 'extender' ); ?><br />
						<select id="subnav_css_divs" class="css-builder-elements-select" name="subnav_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_secondary_navigation_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.subnav_css_divs.value+'\n\n}\n')">
						</span>

						<span id="main_content_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Main Content Elements', 'extender' ); ?><br />
						<select id="content_css_divs" class="css-builder-elements-select" name="content_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_main_content_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.content_css_divs.value+'\n\n}\n')">
						</span>

						<span id="breadcrumbs_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Breadcrumb Elements', 'extender' ); ?><br />
						<select id="breadcrumbs_css_divs" class="css-builder-elements-select" name="breadcrumbs_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_breadcrumbs_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.breadcrumbs_css_divs.value+'\n\n}\n')">
						</span>

						<span id="taxonomy_description_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Taxonomy Description Elements', 'extender' ); ?><br />
						<select id="taxonomy_description_css_divs" class="css-builder-elements-select" name="taxonomy_description_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_taxonomy_description_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.taxonomy_description_css_divs.value+'\n\n}\n')">
						</span>

						<span id="author_description_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Author Description Elements', 'extender' ); ?><br />
						<select id="author_description_css_divs" class="css-builder-elements-select" name="author_description_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_author_description_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.author_description_css_divs.value+'\n\n}\n')">
						</span>

						<span id="author_box_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Author Box Elements', 'extender' ); ?><br />
						<select id="author_box_css_divs" class="css-builder-elements-select" name="author_box_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_author_box_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.author_box_css_divs.value+'\n\n}\n')">
						</span>

						<span id="featuredpost_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Featured Post Elements', 'extender' ); ?><br />
						<select id="featuredpost_css_divs" class="css-builder-elements-select" name="featuredpost_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_featuredpost_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.featuredpost_css_divs.value+'\n\n}\n')">
						</span>

						<span id="featuredpage_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Featured Page Elements', 'extender' ); ?><br />
						<select id="featuredpage_css_divs" class="css-builder-elements-select" name="featuredpage_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_featuredpage_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.featuredpage_css_divs.value+'\n\n}\n')">
						</span>

						<span id="sidebars_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Sidebars General Elements', 'extender' ); ?><br />
						<select id="sidebars_css_divs" class="css-builder-elements-select" name="sidebars_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_sidebars_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.sidebars_css_divs.value+'\n\n}\n')">
						</span>

						<span id="primary_sidebar_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Primary Sidebar Elements', 'extender' ); ?><br />
						<select id="primary_sidebar_css_divs" class="css-builder-elements-select" name="primary_sidebar_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_primary_sidebar_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.primary_sidebar_css_divs.value+'\n\n}\n')">
						</span>

						<span id="secondary_sidebar_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Secondary Sidebar Elements', 'extender' ); ?><br />
						<select id="secondary_sidebar_css_divs" class="css-builder-elements-select" name="secondary_sidebar_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_secondary_sidebar_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.secondary_sidebar_css_divs.value+'\n\n}\n')">
						</span>

						<span id="comments_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Comments Elements', 'extender' ); ?><br />
						<select id="comments_css_divs" class="css-builder-elements-select" name="comments_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_comments_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.comments_css_divs.value+'\n\n}\n')">
						</span>

						<span id="comments_respond_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Comments Respond Elements', 'extender' ); ?><br />
						<select id="comments_respond_css_divs" class="css-builder-elements-select" name="comments_respond_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_comments_respond_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.comments_respond_css_divs.value+'\n\n}\n')">
						</span>

						<span id="ez_home_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'EZ Home Elements', 'extender' ); ?><br />
						<select id="ez_home_css_divs" class="css-builder-elements-select" name="ez_home_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_ez_home_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.ez_home_css_divs.value+'\n\n}\n')">
						</span>

						<span id="custom_widget_areas_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Custom Widget Areas Elements', 'extender' ); ?><br />
						<select id="custom_widget_areas_css_divs" class="css-builder-elements-select" name="custom_widget_areas_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_custom_widget_areas_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.custom_widget_areas_css_divs.value+'\n\n}\n')">
						</span>

						<span id="genesis_footer_widgets_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Genesis Footer Widgets Elements', 'extender' ); ?><br />
						<select id="genesis_footer_widgets_css_divs" class="css-builder-elements-select" name="genesis_footer_widgets_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_genesis_footer_widgets_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.genesis_footer_widgets_css_divs.value+'\n\n}\n')">
						</span>

						<span id="footer_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Footer Elements', 'extender' ); ?><br />
						<select id="footer_css_divs" class="css-builder-elements-select" name="footer_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_footer_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.footer_css_divs.value+'\n\n}\n')">
						</span>

						<span id="images_alignment_elements" class="css_builder_element_select" style="display:none;">
						<?php _e( 'Images / Alignment Elements', 'extender' ); ?><br />
						<select id="images_alignment_css_divs" class="css-builder-elements-select" name="images_alignment_css_divs" size="1">
						<?php genesis_extender_build_css_builder_select_menu( genesis_extender_images_alignment_elements_array() ); ?>
						</select>
						<input class="custom-css-builder-button-elements custom-css-builder-buttons button" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.images_alignment_css_divs.value+'\n\n}\n')">
						</span>
					</p>
				</div>
				
				<div id="custom-css-builder-nav-backgrounds-box" class="genesis-extender-all-css-builder">
					<p style="float:left;">
						<select id="background_type" name="background_type" size="1" class="iewide" style="width:230px;">
							<option value="no-repeat"><?php _e( 'No-Repeat Image (Left)', 'extender' ); ?></option>
							<option value="top center no-repeat"><?php _e( 'No-Repeat Image (Center)', 'extender' ); ?></option>
							<option value="top right no-repeat"><?php _e( 'No-Repeat Image (Right)', 'extender' ); ?></option>
							<option value="fixed no-repeat"><?php _e( 'No-Repeat Image (Left Fixed)', 'extender' ); ?></option>
							<option value="top center fixed no-repeat"><?php _e( 'No-Repeat Image (Center Fixed)', 'extender' ); ?></option>
							<option value="top right fixed no-repeat"><?php _e( 'No-Repeat Image (Right Fixed)', 'extender' ); ?></option>
							<option value="top left repeat-x"><?php _e( 'Horizontal-Repeat Image (Left)', 'extender' ); ?></option>
							<option value="top center repeat-x"><?php _e( 'Horizontal-Repeat Image (Center)', 'extender' ); ?></option>
							<option value="top right repeat-x"><?php _e( 'Horizontal-Repeat Image (Right)', 'extender' ); ?></option>
							<option value="top left fixed repeat-x"><?php _e( 'Horizontal-Repeat Image (Left Fixed)', 'extender' ); ?></option>
							<option value="top center fixed repeat-x"><?php _e( 'Horizontal-Repeat Image (Center Fixed)', 'extender' ); ?></option>
							<option value="top right fixed repeat-x"><?php _e( 'Horizontal-Repeat Image (Right Fixed)', 'extender' ); ?></option>				
							<option value="top left repeat-y"><?php _e( 'Vertical-Repeat Image (Left)', 'extender' ); ?></option>
							<option value="top center repeat-y"><?php _e( 'Vertical-Repeat Image (Center)', 'extender' ); ?></option>
							<option value="top right repeat-y"><?php _e( 'Vertical-Repeat Image (Right)', 'extender' ); ?></option>
							<option value="top left fixed repeat-y"><?php _e( 'Vertical-Repeat Image (Left Fixed)', 'extender' ); ?></option>
							<option value="top center fixed repeat-y"><?php _e( 'Vertical-Repeat Image (Center Fixed)', 'extender' ); ?></option>
							<option value="top right fixed repeat-y"><?php _e( 'Vertical-Repeat Image (Right Fixed)', 'extender' ); ?></option>						
							<option value="repeat"><?php _e( 'Horizontal & Vertical-Repeat Image', 'extender' ); ?></option>
							<option value="fixed repeat"><?php _e( 'Horizontal & Vertical-Repeat Image (Fixed)', 'extender' ); ?></option>
						</select> <?php _e( 'Type', 'extender' ); ?><br />
						<input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box-230" id="background_color" name="background_color" value="" /> <?php _e( 'Color', 'extender' ); ?><br />
						<select id="background_image" name="background_image" size="1" style="width:230px; margin-bottom:10px;"><?php genesis_extender_list_images(); ?></select> <?php _e( 'Image', 'extender' ); ?><br />
						<input class="custom-css-builder-button-bgs custom-css-builder-buttons button" type="button" value="Insert Image Background CSS" onclick="insertAtCaret(this.form.text, '\tbackground: #'+this.form.background_color.value+' url(images/'+this.form.background_image.value+') '+this.form.background_type.value+';\n')"><br />
						
						<input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box-230" id="background_color2" name="background_color2" value="" style="margin-bottom:10px;" /> <?php _e( 'Color', 'extender' ); ?><br />
						<input class="custom-css-builder-button-bgs custom-css-builder-buttons button" type="button" value="Insert Color Background CSS" onclick="insertAtCaret(this.form.text, '\tbackground: #'+this.form.background_color2.value+';\n')"><br />
						
						<input class="custom-css-builder-button-bgs custom-css-builder-buttons button" type="button" value="Insert Transparent Background CSS" onclick="insertAtCaret(this.form.text, '\tbackground: transparent;\n')"><br />
						
						<?php _e( 'Gradients? Check out this', 'extender' ); ?> <a href="http://www.colorzilla.com/gradient-editor/" target="_blank"><?php _e( 'CSS Gradient Generator &raquo;', 'extender' ); ?></a>
					</p>
				</div>
				
				<div id="custom-css-builder-nav-borders-box" class="genesis-extender-all-css-builder">
					<p style="float:left;">
						<?php _e( 'Type', 'extender' ); ?>
						<select id="border_type" name="border_type" size="1" style="width:100px;">
							<option value="border"><?php _e( 'Full', 'extender' ); ?></option>
							<option value="border-top"><?php _e( 'Top', 'extender' ); ?></option>
							<option value="border-bottom"><?php _e( 'Bottom', 'extender' ); ?></option>
							<option value="border-left"><?php _e( 'Left', 'extender' ); ?></option>
							<option value="border-right"><?php _e( 'Right', 'extender' ); ?></option>
						</select>
						<?php _e( 'Thickness', 'extender' ); ?>
						<input type="text" id="border_thickness" name="border_thickness" value="0" style="width:35px;" /><code class="genesis-extender-px-unit">px</code><br />
						<?php _e( 'Style', 'extender' ); ?>
						<select id="border_style" name="border_style" size="1" style="width:100px;">
							<?php genesis_extender_list_borders(); ?>
						</select>
						<?php _e( 'Color', 'extender' ); ?>
						<input type="text" class="color {pickerFaceColor:'#FFFFFF'}" style="width:70px;" id="border_color" name="border_color" value="" /><br />
						<input class="custom-css-builder-button-bgs custom-css-builder-buttons button" type="button" value="Insert Border CSS" style="margin-top:10px !important;" onclick="insertAtCaret(this.form.text, '\t'+this.form.border_type.value+': '+this.form.border_thickness.value+'px '+this.form.border_style.value+' #'+this.form.border_color.value+';\n')"><br />
					
						<?php _e( 'Tp-Lft', 'extender' ); ?>
						<input type="text" id="border_radius_top" name="border_radius_top" value="0" style="width:30px;" />
						<?php _e( 'Tp-Rt', 'extender' ); ?>
						<input type="text" id="border_radius_right" name="border_radius_right" value="0" style="width:30px;" />
						<?php _e( 'Btm-Rt', 'extender' ); ?>
						<input type="text" id="border_radius_bottom" name="border_radius_bottom" value="0" style="width:30px;" />
						<?php _e( 'Btm-Lft', 'extender' ); ?>
						<input type="text" id="border_radius_left" name="border_radius_left" value="0" style="width:30px; margin-bottom:10px;" /><br />
						<input class="custom-css-builder-button-bgs custom-css-builder-buttons button" type="button" value="Insert Border Radius CSS (in pixels)" onclick="insertAtCaret(this.form.text, '\t-webkit-border-radius: '+this.form.border_radius_top.value+'px '+this.form.border_radius_right.value+'px '+this.form.border_radius_bottom.value+'px '+this.form.border_radius_left.value+'px;\n\tborder-radius: '+this.form.border_radius_top.value+'px '+this.form.border_radius_right.value+'px '+this.form.border_radius_bottom.value+'px '+this.form.border_radius_left.value+'px;\n')">
					</p>
				</div>
				
				<div id="custom-css-builder-nav-margins-padding-box" class="genesis-extender-all-css-builder">
					<p style="float:left;">
						<?php _e( 'Top', 'extender' ); ?>
						<input type="text" id="margin_top" name="margin_top" value="0" style="width:35px;" />
						<?php _e( 'Right', 'extender' ); ?>
						<input type="text" id="margin_right" name="margin_right" value="0" style="width:35px;" />
						<?php _e( 'Bottom', 'extender' ); ?>
						<input type="text" id="margin_bottom" name="margin_bottom" value="0" style="width:35px;" />
						<?php _e( 'Left', 'extender' ); ?>
						<input type="text" id="margin_left" name="margin_left" value="0" style="width:35px; margin-bottom:10px;" /><br />
						<input class="custom-css-builder-button-bgs custom-css-builder-buttons button" type="button" value="Insert Margin CSS" onclick="insertAtCaret(this.form.text, '\tmargin: '+this.form.margin_top.value+'px '+this.form.margin_right.value+'px '+this.form.margin_bottom.value+'px '+this.form.margin_left.value+'px;\n')"><br />

						<?php _e( 'Top', 'extender' ); ?>
						<input type="text" id="padding_top" name="padding_top" value="0" style="width:35px;" />
						<?php _e( 'Right', 'extender' ); ?>
						<input type="text" id="padding_right" name="padding_right" value="0" style="width:35px;" />
						<?php _e( 'Bottom', 'extender' ); ?>
						<input type="text" id="padding_bottom" name="padding_bottom" value="0" style="width:35px;" />
						<?php _e( 'Left', 'extender' ); ?>
						<input type="text" id="padding_left" name="padding_left" value="0" style="width:35px; margin-bottom:10px;" /><br />
						<input class="custom-css-builder-button-bgs custom-css-builder-buttons button" type="button" value="Insert Padding CSS" onclick="insertAtCaret(this.form.text, '\tpadding: '+this.form.padding_top.value+'px '+this.form.padding_right.value+'px '+this.form.padding_bottom.value+'px '+this.form.padding_left.value+'px;\n')">
					</p>
				</div>

				<div id="custom-css-builder-nav-fonts-box" class="genesis-extender-all-css-builder genesis-extender-options-display">
					<p style="float:left;">
						<input id="font-type-button" class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Font Type" onclick="insertAtCaret(this.form.text, '\tfont-family: '+this.form.font_type.value+';\n')">
						<select id="font_type" name="font_type" size="1" style="width:150px;">
							<?php genesis_extender_build_font_menu( 'font_type', true ); ?>
						</select><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Font Size" onclick="insertAtCaret(this.form.text, '\tfont-size: '+this.form.font_size.value+'px;\n')">
						<input type="text" id="font_size" name="font_size" value="12" style="width:35px;" /><code class="genesis-extender-px-unit">px</code><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Font Color" onclick="insertAtCaret(this.form.text, '\tcolor: #'+this.form.font_color.value+';\n')">
						<input type="text" class="color {pickerFaceColor:'#FFFFFF'} color-box-150" id="font_color" name="font_color" value="" /><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Font Weight" onclick="insertAtCaret(this.form.text, '\tfont-weight: '+this.form.font_weight.value+';\n')">
						<select id="font_weight" name="font_weight" size="1" class="iewide" style="width:150px;">
							<option value="normal"><?php _e( 'Normal', 'extender' ); ?></option>
							<option value="bold"><?php _e( 'Bold', 'extender' ); ?></option>
						</select><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Font Style" onclick="insertAtCaret(this.form.text, '\tfont-style: '+this.form.font_style.value+';\n')">
						<select id="font_style" name="font_style" size="1" class="iewide" style="width:150px;">
							<option value="normal"><?php _e( 'Normal', 'extender' ); ?></option>
							<option value="italic"><?php _e( 'Italic', 'extender' ); ?></option>
						</select><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Text Align" onclick="insertAtCaret(this.form.text, '\ttext-align: '+this.form.text_align.value+';\n')">
						<select id="text_align" name="text_align" size="1" class="iewide" style="width:150px;">
							<option value="left"><?php _e( 'Left', 'extender' ); ?></option>
							<option value="center"><?php _e( 'Center', 'extender' ); ?></option>
							<option value="right"><?php _e( 'Right', 'extender' ); ?></option>
							<option value="justify"><?php _e( 'Justify', 'extender' ); ?></option>
						</select><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Transform" onclick="insertAtCaret(this.form.text, '\ttext-transform: '+this.form.font_caps.value+';\n')">
						<select id="font_caps" name="font_caps" size="1" class="iewide" style="width:150px;">
							<option value="none"><?php _e( 'None', 'extender' ); ?></option>
							<option value="uppercase"><?php _e( 'Uppercase', 'extender' ); ?></option>
							<option value="lowercase"><?php _e( 'Lowercase', 'extender' ); ?></option>
							<option value="capitalize"><?php _e( 'Capitalize', 'extender' ); ?></option>
						</select><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Letter Spacing" onclick="insertAtCaret(this.form.text, '\tletter-spacing: '+this.form.letter_spacing.value+';\n')">
						<select id="letter_spacing" name="letter_spacing" size="1" class="iewide" style="width:150px;">
							<option value=".5px"><?php _e( '.5px', 'extender' ); ?></option>
							<option value="1px"><?php _e( '1px', 'extender' ); ?></option>
							<option value="1.5px"><?php _e( '1.5px', 'extender' ); ?></option>
							<option value="2px"><?php _e( '2px', 'extender' ); ?></option>
							<option value="2.5px"><?php _e( '2.5px', 'extender' ); ?></option>
							<option value="3px"><?php _e( '3px', 'extender' ); ?></option>
							<option value="3.5px"><?php _e( '3.5px', 'extender' ); ?></option>
							<option value="4px"><?php _e( '4px', 'extender' ); ?></option>
						</select><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Line Height" onclick="insertAtCaret(this.form.text, '\tline-height: '+this.form.line_height.value+';\n')">
						<select id="line_height" name="line_height" size="1" class="iewide" style="width:150px;">
							<option value="100%"><?php _e( '100%', 'extender' ); ?></option>
							<option value="110%"><?php _e( '110%', 'extender' ); ?></option>
							<option value="120%"><?php _e( '120%', 'extender' ); ?></option>
							<option value="130%"><?php _e( '130%', 'extender' ); ?></option>
							<option value="140%"><?php _e( '140%', 'extender' ); ?></option>
							<option value="150%"><?php _e( '150%', 'extender' ); ?></option>
							<option value="160%"><?php _e( '160%', 'extender' ); ?></option>
							<option value="170%"><?php _e( '170%', 'extender' ); ?></option>
							<option value="180%"><?php _e( '180%', 'extender' ); ?></option>
							<option value="190%"><?php _e( '190%', 'extender' ); ?></option>
							<option value="200%"><?php _e( '200%', 'extender' ); ?></option>
						</select><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Txt Decoration" onclick="insertAtCaret(this.form.text, '\ttext-decoration: '+this.form.text_decoration.value+';\n')">
						<select id="text_decoration" name="text_decoration" size="1" class="iewide" style="width:150px;">
							<option value="none"><?php _e( 'none', 'extender' ); ?></option>
							<option value="underline"><?php _e( 'underline', 'extender' ); ?></option>
							<option value="overline"><?php _e( 'overline', 'extender' ); ?></option>
							<option value="line-through"><?php _e( 'line-through', 'extender' ); ?></option>
							<option value="blink"><?php _e( 'blink', 'extender' ); ?></option>
							<option value="inherit"><?php _e( 'inherit', 'extender' ); ?></option>
						</select><br />
					</p>
				</div>

				<div id="custom-css-builder-nav-dimensions-position-box" class="genesis-extender-all-css-builder">
					<p style="float:left;">		
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert px Width CSS" onclick="insertAtCaret(this.form.text, '\twidth: '+this.form.width_px.value+'px;\n')">
						<input type="text" id="width_px" name="width_px" value="" style="width:40px;" /><code class="genesis-extender-px-unit">px</code><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert % Width CSS" onclick="insertAtCaret(this.form.text, '\twidth: '+this.form.width_percent.value+'%;\n')">
						<input type="text" id="width_percent" name="width_percent" value="" style="width:40px;" /><code class="genesis-extender-px-unit">%</code><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="px Max Width CSS" onclick="insertAtCaret(this.form.text, '\tmax-width: '+this.form.max_width_px.value+'px;\n')">
						<input type="text" id="max_width_px" name="max_width_px" value="" style="width:40px;" /><code class="genesis-extender-px-unit">px</code><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="% Max Width CSS" onclick="insertAtCaret(this.form.text, '\tmax-width: '+this.form.max_width_percent.value+'%;\n')">
						<input type="text" id="max_width_percent" name="max_width_percent" value="" style="width:40px;" /><code class="genesis-extender-px-unit">%</code><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Height CSS" onclick="insertAtCaret(this.form.text, '\theight: '+this.form.height.value+'px;\n')">
						<input type="text" id="height" name="height" value="" style="width:40px;" /><code class="genesis-extender-px-unit">px</code><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Float CSS" onclick="insertAtCaret(this.form.text, '\tfloat: '+this.form.float_direction.value+';\n')">
						<select id="float_direction" name="float_direction" size="1" class="iewide" style="width:110px;">
							<option value="none"><?php _e( 'None', 'extender' ); ?></option>
							<option value="left"><?php _e( 'Left', 'extender' ); ?></option>
							<option value="right"><?php _e( 'Right', 'extender' ); ?></option>
						</select><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Position" onclick="insertAtCaret(this.form.text, '\tposition: '+this.form.position.value+';\n')">
						<select id="position" name="position" size="1" class="iewide" style="width:150px;">
							<option value="absolute"><?php _e( 'absolute', 'extender' ); ?></option>
							<option value="fixed"><?php _e( 'fixed', 'extender' ); ?></option>
							<option value="relative"><?php _e( 'relative', 'extender' ); ?></option>
							<option value="static"><?php _e( 'static', 'extender' ); ?></option>
							<option value="inherit"><?php _e( 'inherit', 'extender' ); ?></option>
						</select><br />
						<input class="custom-css-builder-button custom-css-builder-buttons button" type="button" value="Insert Display" onclick="insertAtCaret(this.form.text, '\tdisplay: '+this.form.display.value+';\n')">
						<select id="display" name="display" size="1" class="iewide" style="width:150px;">
							<option value="none"><?php _e( 'none', 'extender' ); ?></option>
							<option value="block"><?php _e( 'block', 'extender' ); ?></option>
							<option value="inline"><?php _e( 'inline', 'extender' ); ?></option>
							<option value="inline-block"><?php _e( 'inline-block', 'extender' ); ?></option>
							<option value="inline-table"><?php _e( 'inline-table', 'extender' ); ?></option>
							<option value="list-item"><?php _e( 'list-item', 'extender' ); ?></option>
							<option value="run-in"><?php _e( 'run-in', 'extender' ); ?></option>
							<option value="table"><?php _e( 'table', 'extender' ); ?></option>
							<option value="table-caption"><?php _e( 'table-caption', 'extender' ); ?></option>
							<option value="table-cell"><?php _e( 'table-cell', 'extender' ); ?></option>
							<option value="table-column"><?php _e( 'table-column', 'extender' ); ?></option>
							<option value="table-column-group"><?php _e( 'table-column-group', 'extender' ); ?></option>
							<option value="table-footer-group"><?php _e( 'table-footer-group', 'extender' ); ?></option>
							<option value="table-header-group"><?php _e( 'table-header-group', 'extender' ); ?></option>
							<option value="table-row"><?php _e( 'table-row', 'extender' ); ?></option>
							<option value="table-row-group"><?php _e( 'table-row-group', 'extender' ); ?></option>
							<option value="inherit"><?php _e( 'inherit', 'extender' ); ?></option>
						</select>
					</p>
				</div>
				
				<div id="custom-css-builder-nav-shadows-box" class="genesis-extender-all-css-builder">
					<p style="float:left;">
						<?php _e( 'Lft-Rt', 'extender' ); ?>
						<input type="text" id="box_shadow_lr" name="box_shadow_lr" value="0" style="width:40px;" />
						<?php _e( 'Tp-Btm', 'extender' ); ?>
						<input type="text" id="box_shadow_tb" name="box_shadow_tb" value="0" style="width:40px;" /><br />
						<?php _e( 'Blur', 'extender' ); ?>
						<input type="text" id="box_shadow_blur" name="box_shadow_blur" value="0" style="width:30px;" />
						<?php _e( 'Spread', 'extender' ); ?>
						<input type="text" id="box_shadow_spread" name="box_shadow_spread" value="0" style="width:30px; margin-bottom:10px;" />
						<?php _e( 'Color', 'extender' ); ?>
						<input type="text" class="color {pickerFaceColor:'#FFFFFF'}" style="width:70px;" id="box_shadow_color" name="box_shadow_color" value="" style="margin-bottom:10px;"/><br />
						<input class="custom-css-builder-button-bgs custom-css-builder-buttons button" type="button" value="Insert Box Shadow CSS (in pixels)" onclick="insertAtCaret(this.form.text, '\t-webkit-box-shadow: '+this.form.box_shadow_lr.value+'px '+this.form.box_shadow_tb.value+'px '+this.form.box_shadow_blur.value+'px '+this.form.box_shadow_spread.value+'px #'+this.form.box_shadow_color.value+';\n\tbox-shadow: '+this.form.box_shadow_lr.value+'px '+this.form.box_shadow_tb.value+'px '+this.form.box_shadow_blur.value+'px '+this.form.box_shadow_spread.value+'px #'+this.form.box_shadow_color.value+';\n')"><br />
						
						<?php _e( 'Lft-Rt', 'extender' ); ?>
						<input type="text" id="text_shadow_lr" name="text_shadow_lr" value="0" style="width:40px;" />
						<?php _e( 'Tp-Btm', 'extender' ); ?>
						<input type="text" id="text_shadow_tb" name="text_shadow_tb" value="0" style="width:40px;" /><br />
						<?php _e( 'Blur', 'extender' ); ?>
						<input type="text" id="text_shadow_blur" name="text_shadow_blur" value="0" style="width:30px; margin-bottom:10px;" />
						<?php _e( 'Color', 'extender' ); ?>
						<input type="text" class="color {pickerFaceColor:'#FFFFFF'}" style="width:70px;" id="text_shadow_color" name="text_shadow_color" value="" style="margin-bottom:10px;"/><br />
						<input class="custom-css-builder-button-bgs custom-css-builder-buttons button" type="button" value="Insert Text Shadow CSS (in pixels)" onclick="insertAtCaret(this.form.text, '\ttext-shadow: '+this.form.text_shadow_lr.value+'px '+this.form.text_shadow_tb.value+'px '+this.form.text_shadow_blur.value+'px #'+this.form.text_shadow_color.value+';\n')">
					</p>
				</div>

				<div id="css-builder-output-wrap">
					<textarea wrap="off" id="css-builder-output" class="genesis-extender-tabby-textarea" name="text"></textarea>
					<input id="css-builder-output-insert-alt" class="button" type="button" value="Click To Highlight Custom CSS For Copy/Paste">
				</div>
			</div>
		</form>
		</div>
	</div>
</div>