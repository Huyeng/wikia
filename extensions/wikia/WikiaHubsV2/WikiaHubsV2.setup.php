<?php
/**
 * WikiaHubs V2
 *
 * @author Andrzej 'nAndy' Łukaszewski
 * @author Marcin Maciejewski
 * @author Sebastian Marzjan
 *
 */

$dir = dirname(__FILE__) . '/';
$app = F::app();

$wgExtensionCredits['specialpage'][] = array(
	'name'		=> 'WikiaHubs V2',
	'author'	=> 'Andrzej "nAndy" Łukaszewski,Marcin Maciejewski,Sebastian Marzjan',
	'description'	=> 'WikiaHubs V2',
	'version'	=> 1.0
);

//classes
$app->registerClass('SpecialWikiaHubsV2Controller', $dir . 'SpecialWikiaHubsV2Controller.class.php');
$app->registerClass('WikiaHubsV2Model', $dir . 'models/WikiaHubsV2Model.class.php');
$app->registerClass('WikiaHubsV2Mobile', $dir . 'hooks/WikiaHubsV2MobileHooks.php');
$app->registerClass('WikiaHubsV2Hooks', $dir . 'hooks/WikiaHubsV2Hooks.php');
$app->registerClass('WikiaHubsV2SuggestController', $dir . 'WikiaHubsV2SuggestController.class.php');
$app->registerClass('WikiaHubsV2SuggestModel', $dir . 'models/WikiaHubsV2SuggestModel.class.php');
$app->registerClass('WikiaHubsV2Article', $dir . 'models/WikiaHubsV2Article.class.php');

// pages
$app->registerSpecialPage('WikiaHubsV2', 'SpecialWikiaHubsV2Controller');

// i18n mapping
$wgExtensionMessagesFiles['WikiaHubsV2'] = $dir . 'WikiaHubsV2.i18n.php';

// hooks
$app->registerHook('WikiaMobileAssetsPackages', 'WikiaHubsV2Mobile', 'onWikiaMobileAssetsPackages');
$app->registerHook('ArticleFromTitle', 'WikiaHubsV2Hooks', 'onArticleFromTitle');