<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wedding' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h/kccH?-eI&S[&lK=03JVuf;HLgE^[mx;7d]GSj>>Fn`~anV%4jq}]2g@dVA1b/,' );
define( 'SECURE_AUTH_KEY',  '1y(e1}i(mK5OD<{Iar4 g[|oCYv~=#v:$ALIsOl$9:h%8_j:2=tgubS4[>M&xSt!' );
define( 'LOGGED_IN_KEY',    'uxHJ~{T}~uAxGki1it{SQF?)>:`NW#lZeO)l6HiQ&Hv*gAcR4A,>73JcA5qil/2}' );
define( 'NONCE_KEY',        '6lvk5UXvp.nE%!AU}b3*J]P-AOz:e~R_>7i]6`7;~WlDf3LD[,VytC/YZ8qY%@r<' );
define( 'AUTH_SALT',        'lcbHa/0CHG??9jpO_8}Cp,EAqCiGFDW>O %<(]kc`33:S`S4N!z<C}-C8/Wc{n*6' );
define( 'SECURE_AUTH_SALT', 'er#i169h6*Qozcic3|;%)vBDT_t%V.ZRd|B[=;$T2e;)RvfrV(--GZFH4}XyVE%I' );
define( 'LOGGED_IN_SALT',   '1Wt}efPH$xUA@yy|-1NH=M&Pw})P,dvQTY<`Y86e)-)7vXzCg<=A=4Dkf}9!_rf1' );
define( 'NONCE_SALT',       'Bn9N:=Ac?F]B-CD(w9BT]UV;#(o.u##XMr@*]lvIRXO3VyEO?kIo|P ?rg7&v~2&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
