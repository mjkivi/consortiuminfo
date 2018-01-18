<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Bad Behavior plugin 2.0.13 for Geeklog 1.4.x                              |
// +---------------------------------------------------------------------------+
// | index.php                                                                 |
// |                                                                           |
// | Main administration page.                                                 |
// +---------------------------------------------------------------------------+
// | Bad Behavior - detects and blocks unwanted Web accesses                   |
// | Copyright (C) 2005-2007 Michael Hampton                                   |
// +---------------------------------------------------------------------------+
// | Geeklog plugin wrapper                                                    |
// | Copyright (C) 2005-2007 Dirk Haun <dirk AT haun-online DOT de>            |
// | Bad Behavior 2.0.10 wrapper upgrades                                      |
// | Copyright (c) 2007 Mark R. Evans <mark AT gllabs DOT org>                 |
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

require_once ('../../../lib-common.php');

$display = '';

if (!SEC_inGroup ('Bad Behavior2 Admin')) {
    $display .= COM_siteHeader ('menu');
    $display .= COM_startBlock ($LANG20[1], '',
                                COM_getBlockTemplate ('_msg_block', 'header'));
    $display .= '<p>' . $LANG20[6] . '</p>';
    $display .= COM_endBlock (COM_getBlockTemplate ('_msg_block', 'footer'));
    $display .= COM_siteFooter ();

    echo $display;
    exit;
}

require_once( $_CONF['path_html'] . '/bad_behavior2/bad-behavior-geeklog.php' );

/**
* List logged requests
*
* @param    int     $page   page number
* @return   string          HTML for list of entries
*
*/
function listEntries ($page = 1, $msg = '')
{
    global $_CONF, $LANG_BAD_BEHAVIOR, $LANG_BB2_RESPONSE;

    $retval = '';

    if ($page < 1) {
        $page = 1;
    }

    $start = (($page - 1) * 50);
    $entries = DB_count (WP_BB_LOG);
    if ($start > $entries) {
        $start = 1;
        $page = 1;
    }

    $retval .= COM_startBlock ($LANG_BAD_BEHAVIOR['block_title_list'], '',
                               COM_getBlockTemplate ('_admin_block', 'header'));

    if (!empty ($msg)) {
        $retval .= COM_showMessage ($msg, 'bad_behavior2');
    }

    $templates = new Template ($_CONF['path'] . 'plugins/'
                               . BAD_BEHAVIOR_PLUGIN . '/templates');
    $templates->set_file (array ('list' => 'log.thtml',
                                 'row'  => 'logitem.thtml'
                         ));
    $templates->set_var ('site_url', $_CONF['site_url']);
    $templates->set_var ('site_admin_url', $_CONF['site_admin_url']);
    $templates->set_var ('layout_url', $_CONF['layout_url']);

    $templates->set_var ('lang_ip', $LANG_BAD_BEHAVIOR['row_ip']);
    $templates->set_var ('lang_user_agent', $LANG_BAD_BEHAVIOR['row_user_agent']);
    $templates->set_var ('lang_referer', $LANG_BAD_BEHAVIOR['row_referer']);
    $templates->set_var ('lang_reason', $LANG_BAD_BEHAVIOR['row_reason']);
    $templates->set_var ('lang_response', $LANG_BAD_BEHAVIOR['row_response']);
    $templates->set_var ('lang_method', $LANG_BAD_BEHAVIOR['row_method']);
    $templates->set_var ('lang_protocol', $LANG_BAD_BEHAVIOR['row_protocol']);
    $templates->set_var ('lang_date', $LANG_BAD_BEHAVIOR['row_date']);

    $result = DB_query ("SELECT id,ip,date,request_method,request_uri,server_protocol,http_headers,user_agent,request_entity,`key` FROM " . WP_BB_LOG . " ORDER BY date DESC LIMIT $start,50");
    $num = DB_numRows ($result);

    for ($i = 0; $i < $num; $i++) {
        $A = DB_fetchArray ($result);
        $lcount = (50 * ($page - 1)) + $i + 1;

        foreach ($A as $key => $val) {
            $A[$key] = htmlspecialchars ($val);
        }

        $templates->set_var ('row_num', $lcount);
        $templates->set_var ('cssid', ($i % 2) + 1);
        $templates->set_var ('id', $A['id']);
        $templates->set_var ('ip', $A['ip']);
        $templates->set_var ('request_method', $A['request_method']);
        $templates->set_var ('http_host', $A['request_uri']);
        $templates->set_var ('server_protocol', $A['server_protocol']);
        $templates->set_var ('http_referer', $A['http_headers']);
        $templates->set_var ('reason', $LANG_BB2_RESPONSE[$A['key']]);
        $templates->set_var ('http_user_agent', $A['user_agent']);
        $templates->set_var ('http_response', $A['request_entity']);
        $templates->set_var ('date_and_time', $A['date']);

        $url = $_CONF['site_admin_url'] . '/plugins/' . BAD_BEHAVIOR_PLUGIN
             . '/index.php?mode=view&amp;id=' . $A['id'];
        if ($page > 1) {
            $url .= '&amp;page=' . $page;
        }
        $templates->set_var ('start_headers_anchortag', '<a href="' . $url
            . '" title="' . $LANG_BAD_BEHAVIOR['title_show_headers'] . '">');
        $templates->set_var ('end_headers_anchortag', '</a>');

        if (!empty ($_CONF['ip_lookup'])) {
            $iplookup = str_replace ('*', $A['ip'], $_CONF['ip_lookup']);
            $templates->set_var ('start_ip_lookup_anchortag', '<a href="'
                    . $iplookup . '" title="'
                    . $LANG_BAD_BEHAVIOR['title_lookup_ip'] . '">');
            $templates->set_var ('end_ip_lookup_anchortag', '</a>');
        } else {
            $templates->set_var ('start_ip_lookup_anchortag', '');
            $templates->set_var ('end_ip_lookup_anchortag', '');
        }

        $templates->parse ('log_row', 'row', true);
    }
    if ($entries > 50) {
        $baseurl = $_CONF['site_admin_url'] . '/plugins/' . BAD_BEHAVIOR_PLUGIN
                 . '/index.php?mode=list';
        $numpages = ceil ($entries / 50);
        $templates->set_var ('google_paging',
                COM_printPageNavigation ($baseurl, $page, $numpages));
    } else {
        $templates->set_var ('google_paging', '');
    }
    $templates->parse('output', 'list');
    $retval .= $templates->finish($templates->get_var('output'));
    $retval .= COM_endBlock (COM_getBlockTemplate ('_admin_block', 'footer'));

    return $retval;
}

