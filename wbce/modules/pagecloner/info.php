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

$module_directory = 'pagecloner';
$module_name = 'Page Cloner';
$module_function = 'tool';
$module_version = '1.0.1';
$module_platform = '2.8.x';
$module_author = 'John Maats - PCWacht - Dietrich Roland Pehlke - Stephan Kuehn - vBoedefeld - WebBird';
$module_license = 'GNU General Public License';
$module_description = 'This addon allows you to clone a page or a complete tree with all page and sections. Copying of complete datasets from pagesections to their clones is limited to following modules: wywsiwyg, form, mpform, code, code2. Only the sections (with their default) settings are cloned for not supported modules.';
$module_guid = '25bfa866-2ee3-4731-8f44-f49f01c8294a';
$module_home = 'http://wbce.org';

/*
  Page Cloner Changelog
------------------------------------------------------------------------------------------------------
    v1.0.1  (05.11.2015)
         !  fix page_id column detection (thx to florian: http://forum.wbce.org/viewtopic.php?pid=2137#p2137)
         +  copy pics for minigallery (thx to florian: http://forum.wbce.org/viewtopic.php?pid=2137#p2137)

    v1.0.0  (03.11.2015)
         +  try to copy modules in a generic way 

    v0.60   (WebBird; 06.07.2015)
        +   fixed problem with mysql_real_escape_string() (deprecated)
        +   new: option to copy the page title of the cloned page
        +   new: option to set the visibility of the cloned page

    v0.59   (WebBird; 31.10.2013)
        +   fixed error cloning MPForm pages
            https://github.com/webbird/pagecloner/issues/1

	v0.58	(Dietrich Roland Pehlke; 13.03.12)
		+	Some bugfixes inside tool_doclone.php.
			Additional condition in the mysql_query to avoid endless loops.

	v0.57   (WebBird; 20.02.2012)
		+   wrapped page_title and menu_title into mysql_real_escape_string()
            http://www.websitebaker2.org/forum/index.php/topic,2167.msg158582.html#msg158582

	v0.56   (WebBird; 25.01.2012)
		+   fixed cloning of form module (table structure changed)
		
	v0.55   (WebBird; 13.01.2012)
		+   fixed Strict standards: mktime() warning
		+   fixed use of undefined var $page_id
		
    v0.54   (Stephan Kühn; 10. August 2010)
        +   mpform support
        +   migrating the pagetree idea by pcwacht support 
        
	v0.51	(Dietrich Roland Pehlke; 04. September, 2008)
		+	add new modultype "code2" to tool_doclone.php. See comments at line 179 for details.
		+	Minor cosmetic changes in tool_doclone.php
		
	v0.50 (Christian Sommer; 05 Feb, 2008)
    + added support for the upcoming WB 2.7 version (this version works also with WB < 2.7)
			(background: admin tools were moved from admin/settings to admin/admintools with WB 2.7)

	v0.40 (John Maats; 08 Jan, 2006)
		+ fixed bug (removed dutch debugging text from line 91-93 in 'tool_doclone.php)

	v0.30 (John Maats; 08 Jan, 2006)
		+ fixed bug (forgot block number copy in section db)

	v0.20 (John Maats; 08 Jan, 2006)
		+ added copy content/settings from modules code, wysiwyg and form

	v0.10 (John Maats; 07 Jan, 2006)
		+ initial release
------------------------------------------------------------------------------------------------------
*/