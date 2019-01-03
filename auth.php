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
 * bruteforce protect
 *
 * @package auth_bruteforce
 * @copyright  2019 Eduardo Kraus (http://eduardokraus.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/authlib.php');

/**
 * bruteforce authentication plugin.
 *
 * @copyright  2019 Eduardo Kraus (http://eduardokraus.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 */
class auth_plugin_bruteforce extends auth_plugin_base {

    /**
     * Constructor.
     *
     * @throws dml_exception
     * @throws coding_exception
     */
    public function __construct() {
        Global $DB, $CFG;
        $this->authtype = 'bruteforce';
        $this->config = get_config('auth/bruteforce');

        if ($CFG->version >= 2014050800) {
            $sql = "SELECT id
                    FROM {logstore_standard_log}
                    WHERE action = 'failed'
                      AND ip = '" . $_SERVER['REMOTE_ADDR'] . "'
                      AND eventname LIKE '_core_event_user_login_failed'
                      AND timecreated > (UNIX_TIMESTAMP()-86400) ";
        } else {
            $sql = "SELECT id
                    FROM {log}
                    WHERE module = 'login'
                      AND ip = '" . $_SERVER['REMOTE_ADDR'] . "'
                      AND action LIKE 'error'
                      AND time > (UNIX_TIMESTAMP()-86400) ";
        }
        $tests = $DB->get_records_sql($sql);

        if (!isset ($this->config->limit)) {
            $this->config->limit = 20;
        }

        if (count($tests) >= $this->config->limit) {
            die(get_string("auth_bruteforcebloqued", "auth_bruteforce"));
        }
    }

    /**
     * function user_login
     *
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function user_login($username, $password) {
        return false;
    }

    /**
     * function prevent_local_passwords
     *
     * @return bool
     */
    public function prevent_local_passwords() {
        return true;
    }

    /**
     * function is_internal
     *
     * @return bool
     */
    public function is_internal() {
        return false;
    }

    /**
     * function can_change_password
     *
     * @return bool
     */
    public function can_change_password() {
        return false;
    }

    /**
     * function config_form
     *
     * @param object $config
     * @param object $err
     * @param array $user_fields
     */
    public function config_form($config, $err, $user_fields) {
        include("config.php");
    }

    /**
     * function process_config
     *
     * @param $config
     *
     * @return bool
     */
    public function process_config($config) {
        // Set to defaults if undefined.
        if (!isset ($config->limit)) {
            $config->limit = 20;
        }

        // Save settings.
        set_config('limit', $config->limit, 'auth/bruteforce');

        return true;
    }

}
