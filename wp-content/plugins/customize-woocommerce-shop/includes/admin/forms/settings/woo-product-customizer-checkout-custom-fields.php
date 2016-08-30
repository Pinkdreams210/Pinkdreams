<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    die;
}
global  $repupress_customize_woocommerce_product_model ;
wp_enqueue_style( 'farbtastic' );
wp_enqueue_script( 'farbtastic' );
wp_enqueue_script( 'woo-product-customizer-detail', REPUPRESS_CUSTOMIZE_WOOCOMMERCE . '/includes/js/woo-product-customizer-detail.js', array( 'farbtastic', 'jquery' ) );
$model = $repupress_customize_woocommerce_product_model;
$html = '';
if ( isset( $_POST['repupress_customize_woocommerce_product_add_fields'] ) ) {
    $commerce_product_add_fields = filter_var( $_POST['repupress_customize_woocommerce_product_add_fields'], FILTER_SANITIZE_STRING );
}

if ( !empty($commerce_product_add_fields) && $commerce_product_add_fields == __( 'Add Field', 'repupresscustomwoocommerceproduct' ) ) {
    //check click of save button
    $error_msg = 0;
    if ( isset( $_POST['repupress_customize_woocommerce_product_checkout_field_label'] ) ) {
        $product_checkout_field_label = filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_label'], FILTER_SANITIZE_STRING );
    }
    
    if ( empty($product_checkout_field_label) ) {
        $error_msg = 1;
        $err_msg = __( 'Enter Label for Field.', 'repupresscustomwoocommerceproduct' );
    }
    
    
    if ( empty($product_checkout_field_label) ) {
        $error_msg = 1;
        $err_msg .= '</br>' . __( 'Enter Field Name.', 'repupresscustomwoocommerceproduct' );
    }
    
    
    if ( $error_msg == 0 ) {
        $section = filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_section'], FILTER_SANITIZE_STRING );
        $label = filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_label'], FILTER_SANITIZE_STRING );
        $field_name = filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_name'], FILTER_SANITIZE_STRING );
        $input_type = filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_input_type'], FILTER_SANITIZE_STRING );
        $place_holder = ( !empty($_POST['repupress_customize_woocommerce_product_checkout_field_place_holder']) ? filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_place_holder'], FILTER_SANITIZE_STRING ) : '' );
        $required = ( !empty($_POST['repupress_customize_woocommerce_product_checkout_field_required']) ? filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_required'], FILTER_SANITIZE_STRING ) : 0 );
        $update = array(
            'section'     => $section,
            'name'        => $field_name,
            'label'       => $label,
            'required'    => $required,
            'placeholder' => $place_holder,
            'type'        => $input_type,
        );
        $upd = get_option( 'repupress_customize_woocommerce_product_checkout_fields' );
        
        if ( !empty($upd) ) {
            array_push( $upd, $update );
        } else {
            $upd[] = $update;
        }
        
        update_option( 'repupress_customize_woocommerce_product_checkout_fields', $upd );
        $html = '</br><div class="updated" id="message">
					<p><strong>' . __( 'Custom Field Add Successfully.', 'repupresscustomwoocommerceproduct' ) . '</strong></p>
				</div>';
    } else {
        $html = '</br><div class="error" id="message">
					<p><strong>' . $err_msg . '</strong></p>
				</div>';
    }

}


if ( isset( $_POST['repupress_customize_woocommerce_product_add_fields'] ) && !empty($_POST['repupress_customize_woocommerce_product_add_fields']) && $_POST['repupress_customize_woocommerce_product_add_fields'] == __( 'Update Field', 'repupresscustomwoocommerceproduct' ) ) {
    //check click of save button
    $error_msg = 0;
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_checkout_field_label'] ) && empty($_POST['repupress_customize_woocommerce_product_checkout_field_label']) ) {
        $error_msg = 1;
        $err_msg = __( 'Enter Label for Field.', 'repupresscustomwoocommerceproduct' );
    }
    
    
    if ( isset( $_POST['repupress_customize_woocommerce_product_checkout_field_label'] ) && empty($_POST['repupress_customize_woocommerce_product_checkout_field_label']) ) {
        $error_msg = 1;
        $err_msg .= '</br>' . __( 'Enter Field Name.', 'repupresscustomwoocommerceproduct' );
    }
    
    
    if ( $error_msg == 0 ) {
        $edit_key = ( $_GET['edit_key'] == 'first' ? 0 : filter_var( $_GET['edit_key'], FILTER_SANITIZE_STRING ) );
        $section = filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_section'], FILTER_SANITIZE_STRING );
        $label = filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_label'], FILTER_SANITIZE_STRING );
        $field_name = filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_name'], FILTER_SANITIZE_STRING );
        $input_type = filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_input_type'], FILTER_SANITIZE_STRING );
        $place_holder = ( !empty($_POST['repupress_customize_woocommerce_product_checkout_field_place_holder']) ? filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_place_holder'], FILTER_SANITIZE_STRING ) : '' );
        $required = ( !empty($_POST['repupress_customize_woocommerce_product_checkout_field_required']) ? filter_var( $_POST['repupress_customize_woocommerce_product_checkout_field_required'], FILTER_SANITIZE_STRING_INT ) : 0 );
        $upd = get_option( 'repupress_customize_woocommerce_product_checkout_fields' );
        $upd[$edit_key] = array(
            'section'     => $section,
            'name'        => $field_name,
            'label'       => $label,
            'required'    => $required,
            'placeholder' => $place_holder,
            'type'        => $input_type,
        );
        update_option( 'repupress_customize_woocommerce_product_checkout_fields', $upd );
        $url = admin_url( 'admin.php?page=woo-product-customizerort&tab=checkout_page&report=custom_checkout_fields&update=1' );
        echo  '<script>window.location=\'' . $url . '\'</script>' ;
    } else {
        $html = '</br><div class="error" id="message">
					<p><strong>' . $err_msg . '</strong></p>
				</div>';
    }

}


if ( isset( $_GET['field_key'] ) && !empty($_GET['field_key']) ) {
    $upd = get_option( 'repupress_customize_woocommerce_product_checkout_fields' );
    $field_key = ( $_GET['field_key'] == 'first' ? 0 : $_GET['edit_key'] );
    unset( $upd[$field_key] );
    update_option( 'repupress_customize_woocommerce_product_checkout_fields', $upd );
    $html = '</br><div class="updated" id="message">
					<p><strong>' . __( 'Custom Field Remove Successfully.', 'repupresscustomwoocommerceproduct' ) . '</strong></p>
				</div>';
}


if ( isset( $_GET['edit_key'] ) && !empty($_GET['edit_key']) ) {
    $button_text = __( 'Update Field', 'repupresscustomwoocommerceproduct' );
    $header_text = __( 'Edit Custom Field on Checkout Page', 'repupresscustomwoocommerceproduct' );
} else {
    $button_text = __( 'Add Field', 'repupresscustomwoocommerceproduct' );
    $header_text = __( 'Add Custom Fields on Checkout Page ', 'repupresscustomwoocommerceproduct' );
}

if ( isset( $_GET['update'] ) && !empty($_GET['update']) && $_GET['update'] == 1 ) {
    $html = '</br><div class="updated" id="message">
					<p><strong>' . __( 'Custom Field Updated Successfully.', 'repupresscustomwoocommerceproduct' ) . '</strong></p>
				</div>';
}
$html .= '<div class="wrap">' . screen_icon( 'options-general' );
$html .= '<h2>' . __( $header_text, 'repupresscustomwoocommerceproduct' ) . '</h2>';
$html .= '</div><!-- .wrap -->';
echo  $html ;
$data = get_option( 'repupress_customize_woocommerce_product_checkout_fields' );
$i = 1;
if ( isset( $data ) && count( $data ) > 0 ) {
    ?>
	
	<?php echo '<br /><br /><img src="' . REPUPRESS_CUSTOMIZE_WOOCOMMERCE . 'assets/cust-field.png" width="100%" height="auto">' ?>

<?php 
}