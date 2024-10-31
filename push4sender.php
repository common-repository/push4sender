<?php
/*
Plugin Name: push4site
Plugin URI: https://push4site.com
Description: This plugin is making push message and send them for subscribers
Author: Inin Vitalii
Author URI: http://push4site.com
*/

/*  Copyright 2016  Jenyay  (email : jedyv {at} yandex.ru)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Hook for adding admin menus
add_action('admin_menu', 'pfs_add_pages');

// action function for above hook
function pfs_add_pages() {
		// Add a new top-level menu (ill-advised):
		add_menu_page('Push4site', 'Push4site', 8, __FILE__, 'pfs_toplevel_page', 'dashicons-email-alt');
}
function pfs_toplevel_page() {
// =======================================Template ==================================

if (!isset($_COOKIE['push4site']))
{   
    // echo "API_KEY не установлен!";
    	include_once "inc/intro.php";
}else{
	include_once "inc/template.php";

}
?>



<?php
} 
?>
