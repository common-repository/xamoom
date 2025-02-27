<?php
/*
xamoom Wordpress Plugin
Copyright (C) 2015  xamoom GmbH

This file is part of xamoom-wordpress.

xamoom-wordpress is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

xamoom-wordpress is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with xamoom-wordpress.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * Fired during plugin activation
 *
 * @package    xamoom
 * @subpackage xamoom/includes
 * @author     xamoom GmbH
 */
class xamoom_Activator {

	/**
	 * Sets transient flag 'xamoom-plugin-activated' so we know if we can show admin notice
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
			set_transient( 'xamoom-plugin-activated', true, 5 );
	 }

}
