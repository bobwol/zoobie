<?php
/**
 * Zoobie Theme functions and definitions.
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package    Zoobie_Theme
 * @subpackage Functions
 * @version    0.1.0
 * @since      0.1.0
 * @author     Thiago Senna <thiago@thremes.com.br>
 * @copyright  Copyright (c) 2013, Thiago Senna
 * @link       https://github.com/trsenna/zoobie
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */


/* ---------------------------------------------------------------------------------
 * -- Load the core theme framework
 * ---------------------------------------------------------------------------------
 *
 */
require_once( trailingslashit( get_template_directory() ) . 'hybrid-core/hybrid.php' );
new Hybrid();
