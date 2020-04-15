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

$string['auth_bruteforcedescription'] = '<p>Sistema de Brute Force irá bloquear os usuários após um limite de tentativas.</p><p>O Moodle fornece suporte interno para verificação de login de força bruta, conforme documentado aqui: <a href="https://docs.moodle.org/dev/Security:Brute-forcing_login" target="_blank">https://docs.moodle.org/dev/Security:Brute-forcing_login</a></p><p>Mas - o recurso principal bloqueia completamente a conta de usuário afetada. Este plugin bloqueará o acesso ao endereço IP que tenta acessar seu site, independentemente do nome de usuário que está sendo passado.</p>';
$string['auth_bruteforcelimit'] = 'Limite máximo de tentativas por IP até o ambiente bloquear';
$string['auth_bruteforcelimit_key'] = 'Máximo de tentativas por IP';
$string['auth_bruteforcebloqued'] = 'Você errou muitas vezes a senha e seu IP foi bloqueado. Contate o administrador do Moodle para mars detalhes';
$string['pluginname'] = 'Brute Force Detect';

$string['privacy:metadata'] = 'O auth bruteforce não armazena nenhum dado pessoal.';

$string['auth_bruteforce_limit'] = 'Número de tentativas antes de bloquear o IP';
$string['auth_bruteforce_limit_description'] = 'Defina quantas tentativas cada IP pode ter antes de bloquear completamente este IP para novas tentativas.';

$string['auth_bruteforce_hours'] = 'Quantas horas ficará bloqueado';
$string['auth_bruteforce_hours_description'] = 'Número de horas que deverá ser considerado na contagem de tempo de bloqueio. Após este tempo poderá tentar novamente.';