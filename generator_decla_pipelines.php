<?php

/**
 * Pipeline pour Generator decla
 *
 * @plugin     Generator decla
 * @copyright  2016
 * @author     cyp
 * @licence    GNU/GPL
 * @package    SPIP\generator_decla\pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

/**
 * Définition des messages de compagnon par défaut en fonction
 *
 * Retourne une liste de messages d'aides en fonction du pipeline
 * demandé
 *
 * @pipeline compagnon_messages
 *
 * @param array $flux
 *     Données du pipeline
 * @return array $flux
 *     Données du pipeline
 **/
function generator_decla_compagnon_messages($flux) {

	$exec = $flux['args']['exec'];
	$pipeline = $flux['args']['pipeline'];
	$vus = $flux['args']['deja_vus'];
	$aides = &$flux['data'];

	switch ($pipeline) {
		case 'affiche_milieu':
		switch ($exec) {
			case 'accueil':
				if (!isset($vus['accueil'])) {
					$aides[] = array(
						'id' => 'accueil',
						'inclure' => 'compagnon/aide',
						'statuts' => array('1comite', '0minirezo', 'webmestre')
					);
				}
			break;
			}
		break;
	}

	return $flux;
}
