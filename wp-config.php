<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'luciewannepain' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'lucie.wannepain' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'j4MQPxdH' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'ipabdd.iut-lens.univ-artois.fr' );

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
define( 'AUTH_KEY',         '3$#wz/Z=F~9Z/uM4`RGsaM$H%4M[/#Q(CTma`>joeup&!l+gvE-?pg%d9L%**S;:' );
define( 'SECURE_AUTH_KEY',  'E^H1GY.i+APe)_;g-7R:K 3DA3%_BAcdKattqQIKb@RZO/?*K-P.34uY@(6L$`;>' );
define( 'LOGGED_IN_KEY',    'r0bZ6/7Z1J~K7y:b%rG)(,J)!U?|Or:/3Iz5moVHDGL<M%.y){akW }5/u*6Z($C' );
define( 'NONCE_KEY',        'H.|U,!4:,`-*i4_Eev0-[neL*$j:ZJ:fJlQ>hn9& j,O6^nm(ja}^<~ 5D_JZi]A' );
define( 'AUTH_SALT',        'L1!_d((/(@sb*S14+f9[{yX9-<>ZlQ@sI?%*vT1F}dSrrxj<g9Ef]UqA`!{qoWuB' );
define( 'SECURE_AUTH_SALT', 'nZeiZ}P:}hpUWt0~#NlsgO9+2O?o2g)>%N}`^pBq@p8chcLTBD[,SJ0@sY:-+x!+' );
define( 'LOGGED_IN_SALT',   '|iwtU%<D>a?%^h$(q?,InWQ,;3CeU.f?4 4`0e{H+^Z&0DpnTjXYaj3!ubdEy^MT' );
define( 'NONCE_SALT',       'bL<8d!EX5srFYKeFk5fgbZk]ik`QsJx+AcS7|v{$u#8pR$}#@>dmK$m~)WO7 SX$' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
