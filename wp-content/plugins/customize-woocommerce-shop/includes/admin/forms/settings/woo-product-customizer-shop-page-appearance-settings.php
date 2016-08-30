<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    die;
}
global  $repupress_customize_woocommerce_product_model ;
$model = $repupress_customize_woocommerce_product_model;
$html = '';

if ( isset( $_POST['repupress_customize_woocommerce_product_settings_save'] ) && !empty($_POST['repupress_customize_woocommerce_product_settings_save']) && $_POST['repupress_customize_woocommerce_product_settings_save'] == __( 'Save All Settings', 'repupresscustomwoocommerceproduct' ) ) {
    //check click of save button
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_set_unset_product_image'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_set_unset_product_image', filter_var( $_POST['repupress_customize_woocommerce_product_shop_set_unset_product_image'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_set_unset_product_image', 0 );
    }
    
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_set_default_image'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_set_default_image', filter_var( $_POST['repupress_customize_woocommerce_product_shop_set_default_image'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_set_default_image', '' );
    }
    
    // shop page title settings
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_title_font_color'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_title_font_color', filter_var( $_POST['repupress_customize_woocommerce_product_shop_title_font_color'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_title_font_color', '#000000' );
    }
    
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_title_font_size'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_title_font_size', filter_var( $_POST['repupress_customize_woocommerce_product_shop_title_font_size'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_title_font_size', '' );
    }
    
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_title_font_weight'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_title_font_weight', filter_var( $_POST['repupress_customize_woocommerce_product_shop_title_font_weight'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_title_font_weight', '' );
    }
    
    // Shop page price settings
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_price_font_color'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_price_font_color', filter_var( $_POST['repupress_customize_woocommerce_product_shop_price_font_color'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_price_font_color', '#000000' );
    }
    
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_price_font_size'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_price_font_size', filter_var( $_POST['repupress_customize_woocommerce_product_shop_price_font_size'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_price_font_size', '' );
    }
    
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_price_font_weight'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_price_font_weight', filter_var( $_POST['repupress_customize_woocommerce_product_shop_price_font_weight'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_price_font_weight', '' );
    }
    
    // Shop page price settings
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_button_bg_color'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_button_bg_color', filter_var( $_POST['repupress_customize_woocommerce_product_shop_button_bg_color'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_button_bg_color', '' );
    }
    
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_btn_font_color'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_btn_font_color', filter_var( $_POST['repupress_customize_woocommerce_product_shop_btn_font_color'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_btn_font_color', '#000000' );
    }
    
    //Shop page image settings
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_image_border_style'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_image_border_style', filter_var( $_POST['repupress_customize_woocommerce_product_shop_image_border_style'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_image_border_style', '' );
    }
    
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_image_border_width'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_image_border_width', filter_var( $_POST['repupress_customize_woocommerce_product_shop_image_border_width'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_image_border_width', '' );
    }
    
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_shop_image_border_color'] ) ) {
        update_option( 'repupress_customize_woocommerce_product_shop_image_border_color', filter_var( $_POST['repupress_customize_woocommerce_product_shop_image_border_color'], FILTER_SANITIZE_STRING ) );
    } else {
        update_option( 'repupress_customize_woocommerce_product_shop_image_border_color', '#000000' );
    }
    
    $html = '</br><div class="updated" id="message">
					<p><strong>' . __( 'Changes Saved Successfully.', 'repupresscustomwoocommerceproduct' ) . '</strong></p>
				</div>';
}

$html .= '<div class="wrap">' . screen_icon( 'options-general' );
$html .= '<h2>' . __( 'Shop Page Appearance Settings', 'repupresscustomwoocommerceproduct' ) . '</h2>';
// beginning of the plugin options form
$html .= '<form  method="post" action="" enctype="multipart/form-data">';
echo  $html ;
$html = '<!-- beginning of the settings meta box -->
				<div id="wpd-ws-settings" class="post-box-container">
				
					<div class="metabox-holder">	
				
						<div class="meta-box-sortables ui-sortable">
				
							<div id="settings" class="postbox">	
				
							
				
									<!-- settings box title -->
				
									<h3 class="hndle">
				
										<span style="vertical-align: top;">' . __( 'Shop Appearance Settings', 'repupresscustomwoocommerceproduct' ) . '</span>
				
									</h3>
				
									<div class="inside">';
$html .= '	<table class="form-table wpd-ws-settings-box"> 
											<tbody>';
$pi_check = ( get_option( 'repupress_customize_woocommerce_product_shop_set_unset_product_image' ) == 1 ? 'checked="checked"' : '' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Remove Unset Product Images :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td><input type="checkbox" value="1" ' . $pi_check . ' name="repupress_customize_woocommerce_product_shop_set_unset_product_image" >
														<span class="description">' . __( 'This will hide any images that are not set.', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
													<td>';
$html .= '</td>
												 </tr>';
$deault_image = get_option( 'repupress_customize_woocommerce_product_shop_set_default_image' );
$image = ( !empty($deault_image) ? '<img src="' . get_option( 'repupress_customize_woocommerce_product_shop_set_default_image' ) . '" width="200">' : '' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Set Default Product Image :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td>
														<input type="text" class="" id="imgfield" value="' . get_option( 'repupress_customize_woocommerce_product_shop_set_default_image' ) . '" name="repupress_customize_woocommerce_product_shop_set_default_image" style="min-width: 400px;">
														<input type="button" class="repupresscustomwoocommerceproduct-img-uploader" value="' . __( 'Upload File', 'woochk' ) . '"/>
														</br><span class="description">' . __( '', 'repupresscustomwoocommerceproduct' ) . '</span>
														</br>
														<div  id="showfield">' . $image . '</div>
													</td>
													<td>';
$html .= '</td>
												 </tr>';
$html .= '<tr ><td colspan="2"><h3>' . __( 'Shop Page Title Settings', 'repupresscustomwoocommerceproduct' ) . '</h3></td></tr>';
$ps_tfc = get_option( 'repupress_customize_woocommerce_product_shop_title_font_color' );
$ps_tfc = ( !empty($ps_tfc) ? $ps_tfc : '#000000' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Title Font Color :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td>
														<div class="color-picker" style="position: relative;">
															<input type="text" name="repupress_customize_woocommerce_product_shop_title_font_color" id="titlecolor"  value="' . $ps_tfc . '" />
															<div id="titlecolorpicker"></div>
														</div>
														
														<span class="description">' . __( 'Select font color for Shop Page Product Titless.', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
													<td>';
$html .= '</td>
												 </tr>';
$ps_fs = get_option( 'repupress_customize_woocommerce_product_shop_title_font_size' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Title Font Size :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td><select name="repupress_customize_woocommerce_product_shop_title_font_size">
															<option value="">Select Font Size</option>';
$fontsize = 8;
for ( $i = $fontsize ;  $i < 100 ;  $i++ ) {
    
    if ( $ps_fs == $i ) {
        $selected_font = 'selected=\'selected\'';
    } else {
        $selected_font = '';
    }
    
    $html .= '<option value="' . $i . '" ' . $selected_font . '>' . $i . ' px</option>';
}
$html .= '</select><br><span class="description">' . __( 'Select font size for Shop Page Product Titless.', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
													<td>';
$html .= '</td>
												 </tr>';
$ps_fw = get_option( 'repupress_customize_woocommerce_product_shop_title_font_weight' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Title Font Weight :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td><select name="repupress_customize_woocommerce_product_shop_title_font_weight">
															<option value="">Select Font Weight</option>';
$options = array(
    'normal'  => 'Normal',
    'bold'    => 'Bold',
    'bolder'  => 'Bolder',
    'lighter' => 'Lighter',
    '100'     => '100',
    '200'     => '200',
    '300'     => '300',
    '400'     => '400',
    '500'     => '500',
    '600'     => '600',
    '700'     => '700',
    '800'     => '800',
    '900'     => '900',
    'initial' => 'Initial',
    'inherit' => 'Inherit',
);
foreach ( $options as $key_opt => $key_val ) {
    
    if ( $key_opt == $ps_fw ) {
        $selected_font = 'selected=\'selected\'';
    } else {
        $selected_font = '';
    }
    
    $html .= '<option value="' . $key_opt . '" ' . $selected_font . '>' . $key_val . '</option>';
}
$html .= '</select><br><span class="description">' . __( 'Select font weight for Shop Page Product Titless.', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
													<td>';
$html .= '</td>
												 </tr>';
$html .= '<tr ><td colspan="2"><h3>' . __( 'Shop Page Price Settings', 'repupresscustomwoocommerceproduct' ) . '</h3></td></tr>';
$ps_pfc = get_option( 'repupress_customize_woocommerce_product_shop_price_font_color' );
$ps_pfc = ( !empty($ps_tfc) ? $ps_pfc : '#000000' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Price Font Color :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td>
														<div class="color-picker" style="position: relative;">
															<input type="text" name="repupress_customize_woocommerce_product_shop_price_font_color" id="pricecolor"  value="' . $ps_pfc . '" />
															<div id="pricecolorpicker"></div>
														</div>
														
														<span class="description">' . __( 'Select font color for Shop Page Product Pricess..', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
													<td>';
$html .= '</td>
												 </tr>';
$ps_pfs = get_option( 'repupress_customize_woocommerce_product_shop_price_font_size' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Price Font Size :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td><select name="repupress_customize_woocommerce_product_shop_price_font_size">
															<option value="">Select Font Size</option>';
$fontsize = 8;
for ( $i = $fontsize ;  $i < 100 ;  $i++ ) {
    
    if ( $ps_pfs == $i ) {
        $selected_font = 'selected=\'selected\'';
    } else {
        $selected_font = '';
    }
    
    $html .= '<option value="' . $i . '" ' . $selected_font . '>' . $i . ' px</option>';
}
$html .= '</select><br><span class="description">' . __( 'Select font size for Shop Page Product Pricess..', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
												 </tr>';
$ps_pfw = get_option( 'repupress_customize_woocommerce_product_shop_price_font_weight' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Price Font Weight :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td><select name="repupress_customize_woocommerce_product_shop_price_font_weight">
															<option value="">Select Font Weight</option>';
$options = array(
    'normal'  => 'Normal',
    'bold'    => 'Bold',
    'bolder'  => 'Bolder',
    'lighter' => 'Lighter',
    '100'     => '100',
    '200'     => '200',
    '300'     => '300',
    '400'     => '400',
    '500'     => '500',
    '600'     => '600',
    '700'     => '700',
    '800'     => '800',
    '900'     => '900',
    'initial' => 'Initial',
    'inherit' => 'Inherit',
);
foreach ( $options as $key_opt => $key_val ) {
    
    if ( $key_opt == $ps_pfw ) {
        $selected_font = 'selected=\'selected\'';
    } else {
        $selected_font = '';
    }
    
    $html .= '<option value="' . $key_opt . '" ' . $selected_font . '>' . $key_val . '</option>';
}
$html .= '</select><br><span class="description">' . __( 'Select font weight for Shop Page Product Pricess..', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
													<td>';
$html .= '</td>
												 </tr>
												 
												 <tr><td colspan="2"><img src="' . REPUPRESS_CUSTOMIZE_WOOCOMMERCE . 'assets/shop-btn-border.png" width="100%" height="auto"></td></tr>';
$html .= '<tr>

			
													<td colspan="2">
														<input type="submit" class="button-primary wpd-ws-settings-save" name="repupress_customize_woocommerce_product_settings_save" class="" value="' . __( 'Save All Settings', 'repupresscustomwoocommerceproduct' ) . '" />
													</td>
												</tr>';
$html .= '		</tbody>
										</table>';
$html .= '					</div><!-- .inside -->
					
							</div><!-- #settings -->
				
						</div><!-- .meta-box-sortables ui-sortable -->
				
					</div><!-- .metabox-holder -->
				
				</div><!-- #wps-settings-general -->
				
				<!-- end of the settings meta box -->';
$html .= '</form>';
$html .= '</div><!-- .wrap -->';
echo  $html ;