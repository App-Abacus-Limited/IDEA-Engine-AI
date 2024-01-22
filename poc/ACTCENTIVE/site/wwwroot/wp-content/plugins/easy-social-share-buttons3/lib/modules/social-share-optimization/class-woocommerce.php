<?php
/**
 * @package EasySocialShareButtons\SocialShareOptimization
 * @author appscreo
 * @since 4.2
 * @version 4.0
 *
 * Generate social enchancements for WooCommerce products
 */

class ESSB_WooCommerceOpenGraph {
	
	public function __construct() {

		if (!is_admin() && class_exists( 'WooCommerce', false ) ) {
			add_filter( 'language_attributes', array( $this, 'og_product_namespace' ), 11 );
			add_filter( 'essb_opengraph_type', array( $this, 'return_type_product' ) );
			add_action( 'essb_opengraph', array( $this, 'og_enhancement' ), 50 );
				
		}
	}
	
	public function og_product_namespace( $input ) {
		if ( is_singular( 'product' ) ) {
			$input = preg_replace( '/prefix="([^"]+)"/', 'prefix="$1 product: http://ogp.me/ns/product#"', $input );
		}
	
		return $input;
	}
	
	public function return_type_product( $type ) {
		if ( is_singular( 'product' ) ) {
			return 'product';
		}
	
		return $type;
	}
	
	public function og_enhancement() {
	
		if ( ! is_singular( 'product' ) || ! function_exists( 'get_product' ) ) {
			return;
		}
	
		if (function_exists('wc_get_product')) {
			$product = wc_get_product( get_queried_object_id() );
		}
		else {
			$product = get_product( get_queried_object_id() );
		}
		if ( ! is_object( $product ) ) {
			return;
		}
	
		if ($this->version_check()) {
			$img_ids = $product->get_gallery_image_ids();
		}
		else {
			$img_ids = $product->get_gallery_attachment_ids();
		}
	
		if (!essb_option_bool_value('sso_deactivate_woogallery')) {
			if ( is_array( $img_ids ) && $img_ids !== array() ) {
				foreach ( $img_ids as $img_id ) {
					$img_url = wp_get_attachment_url( $img_id );
					$this->og_tag('og:image', esc_url($img_url) );
				}
			}
		}
	
		/**
		 * Filter: essb_woocommerce_og_price - Allow developers to prevent the output of the price in the OpenGraph tags
		 *
		 * @api bool unsigned Defaults to true.
		 */
		if ( apply_filters( 'essb_woocommerce_og_price', true ) ) {
			$product_price = $product->get_price();
			
			if ($product_price == '' && $product->is_type('variable')) {
				$product_price  =  $product->get_variation_price( 'min', true );
			}
				
			/**
			 * Additional check and validation to prevent appearance of blank price in the tags
			 */
			if ($product_price != '') {
				echo '<meta property="product:price:amount" content="' . esc_attr( $product->get_price() ) . "\"/>\n";
				echo '<meta property="product:price:currency" content="' . esc_attr( get_woocommerce_currency() ) . "\"/>\n";
			}
		}
	
		if ( $product->is_in_stock() ) {
			echo '<meta property="product:availability" content="instock"/>' . "\n";
			// Pinterest
			echo '<meta property="og:availability" content="instock"/>' . "\n";
		}
		else if ($product->is_on_backorder()) {
		    echo '<meta property="product:availability" content="available for order"/>' . "\n";
		    // Pinterest
		    echo '<meta property="og:availability" content="available for order"/>' . "\n";
		}
		else {
		    echo '<meta property="product:availability" content="out of stock"/>' . "\n";
		    // Pinterest
		    echo '<meta property="og:availability" content="out of stock"/>' . "\n";
		}
		
		$product_condition = 'new';
		echo '<meta property="product:condition" content="' . esc_attr( $product_condition ) . '" />' . "\n";
		
		if ($product->get_sku()) {
		    echo '<meta property="product:retailer_item_id" content="' . esc_attr( $product->get_sku() ) . '" />' . "\n";
		}
	}
	
	public function version_check( $version = '3.0' ) {
		if ( class_exists( 'WooCommerce' ) ) {
			global $woocommerce;
			if ( version_compare( $woocommerce->version, $version, ">=" ) ) {
				return true;
			}
		}
		return false;
	}
	
	/**
	 * Generate single open graph tag inside page content
	 *
	 * @param string $property
	 * @param string $content
	 * @return boolean
	 */
	public function og_tag( $property, $content ) {
		$og_property = str_replace( ':', '_', $property );
	
		$content = apply_filters( 'essb_og_' . $og_property, $content );
		if ( empty( $content ) ) {
			return false;
		}
	
		echo '<meta property="', esc_attr( $property ), '" content="', esc_attr( $content ), '" />', "\n";
	
		return true;
	}
}
