<?php

/**
 * WhereIsExtension
 *
 * A WhereIsExtension extension for MediaWiki
 * Provides a list of wikis with enabled selected extension
 *
 * @author Maciej Błaszkowski (Marooned) <marooned@wikia.com>
 * @date 2008-07-02
 * @copyright Copyright (C) 2008 Maciej Błaszkowski, Wikia, Inc.
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @package MediaWiki
 * @subpackage SpecialPage
 *
 * To activate this functionality, place this file in your extensions/
 * subdirectory, and add the following line to LocalSettings.php:
 *     require_once("$IP/extensions/wikia/WhereIsExtension/SpecialWhereIsExtension.php");
 */

$messages = array();

$messages['en'] = array(
	'whereisextension'			=> 'Where is extension',	//the name displayed on Special:SpecialPages
	'whereisextension-submit'	=> 'Search',
	'whereisextension-list'		=> 'List of wikis with matched criteria',
	'whereisextension-isset'	=> 'is set to',
	'whereisextension-filter'	=> 'Filter',
	'whereisextension-all-groups'	=> 'All groups',
	'whereisextension-name-contains'	=> 'variable name contains',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'whereisextension' => 'Waar is die uitbreiding',
	'whereisextension-submit' => 'Soek',
	'whereisextension-list' => "Lys van wiki's wat aan die kriteria voldoen",
	'whereisextension-isset' => 'is gestel na',
	'whereisextension-filter' => 'Filter',
	'whereisextension-all-groups' => 'Alle groepe',
	'whereisextension-name-contains' => 'veranderlike-naam bevat',
);

/** Breton (Brezhoneg)
 * @author Gwenn-Ael
 * @author Y-M D
 */
$messages['br'] = array(
	'whereisextension' => "Pelec'h emañ an astenn",
	'whereisextension-submit' => 'Klask',
	'whereisextension-list' => 'Roll ar wikioù a glot gant an dezverkoù',
	'whereisextension-isset' => 'zo termenet e',
	'whereisextension-filter' => 'Sil',
	'whereisextension-all-groups' => 'An holl strolladoù',
	'whereisextension-name-contains' => 'Anv an argemmenn zo ennañ',
);

/** French (Français)
 * @author IAlex
 */
$messages['fr'] = array(
	'whereisextension' => "Où se trouve l'extension",
	'whereisextension-submit' => 'Rechercher',
	'whereisextension-list' => 'Liste des wikis qui correspondent au critères',
	'whereisextension-isset' => 'est définie à',
	'whereisextension-filter' => 'Filtrer',
	'whereisextension-all-groups' => 'Tous les groupes',
	'whereisextension-name-contains' => 'le nom de la variable contient',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'whereisextension' => 'Onde está a extensión',
	'whereisextension-submit' => 'Procurar',
	'whereisextension-list' => 'Lista dos wikis que coinciden cos criterios',
	'whereisextension-isset' => 'está definido a',
	'whereisextension-filter' => 'Filtrar',
	'whereisextension-all-groups' => 'Todos os grupos',
	'whereisextension-name-contains' => 'o nome da variable contén',
);

/** Hungarian (Magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'whereisextension-submit' => 'Keresés',
	'whereisextension-filter' => 'Szűrő',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'whereisextension' => "Anté ch'a l'é l'estension",
	'whereisextension-submit' => 'Serca',
	'whereisextension-list' => 'Lista ëd wiki con criteri spetà',
	'whereisextension-isset' => "a l'é ampostà a",
	'whereisextension-filter' => 'Filtr',
	'whereisextension-all-groups' => 'Tute le partìe',
	'whereisextension-name-contains' => 'ël nòm ëd variàbil a conten',
);

/** Russian (Русский)
 * @author Lockal
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'whereisextension' => 'Где расширение',
	'whereisextension-submit' => 'Искать',
	'whereisextension-list' => 'Вывод список вики-сайтов, согласно условиям',
	'whereisextension-isset' => 'установлен как',
	'whereisextension-filter' => 'Фильтр',
	'whereisextension-all-groups' => 'Все группы',
	'whereisextension-name-contains' => 'имя переменной содержит',
);

