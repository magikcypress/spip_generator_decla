<?php

/**
 * Administrations pour Generator decla
 *
 * @plugin     Generator decla
 * @copyright  2016
 * @author     cyp
 * @licence    GNU/GPL
 * @package    SPIP\generator_decla\administrations
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Installation/maj des tables generator_decla
 *
 * @param string $nom_meta_base_version
 * @param string $version_cible
 */
function generator_decla_upgrade($nom_meta_base_version, $version_cible) {
	
	$maj = array();

	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}

/**
 * Desinstallation/suppression des tables generator_decla
 *
 * @param string $nom_meta_base_version
 */
function generator_decla_vider_tables($nom_meta_base_version) {

	effacer_meta($nom_meta_base_version);
}
