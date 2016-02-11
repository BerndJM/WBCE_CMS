<?php
/**
 * WebsiteBaker Community Edition (WBCE)
 * Way Better Content Editing.
 * Visit http://wbce.org to learn more and to join the community.
 *
 * @copyright Ryan Djurovich (2004-2009)
 * @copyright WebsiteBaker Org. e.V. (2009-2015)
 * @copyright WBCE Project (2015-)
 * @license GNU GPL2 (or any later version)
 */

 
// Module description 
$module_description = 'A tool to configure the basic output filter of WB(CE)';
 
// Headings and text outputs
$OPF['HEADING']	= 'Valg: Filtrering av ut data';
$OPF['HOWTO']	= 'Du kan gj&oslash;re innstillinger for utdatafitreringen i valgene nedenfor.<p style="line-height:1.5em;"><strong>Tips: </strong>Mailto linker kan krypteres av en Javascript funksjon. For &aring; f&aring; benyttet denne funksjonen, m&aring; det legges til f&oslash;lgende PHP kode <code style="background:#FFA;color:#900;">&lt;?php register_frontend_modfiles(\'js\');?&gt;</code> inn i &lt;head&gt; seksjonen i index.php p&aring; design malen din. Uten denne modifikasjonen, vil kun @ karakterer i mailto linker bli erstattet.</p>';
$OPF['WARNING']	= '';

// Text and captions of form elements
$OPF['BASIC_CONF']	= 'Enkel Epost konfigurasjon';
$OPF['SYS_REL'] = 'Frontendoutput with relative Urls';
$OPF['EMAIL_FILTER']	= 'Filtrer Epost adresser i tekst';
$OPF['MAILTO_FILTER']	= 'Filtrer Epost adresser i mailto linker';
$OPF['ENABLED']	= 'P&aring;sl&aring;tt';
$OPF['DISABLED']	= 'Avsl&aring;tt';

$OPF['REPLACEMENT_CONF']= 'Endringe i Epost adresser';
$OPF['AT_REPLACEMENT']	= 'Bytt "@" med';
$OPF['DOT_REPLACEMENT']	= 'Bytt "." med';


$OPF['ALL_ON_OFF'] = 'Enable/Disable all old Outputfilter';
$OPF['DROPLETS'] = 'Droplets filter';
$OPF['WBLINK'] = 'WB-Link Filter';
$OPF['INSERT'] = 'CSS, JS, Meta Insert Filter';
$OPF['JS_MAILTO'] = 'Use Javascript on Mailtofilter';
$OPF['SHORT_URL'] = 'Use short url filter';
$OPF['CSS_TO_HEAD'] = 'Use CSS to head';
