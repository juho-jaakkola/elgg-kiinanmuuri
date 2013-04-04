<?php

if (elgg_in_context('market')) {
	echo <<<HTML
		<div id="market-info">
			<p><b>HUOM!</b> Kirpputori on vasta kehitteillä, joten osa sen ominaisuuksista saattaa olla vielä rikki ja/tai puutteellisia.</p>
			<p>Kokeilla saa kuitenkin jo vapaasti. Palautetta voi antaa esimerkiksi <a href="https://kiinanmuuri.org/yhteiso/messages/compose?send_to=41">tästä</a>.</p>
		</div>
		<div class="clearfloat"></div>
HTML;
}

