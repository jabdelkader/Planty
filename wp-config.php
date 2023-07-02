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
define( 'DB_NAME', 'projetplanty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'E676.z;fil:a44DMco~.V?My.KsgkUX!hm;6 <vUk>{d5(E=/MKA8~j5iCTiVxd-' );
define( 'SECURE_AUTH_KEY',  'n&1}q5| 4CB;}Lu|7riD`4A`mzGm!ikD!BN;Dj-@Y~JmV5L8M0k!knXu(o= k`(T' );
define( 'LOGGED_IN_KEY',    '+pZP}4ubAeHr8N305bd|Tf1<f]Z9+ Hd&l[]5NVg@b7{6x?+z;}WuCrF*ofI|=3w' );
define( 'NONCE_KEY',        'Uh0$pFjd<k)85g*:d^` LMW;^@ eb@2*s$Yk=sO=A&(`N=yV`A*{PCzT-llvX<mG' );
define( 'AUTH_SALT',        '$)5FLS&*BWfF1RCce)n=99f3TilA/Z5U2!u_UrPehWxznrW=Xk^!%}774aph@t}+' );
define( 'SECURE_AUTH_SALT', 'D,`uH9@o3<33l,|IE({z1C!}!Y/C&{EW23[~g8RkZVXJr2jzEYW} .aeFQi[5S(`' );
define( 'LOGGED_IN_SALT',   '/N DQXl}U-XF86ZDMmD%3Uziw>3q!pF{1zM&CKVcwrb$ZPO[Ik3>^}-,xN=iYknH' );
define( 'NONCE_SALT',       'g7X-J}OPsUI<PWdD]xo+o lht<BfmoKI#,kyK_ 7Y`n.$pSmDJ~&%cd,f,<O(xN>' );
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