/**
* View details of an entry
*
* @param    int     $id     ID of the entry to display
* @param    int     $page   page number on the list (for the back link)
* @return   string          HTML for the entry details
*
*/
function viewEntry ($id, $page = 1)
{
    global $_CONF, $LANG_BAD_BEHAVIOR,$LANG_BB2_RESPONSE;

    $retval = '';

    $retval .= COM_startBlock ($LANG_BAD_BEHAVIOR['block_title_entry'], '',
                               COM_getBlockTemplate ('_admin_block', 'header'));
    $templates = new Template ($_CONF['path'] . 'plugins/'
                               . BAD_BEHAVIOR_PLUGIN . '/templates');
    $templates->set_file (array ('entry' => 'entry.thtml'));
    $templates->set_var ('site_url', $_CONF['site_url']);
    $templates->set_var ('site_admin_url', $_CONF['site_admin_url']);
    $templates->set_var ('layout_url', $_CONF['layout_url']);
    $templates->set_var ('id', $id);

    $templates->set_var ('lang_ip', $LANG_BAD_BEHAVIOR['row_ip']);
    $templates->set_var ('lang_user_agent', $LANG_BAD_BEHAVIOR['row_user_agent']);
    $templates->set_var ('lang_referer', $LANG_BAD_BEHAVIOR['row_referer']);
    $templates->set_var ('lang_response', $LANG_BAD_BEHAVIOR['row_response']);
    $templates->set_var ('lang_method', $LANG_BAD_BEHAVIOR['row_method']);
    $templates->set_var ('lang_protocol', $LANG_BAD_BEHAVIOR['row_protocol']);
    $templates->set_var ('lang_date', $LANG_BAD_BEHAVIOR['row_date']);
    $templates->set_var ('lang_back', $LANG_BAD_BEHAVIOR['link_back']);
    $templates->set_var ('lang_denied_reason', $LANG_BAD_BEHAVIOR['denied_reason']);
    $templates->set_var ('lang_search', $LANG_BAD_BEHAVIOR['search']);

    $id = addslashes ($id);
    $result = DB_query ("SELECT ip,date,request_method,request_uri,server_protocol,http_headers,user_agent,request_entity,`key` FROM " . WP_BB_LOG . " WHERE id = '$id'");
    $A = DB_fetchArray ($result);

    foreach ($A as $key => $val) {
        $A[$key] = htmlspecialchars ($val);
    }

    $templates->set_var ('ip', $A['ip']);
    $templates->set_var ('request_method', $A['request_method']);
    $templates->set_var ('http_host', $A['request_uri']);
    $templates->set_var ('server_protocol', $A['server_protocol']);
    $templates->set_var ('http_referer', $A['http_headers']);
    $templates->set_var ('http_user_agent', $A['user_agent']);
    $templates->set_var ('http_response', $A['request_entity']);
    $templates->set_var ('date_and_time', $A['date']);
    $templates->set_var ('http_headers', $A['http_headers']);
    $templates->set_var ('denied_reason', $LANG_BB2_RESPONSE[$A['key']]);

    if (!empty ($_CONF['ip_lookup'])) {
        $iplookup = str_replace ('*', $A['ip'], $_CONF['ip_lookup']);
        $templates->set_var ('start_ip_lookup_anchortag', '<a href="'
                . $iplookup . '" title="'
                . $LANG_BAD_BEHAVIOR['title_lookup_ip'] . '">');
        $templates->set_var ('end_ip_lookup_anchortag', '</a>');
    } else {
        $templates->set_var ('start_ip_lookup_anchortag', '');
        $templates->set_var ('end_ip_lookup_anchortag', '');
    }

    $backlink = $_CONF['site_admin_url'] . '/plugins/' . BAD_BEHAVIOR_PLUGIN
                . '/index.php?mode=list';
    if ($page > 1) {
        $backlink .= '&amp;page=' . $page;
    }
    $templates->set_var ('start_backlink_anchortag', '<a href="' . $backlink
                                                      . '">');
    $templates->set_var ('end_backlink_anchortag', '</a>');

    $templates->parse('output', 'entry');
    $retval .= $templates->finish($templates->get_var('output'));
    $retval .= COM_endBlock (COM_getBlockTemplate ('_admin_block', 'footer'));

    return $retval;
}

