<?php
/**
*
* @package phpBB Extension - Crizzo Max-width switch - English
* @copyright (c) 2014 Crizzo - www.crizzo.de
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
	'MAXWIDTH'			=> 'Use maximum width',
	'MAXWIDTH_EXPLAIN'	=> 'With "yes" the board is able to use the full browser window width.',
));
