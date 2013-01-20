<?php
/*
 * Plugin Name: Disable WordPress Updates
 * Description: Disable WordPress updates to encourage manual updates within git.
 *
 */


/* ---------------------------------------------------------------------------------
 * -- Disable WordPress Updates
 * ---------------------------------------------------------------------------------
 *
 * TODO - Test this feature when available a new WordPress update
 *
 * See:
 * - http://themehybrid.com/support/topic/how-do-i-disable-wordpress-updates
 * - http://wordpress.org/extend/plugins/disable-wordpress-core-update
 * - http://wordpress.org/extend/plugins/disable-wordpress-updates
 *
 */
//add_filter( 'pre_site_transient_update_core', '__return_null' );