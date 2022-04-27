<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'webshopmartin' );

/** Databasens användarnamn */
define( 'DB_USER', 'webshopmartin' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'Proff.1!' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V:nW!$z[5b 5}|<v-.P4a6:kF0z?g^M%Rz4)&=byIGV<v$dhQNZ%_;m3e~!}A#(6' );
define( 'SECURE_AUTH_KEY',  '@`!WG-=&1Q7Lft#tbuExl9r~c`HS)_HJd*nTDHi:cW~dEcZ>_T@iKB]OBrC46CxS' );
define( 'LOGGED_IN_KEY',    ')vor~Q*pdzsziZN[9fu&_?AB?>4L:P?+VwzgRrRyKu9$;3f7CDs/-GQS962e*K^*' );
define( 'NONCE_KEY',        'G;d7?V/_$+Z9yX0{Hc@_csv/CSn$S:U&Ylmu*^1YISGSH^yZ#y#t&fZ8b`I~8?F,' );
define( 'AUTH_SALT',        ',Ng`J+T+3,f/9_[DH[F>aH>izi *TUjDF!>_65=h#0~D=7/Xxy&{Mb/oS{Vi,V&R' );
define( 'SECURE_AUTH_SALT', ':!RKXUE8Es`G.`TH>,(A&o(m48q;csDNS@,Z7XL3{0JrT=L3oNcUF^SkkN)UMY%6' );
define( 'LOGGED_IN_SALT',   '!{#kdl?G2pAcJrD(jqsM/*Y3cps))%INKN~e8,R}jH.T9WssEwxs6EgAy5B7H/9k' );
define( 'NONCE_SALT',       '0%w.y$bxdU6L()] ~iYGYDr5I^_ikKV=FlJ1Po-7,_{e5pE`[Rsh(P^wcFO6zP.)' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', true);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');