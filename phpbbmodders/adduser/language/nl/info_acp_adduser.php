<?php
/**
 *
 * @package phpBB Extension - Add User
 * @author RMcGirr83  (Rich McGirr) rmcgirr83@rmcgirr83.org
 * @copyright (c) 2014 phpbbmodders.net
  * Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	// ACP Module
	'ACP_ADD_USER'				=> 'ACP Voeg gebruiker toe',
	'DIR_NOT_EXIST'				=> 'De gekozen taal %s heeft niet de benodigde bestanden voor de extensie. Gelieve ze te vertalen en upload deze naar de %s folder van de extensie om de extensie te gebruiken.',
	'ACP_ACCOUNT_ADDED'			=> 'Het gebruikersaccount werd aangemaakt. De gebruiker kan nu aanmelden met de gebruikersnaam en het wachtwoord dat verzonden werd naar het door jou opgegeven e-mail adres.',
	'ACP_ACCOUNT_INACTIVE'		=> 'Het gebruikersaccount werd aangemaakt. Maar de forum instellingen vereisen dat de gebruiker zijn/haar account activeert.<br>Een activatie sleutel werd verzonden naar het door jou opgegeven e-mail adres van de gebruiker.',
	'ACP_ACCOUNT_INACTIVE_ADMIN'=> 'Het gebruikersaccount werd aangemaakt. Maar de forum instellingen vereisen account activatie door een beheerder.<br>Er werd een e-mail verzonden naar de beheerders en de gebruiker zal geïnformeerd worden wanneer zijn/haar account geactiveerd is.',
	'ACP_ADMIN_ACTIVATE'		=> 'Een e-mail wordt verzonden naar een beheerder voor account activering. Als alternatief kunt u het onderstaande account vakje aanvinken om het account onmiddellijk te activeren wanneer u een account aangemaakt hebt. De gebruiker zal een e-mail ontvangen met de account login details.',
	'ACP_EMAIL_ACTIVATE'		=> 'Zodra het account is aangemaakt, ontvangt de gebruiker een e-mail met een activatie link om het account te activeren.',
	'ACP_INSTANT_ACTIVATE'		=> 'Het account zal onmiddellijk geactiveerd worden. De gebruiker zal een mail ontvangen met alle benodigde account details.',

	'ADD_USER'					=> 'Voeg gebruiker toe',
	'ADD_USER_EXPLAIN'			=> 'Maak een nieuw gebruikers account. Indien de activatie instellingen zijn ingesteld op activatie door een beheerder zal je de optie hebben om het account onmiddellijk te activeren.',
	'MOD_VERSION'				=> 'Versie %s',
	'ADMIN_ACTIVATE'			=> 'Activeer gebruikers account',
	'CONFIRM_PASSWORD'			=> 'Bevestig wachtwoord',
	'EDIT_USER_GROUPS'			=> '%sKlik hier om de gebruikersgroepen te bewerken voor deze gebruiker%s',
	'GROUP_ADD'					=> 'Hier een selectie maken zal de gebruiker toevoegen aan de geselecteerde groep alsook aan de geregistreerde gebruikers groep.',
	'GROUP_DEFAULT_EXPLAIN'		=> 'Dit vakje aanvinken zal de bovenstaande geselecteerde groep instellen als de gebruikers standaard groep.',
	'CONTINUE_EDIT_USER'		=> '%1$sKlik hier om %2$s’s profiel te bewerken%3$s', // e.g.: Click here to edit Joe’s profile.
	'PASSWORD_EXPLAIN'			=> 'Indien je niets invult zal een wachtwoord automatisch aangemaakt worden.',
	'ENABLE_NEWUSER'			=> 'Schakel nieuwe gebruiker in',
	'ENABLE_NEWUSER_EXPLAIN'	=> 'Indien ingesteld op ja zal de gebruiker toegevoegd worden aan de Onlangs geregistreerde gebruikers groep',
	// ACP Logs
	'LOG_USER_ADDED'			=> '<strong>Nieuwe gebruiker aangemaakt</strong><br>» %s',
));
