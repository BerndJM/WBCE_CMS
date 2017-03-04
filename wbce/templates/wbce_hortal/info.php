<?php
$template_directory = 'wbce_hortal';
$template_name = 'Hortal (WBCE)';
$template_version = '0.8';
$template_platform = '1.x';
$template_author = 'Chio Maisriml';
$template_license = 'GNU General Public License. Photos: pexels.com';
$template_description = 'Responsive template with horizontal drop-down menu and simple suggestion search';

$block[1] = 'Main';
$block[2] = 'Sidebar';
$block[3] = 'Wide Top';
$block[4] = 'Wide Bottom';
$block[10] = 'Replace Header';
$block[99] = 'None';

$menu[1] = "horizontal";
$menu[99] = "none";

if (LANGUAGE == 'DE') {
	$block[1] ='Hauptinhalt';
	$block[2] ='Rechte Spalte';
	$block[3] ='Grosser Inhalt Oben';
	$block[4] ='Grosser Inhalt Unten';

	$block[10] ='Alternativer Kopfbereich';
	$block[99] ='keiner';

	$menu[1] ='Normal';
	$menu[2] ='Unsichtbar';
}
