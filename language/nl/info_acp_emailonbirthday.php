<?php
/**
*
* @package E-mail on birthday
* @copyright (c) 2015 ForumHulp.com
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'E_MAIL_ON_BIRTHDAY'				=> 'E-mail op je verjaardag',
	'E_MAIL_ON_BIRTHDAY_EXPLAIN'		=> 'Stuur ieder lid een email op zijn verjaardag',
	'BIRTHDAYSEND'						=> '<strong>Verjaardagskaart gestuurd naar</strong><br />» %s',
));
