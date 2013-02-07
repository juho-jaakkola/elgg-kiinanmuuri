<?php

elgg_register_event_handler('init', 'system', 'kiinanmuuri_init');

function kiinanmuuri_init () {
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', 'elgg_site_menu_setup');

	elgg_register_plugin_hook_handler('prepare', 'menu:site', 'kiinanmuuri_site_menu_setup');

	elgg_unregister_menu_item('topbar', 'elgg_logo');

	//elgg_register_event_handler('pagesetup', 'system', 'kiinanmuuri_pagesetup');
}

/**
 * Set activity as the first item in the menu
 */
function kiinanmuuri_site_menu_setup ($hook, $type, $return, $params) {
	foreach ($return['default'] as $key => $item) {
		if ($item->getName() == 'activity') {
			$tmp = $item;
			unset($return['default'][$key]);
			array_unshift($return['default'], $item);
		}
	}
	return $return;
}