<?php
add_shortcode('kshort','klarna_locale_switch');
function klarna_locale_switch() {
	$current_lang = apply_filters( 'wpml_current_language', null );
	
	$array = array(
		"en" => "en-ES",
		"enuk" => "en-GB",
		"nl" => "nl-NL",
		"fr" => "fr-FR",
		"de" => "de-DE",
		"es" => "es-ES",
		"CH" => "de-CH"
		);
	
		global $product;
		$wooprice = $product->get_price() * 100;
		ob_start(); ?>
		<klarna-placement data-key="credit-promotion-badge"
		data-locale="<?php echo $array[$current_lang]; ?>" data-purchase-amount="<?php echo $wooprice; ?>"></klarna-placement>
		<?php return ob_get_clean();

}

?>
