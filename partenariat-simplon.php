<?php
/*
Plugin Name: Plugin Partenariat Simplon
Plugin URI: https://github.com/FranckAchard/partenariat-simplon
Description: Extension permettant d'ajouter la notion demandée par Simplon
Version: 0.1
Author: Franck ACHARD
Author URI: https://github.com/FranckAchard
License: GPL2
*/

function PartenariatSimplon() {
	return '<p><i>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co/" target="_blank">simplon.co</a> - une entreprise de
    l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
    des formations GRATUITES pour devenir développeur web.</i></p>';
}
add_shortcode('simplon', 'PartenariatSimplon');