<?php

/*public function register_shortcode() {
    cptui_register_shortcode( array( $this, 'random' ) );
}
*/
add_action('woocommerce_review_order_after_submit', 'skrivut_text' );

function skrivut_text() {

    echo ' Need help?  Call us today +46 73 588 01 88';

}

add_action('woocommerce_before_checkout_form', 'under_text');

function under_text() {

    echo 'All boards comes with a 85% carbon paddle!';

}

add_action( 'wp', 'taBortStorefrontFunktioner' );

function taBortStorefrontFunktioner() {

    if (is_checkout()) {
    
        remove_all_actions('storefront_header');

        remove_all_actions('storefront_footer');


        remove_action('storefront_before_content', 'woocommerce_breadcrumbs', 10);

        add_action('woocommerce_after_checkout_form', 'woocommerce_checkout_coupon_form', 10);

        remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);



    }
}




?>