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
 * lang file
 *
 * @package    auth_bruteforce
 * @copyright  2020 Eduardo Kraus (http://eduardokraus.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['auth_bruteforcedescription'] = '<p>Brute Force system will block users after a retry limit.</p><p>Moodle provides built-in support for brute force login checking as documented here: <a href="https://docs.moodle.org/dev/Security:Brute-forcing_login" target="_blank">https://docs.moodle.org/dev/Security:Brute-forcing_login</a></p><p>But - the core feature completely locks the affected users account. This plugin will block access to the IP address attempting to access your site no matter what username is being passed.</p>';
$string['auth_bruteforcelimit'] = 'Maximum of attempts by IP to the environment block';
$string['auth_bruteforcelimit_key'] = 'Maximum attempts per IP';
$string['auth_bruteforcebloqued'] = 'You have made many mistakes in your password and your IP has been blocked. Contact your Moodle administrator for details';
$string['pluginname'] = 'Brute Force Detect';

$string['privacy:metadata'] = 'The auth bruteforce does not store any personal data.';

$string['auth_bruteforce_limit'] = 'Number of attempts before blocking the IP';
$string['auth_bruteforce_limit_description'] = 'Define how many attempts each IP can have before completely blocking this IP for further attempts.';

$string['auth_bruteforce_hours'] = 'How many hours will be blocked';
$string['auth_bruteforce_hours_description'] = 'Number of hours that should be taken into account when blocking time. After this time you can try again. ';
