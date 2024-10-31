<?php
/*
Plugin Name: PJW Wordpress Version Check
Plugin URI: http://blog.ftwr.co.uk/wordpress/wp-version-check/
Description: Used to monitor for wordpress version updates and displays info in the admin screen.
Author: Peter Westwood
Version: 1.02
Author URI: http://blog.ftwr.co.uk/
*/ 

/*  Copyright 2005-8 Peter Westwood  (email : peter.westwood@ftwr.co.uk)

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
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/


/* Simple class to keep everything private */
class pjw_wp_version_check
{
	function pjw_wp_version_check() {
		/* add some actions */
		add_action('admin_notices', array(&$this,'nag'));
	}
	//Time to kill this as update messages are in the core.
	function nag() {
		echo "<div id='pjw-wp-ver-check-nag' class='updated fade'><p>PJW Wordpress Version Check is no longer supported, please see <a href='http://blog.ftwr.co.uk/archives/2009/05/26/retiring-wordpress-version-check/'>this blog post</a></p></div>";
	}
}

/* Initialise outselves lambda stylee */
add_action('plugins_loaded', create_function('','global $$pjw_wp_ver_chk; $$pjw_wp_ver_chk = new pjw_wp_version_check;'));

?>
