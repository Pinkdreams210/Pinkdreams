<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    die;
}
global  $repupress_customize_woocommerce_product_model ;
$model = $repupress_customize_woocommerce_product_model;
$html = '';
$order_date_start = $order_date_end = '';
if ( isset( $_POST['repupress_customize_woocommerce_product_settings_save'] ) && !empty($_POST['repupress_customize_woocommerce_product_settings_save']) ) {
    $post_reupress = filter_var( $_POST['repupress_customize_woocommerce_product_settings_save'], FILTER_SANITIZE_STRING );
}

if ( isset( $post_reupress ) && $_POST['repupress_customize_woocommerce_product_settings_save'] == __( 'Save All Settings', 'repupresscustomwoocommerceproduct' ) ) {
    //check click of save button
    $cart_empty_button = ( isset( $_POST['repupress_customize_woocommerce_product_cart_empty_button'] ) ? filter_var( $_POST['repupress_customize_woocommerce_product_cart_empty_button'], FILTER_SANITIZE_STRING ) : '' );
    
    if ( !empty($cart_empty_button) ) {
        update_option( 'repupress_customize_woocommerce_product_cart_empty_button', $_POST['repupress_customize_woocommerce_product_cart_empty_button'] );
    } else {
        update_option( 'repupress_customize_woocommerce_product_cart_empty_button', 0 );
    }
    
    $cart_button_font_color = ( isset( $_POST['repupress_customize_woocommerce_product_cart_button_font_color'] ) ? filter_var( $_POST['repupress_customize_woocommerce_product_cart_button_font_color'], FILTER_SANITIZE_STRING ) : '' );
    
    if ( !empty($cart_button_font_color) ) {
        update_option( 'repupress_customize_woocommerce_product_cart_button_font_color', $cart_button_font_color );
    } else {
        update_option( 'repupress_customize_woocommerce_product_cart_button_font_color', '#000000' );
    }
    
    $cart_button_font_size = ( isset( $_POST['repupress_customize_woocommerce_product_cart_button_font_size'] ) ? filter_var( $_POST['repupress_customize_woocommerce_product_cart_button_font_size'], FILTER_SANITIZE_STRING ) : '' );
    
    if ( !empty($cart_button_font_size) ) {
        update_option( 'repupress_customize_woocommerce_product_cart_button_font_size', $cart_button_font_size );
    } else {
        update_option( 'repupress_customize_woocommerce_product_cart_button_font_size', '' );
    }
    
    $cart_button_font_weight = ( isset( $_POST['repupress_customize_woocommerce_product_cart_button_font_weight'] ) ? filter_var( $_POST['repupress_customize_woocommerce_product_cart_button_font_weight'], FILTER_SANITIZE_STRING ) : '' );
    
    if ( !empty($cart_button_font_weight) ) {
        update_option( 'repupress_customize_woocommerce_product_cart_button_font_weight', $cart_button_font_weight );
    } else {
        update_option( 'repupress_customize_woocommerce_product_cart_button_font_weight', '' );
    }
    
    $cart_button_bg_color = ( isset( $_POST['repupress_customize_woocommerce_product_cart_button_bg_color'] ) ? filter_var( $_POST['repupress_customize_woocommerce_product_cart_button_bg_color'], FILTER_SANITIZE_STRING ) : '' );
    
    if ( !empty($cart_button_bg_color) ) {
        update_option( 'repupress_customize_woocommerce_product_cart_button_bg_color', $cart_button_bg_color );
    } else {
        update_option( 'repupress_customize_woocommerce_product_cart_button_bg_color', '' );
    }
    
    $html = '</br><div class="updated" id="message">
					<p><strong>' . __( 'Changes Saved Successfully.', 'repupresscustomwoocommerceproduct' ) . '</strong></p>
				</div>';
}

$html .= '<div class="wrap">' . screen_icon( 'options-general' );
$html .= '<h2>' . __( 'Cart Page Settings', 'repupresscustomwoocommerceproduct' ) . '</h2>';
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
				
										<span style="vertical-align: top;">' . __( 'Cart Appearance Settings', 'repupresscustomwoocommerceproduct' ) . '</span>
				
									</h3>
				
									<div class="inside">';
$html .= '	<table class="form-table wpd-ws-settings-box"> 
											<tbody>';
$pi_check = ( get_option( 'repupress_customize_woocommerce_product_cart_empty_button' ) == 1 ? 'checked="checked"' : '' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Cart Empty Button :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td><input type="checkbox" value="1" ' . $pi_check . ' name="repupress_customize_woocommerce_product_cart_empty_button" >
														<span class="description">' . __( 'Add "Cart Empty" button to cart page.', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
													<td>';
$html .= '</td>
												 </tr>';
$ps_tfc = get_option( 'repupress_customize_woocommerce_product_cart_button_font_color' );
$ps_tfc = ( !empty($ps_tfc) ? $ps_tfc : '#000000' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Button Font Color :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td>
														<div class="color-picker" style="position: relative;">
															<input type="text" name="repupress_customize_woocommerce_product_cart_button_font_color" id="carttitlecolor"  value="' . $ps_tfc . '" />
															<div id="carttitlecolorpicker"></div>
														</div>
														
														<span class="description">' . __( 'Select font color for Empty Cart button.', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
													<td>';
$html .= '</td>
												 </tr>';
$ps_fs = get_option( 'repupress_customize_woocommerce_product_cart_button_font_size' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Button Font Size :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td><select name="repupress_customize_woocommerce_product_cart_button_font_size">
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
$html .= '</select><br><span class="description">' . __( 'Select font size for Empty Cart button.', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
													<td>';
$html .= '</td>
												 </tr>';
$ps_fw = get_option( 'repupress_customize_woocommerce_product_cart_button_font_weight' );
$html .= '<tr>
													<th scope="row">
														<label><strong>' . __( 'Button Font Weight :', 'repupresscustomwoocommerceproduct' ) . '</strong></label>
													</th>
													<td><select name="repupress_customize_woocommerce_product_cart_button_font_weight">
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
$html .= '</select><br><span class="description">' . __( 'Select font weight for Empty Cart button.', 'repupresscustomwoocommerceproduct' ) . '</span>
													</td>
													<td>';
$html .= '</td>
												 </tr>
												 
												 <tr><td colspan="2"><img src="' . REPUPRESS_CUSTOMIZE_WOOCOMMERCE . 'assets/cart-btn.png" width="100%" height="auto"></td></tr>';
$ps_bfc = get_option( 'repupress_customize_woocommerce_product_cart_button_bg_color' );

if ( isset( $ps_bfc ) && $ps_bfc != '' ) {
    $grad_class = 'gradient_' . $ps_bfc;
} else {
    $grad_class = '';
}

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