// MAIN
$rightblocks = false;
$display .= COM_siteHeader ('menu', $LANG_BAD_BEHAVIOR['page_title']);

$mode = COM_applyFilter ($_GET['mode']);
if ($mode == 'list') {
    $page = isset($_GET['page']) ? COM_applyFilter ($_GET['page'], true) : 0;
    $display .= listEntries ($page);
} else if ($mode == 'view') {
    $id = isset($_GET['id']) ? COM_applyFilter ($_GET['id'], true) : 0;
    $page = isset($_GET['page']) ? COM_applyFilter ($_GET['page'], true) : 0;
    $display .= viewEntry ($id, $page);
} else {
    $rightblocks = true;
    $display .= COM_startBlock ($LANG_BAD_BEHAVIOR['block_title_admin'], '',
                            COM_getBlockTemplate ('_admin_block', 'header'));
    $entries = DB_count (WP_BB_LOG);
    if ($entries > 0) {
        $display .= '<p><a href="' . $_CONF['site_admin_url'] . '/plugins/' . BAD_BEHAVIOR_PLUGIN . '/index.php?mode=list">' . sprintf ($LANG_BAD_BEHAVIOR['list_entries'], $entries) . '</a></p>' . LB;
    } else {
        $display .= '<p>' . $LANG_BAD_BEHAVIOR['list_no_entries'] . '</p>' . LB;
    }
    $display .= COM_endBlock (COM_getBlockTemplate ('_admin_block', 'footer'));

    if (DB_getItem ($_TABLES['vars'], 'value',
            "name = 'bad_behavior2.donate'") == 1) {
        $display .= COM_startBlock ($LANG_BAD_BEHAVIOR['block_title_donate'], '', COM_getBlockTemplate ('_admin_block', 'header'));
        $display .= '<p>' . $LANG_BAD_BEHAVIOR['donate_msg'] . '</p>' . LB;
        $display .= COM_endBlock (COM_getBlockTemplate ('_admin_block',
                                                        'footer'));
    }
}

$display .= COM_siteFooter ($rightblocks);

echo $display;

?>