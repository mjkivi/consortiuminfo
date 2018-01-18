<?php

// +---------------------------------------------------------------------------+
// | Technorati (TM) Autotage Plugin 0.1.1 for Geeklog - The Ultimate Weblog   |
// +---------------------------------------------------------------------------+
// | install.php                                                               |
// |                                                                           |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2002-2006 by the following authors:                         |
// |                                                                           |
// | Author:                                                                   |
// | Constructed with the Universal Plugin                                     |
// | Copyright (C) 2002 by the following authors:                              |
// | Tom Willett                 -    twillett@users.sourceforge.net           |
// | Blaine Lang                 -    langmail@sympatico.ca                    |
// | The Universal Plugin is based on prior work by:                           |
// | Tony Bibbs                  -    tony@tonybibbs.com                       |
// | Copyright (C) 2006 mystral-kk - geeklog AT mystral-kk DOT net             |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+
//

global $_TABLES, $_TECHNORATI;

require_once('../../../lib-common.php');
require_once($_CONF['path'] . 'plugins/technorati/config.php');
require_once($_CONF['path'] . 'plugins/technorati/functions.inc');

//
// Universal plugin install variables
// Change these to match your plugin
//

$pi_name    = 'technorati';             // Plugin name  Must be 15 chars or less
$pi_version = $_TECHNORATI['version'];  // Plugin Version
$gl_version = '1.4.0';                  // GL Version plugin for
$pi_url     = 'http://mystral-kk.net/'; // Plugin Homepage

//
// Default data
// Insert table name and sql to insert default data for your plugin.
//
$DEFVALUES = array();

// Default data
$DEFVALUES['Technorati Japan'] = "INSERT INTO {$_TABLES['pingservice']} (name, ping_url, site_url, method, is_enabled) VALUES ('Technorati Japan', 'http://rpc.technorati.jp/rpc/ping', 'http://technorati.jp/', 'weblogUpdates.ping', 1)";

$DEFVALUES['Technorati'] = "INSERT INTO {$_TABLES['pingservice']} (name, ping_url, site_url, method, is_enabled) VALUES ('Technorati', 'http://rpc.technorati.com', 'http://technorati.com/', 'weblogUpdates.ping', 1)";

// Only let Root users access this page
if (!SEC_inGroup('Root')) {
    // Someone is trying to illegally access this page
    COM_errorLog("Someone has tried to illegally access the technorati install/uninstall page.  User id: {$_USER['uid']}, Username: {$_USER['username']}, IP: $REMOTE_ADDR",1);
    $display = COM_siteHeader();
    $display .= COM_startBlock($LANG_TECHNORATI['access_denied']);
    $display .= $LANG_TECHNORATI['access_denied_msg'];
    $display .= COM_endBlock();
    $display .= COM_siteFooter(true);
    echo $display;
    exit;
}
 
/**
* Puts the datastructures for this plugin into the Geeklog database
*
* Note: Corresponding uninstall routine is in functions.inc
* 
* @return   boolean True if successful False otherwise
*
*/
function plugin_install_technorati()
{
    global $pi_name, $pi_version, $gl_version, $pi_url, $DEFVALUES;
    global $_TABLES, $_CONF, $_TECHNORATI;

    COM_errorLog("Attempting to install the {$pi_name} Plugin",1);

    // Insert Default Data

    $sql = $DEFVALUES[$_TECHNORATI['server_type']];
	if (! empty($sql)) {
		$result = DB_query("SELECT COUNT(*) AS cnt FROM {$_TABLES['pingservice']} WHERE (name = \"{$_TECHNORATI['server_type']}\")");
		if ($result !== false) {
			$A = DB_fetchArray($result);
			if ($A['cnt'] == 0) {
    			COM_errorLog("Inserting default data into {$_TABLES['pingservice']} table",1);
        		DB_query($sql, 1);
        		if (DB_error()) {
            		COM_errorLog("Error inserting default data into {$_TABLES['pingservice']} table", 1);
				}
			}
		}
	}

    COM_errorLog("Success - inserting data into {$_TABLES['pingservice']} table", 1);

    // Register the plugin with Geeklog
    COM_errorLog("Registering {$pi_name} plugin with Geeklog", 1);
    DB_delete($_TABLES['plugins'],'pi_name','technorati');
    DB_query("INSERT INTO {$_TABLES['plugins']} (pi_name, pi_version, pi_gl_version, pi_homepage, pi_enabled) "
        . "VALUES ('$pi_name', '$pi_version', '$gl_version', '$pi_url', 1)");

    if (DB_error()) {
        plugin_uninstall_technorati();
        return false;
        exit;
    }

    COM_errorLog("Succesfully installed the {$pi_name} Plugin!",1);
    return true;
}

/* 
* Main Function
*/

$display = COM_siteHeader();
$T = new Template($_CONF['path'] . 'plugins/technorati/templates');
$T->set_file('install', 'install.thtml');
$T->set_var('install_header', $LANG_TECHNORATI['install_header']);
$T->set_var('cgiurl', $_CONF['site_admin_url'] . '/plugins/technorati/install.php');

$action = COM_applyFilter($_POST['action']);
if ($action == $LANG_TECHNORATI['install']) {
    if (plugin_install_technorati()) {
        $T->set_var('installmsg1',$LANG_TECHNORATI['install_success']);
    } else {
        $T->set_var('installmsg1',$LANG_TECHNORATI['install_failed']);
    }
} else if ($action == $LANG_TECHNORATI["uninstall"]) {
   plugin_uninstall_technorati('installed');
   $T->set_var('installmsg1',$LANG_TECHNORATI['uninstall_msg']);
}

if (DB_count($_TABLES['plugins'], 'pi_name', 'technorati') == 0) {
    $T->set_var('installmsg2', $LANG_TECHNORATI['uninstalled']);
	$T->set_var('btnmsg', $LANG_TECHNORATI['install']);
	$T->set_var('action',$LANG_TECHNORATI['install']);
} else {
    $T->set_var('installmsg2', $LANG_TECHNORATI['installed']);
	$T->set_var('btnmsg', $LANG_TECHNORATI['uninstall']);
	$T->set_var('action',$LANG_TECHNORATI['uninstall']);
}
$T->parse('output','install');
$display .= $T->finish($T->get_var('output'));
$display .= COM_siteFooter(true);

echo $display;

?>
