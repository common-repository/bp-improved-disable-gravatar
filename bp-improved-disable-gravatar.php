<?php
defined('ABSPATH') or die('No script kiddies please!');

/*
Plugin Name: BuddyPress Improved: disable Gravatar
Author: baptx
Author URI: https://drawcode.eu/
Plugin URI: https://drawcode.eu/projects/buddypress-improved/
Description: Simple and lightweight plugin to disable Gravatar fallback when profile picture is missing on BuddyPress, for better privacy without third-party requests.
Version: 1.0
License: GPLv2 or later
*/

add_filter('bp_core_fetch_avatar_no_grav', '__return_true');
