<?php
/**
 * @category        modules
 * @package         Maintainance Mode
 * @author          WBCE Project
 * @copyright       Norbert Heimsath
 * @license         WTFPL
 */

//no direct file access
if(count(get_included_files())==1) die(header("Location: ../index.php",TRUE,301));

// module description
$module_description = 'Maximale Ebenentiefe, Papierkorb, Frontend-Registrierung u.a.m. ';
$module_title = "System-Einstellungen";

// Headings and text outputs
$MOD_SET_GENERAL['HEADER'] =           'System-Einstellungen';
$MOD_SET_GENERAL['DESCRIPTION'] =      'Bitte beachten: Bei bereits produktiven Seiten sollten hier nur Änderungen vorgenommen werden, wenn dies wirklich erforderlich ist!';
