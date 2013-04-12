<?php
/**
 * Walled garden login
 */

$welcome = elgg_get_site_entity()->name;

$info = elgg_echo('walled_garden:info');

$menu = elgg_view_menu('walled_garden', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-general elgg-menu-hz',
));

$login_box = elgg_view('core/account/login_box', array('module' => 'walledgarden-login'));

echo <<<HTML
<div class="elgg-col elgg-col-1of2">
	<div class="elgg-inner">
		<h2 class="elgg-heading-walledgarden">
			$welcome
		</h2>
		<div class="mtm mbl">
			<p>$info</p>
		</div>
		$menu
	</div>
</div>
<div class="elgg-col elgg-col-1of2">
	<div class="elgg-inner">
		$login_box
	</div>
</div>
HTML;
