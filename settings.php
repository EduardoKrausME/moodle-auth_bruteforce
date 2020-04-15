<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * settings file
 *
 * @package    auth_bruteforce
 * @copyright  2020 Eduardo Kraus (http://eduardokraus.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // limit handler.
    $settings->add(new admin_setting_configtext('auth_bruteforce/limit',
        get_string('auth_bruteforce_limit', 'auth_bruteforce'),
        get_string('auth_bruteforce_limit_description', 'auth_bruteforce'), 20, PARAM_INT));

    // Blocked hours
    $settings->add(new admin_setting_configtext('auth_bruteforce/hours',
        get_string('auth_bruteforce_hours', 'auth_bruteforce'),
        get_string('auth_bruteforce_hours_description', 'auth_bruteforce'), 24, PARAM_INT));
}