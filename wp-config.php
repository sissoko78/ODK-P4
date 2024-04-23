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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ODKP4' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']nstehXkNZFlm:aa.!JLxtC(oI%Lna,T~&.yy^><Cd}h5mZ?k1fJq|AF)v>3yr;l' );
define( 'SECURE_AUTH_KEY',  'wcB%H#vu}|q9u=u_(,b$eB&hM>0j(_hX`kPq#:OAr|WKT6 B1R@9djmu7CZ-h_>(' );
define( 'LOGGED_IN_KEY',    'A?NSd?5IS&nL]>EIe10O}uc-jb}Vz&TR3wSgauR2!?V&3oI|8]|Ck+J]fAuybc;H' );
define( 'NONCE_KEY',        ';ArX9r)?VxC{S=!R%M%%A~1dQPxaUTx/P4~=41F^!jgyZQe}=b`sX-qp6-)K74pw' );
define( 'AUTH_SALT',        'a ,RpiKLFn}U@P$F,X;6XEm48>[`[svJESWue>=a;Ht0 aith_w]{?xidzB3lhW|' );
define( 'SECURE_AUTH_SALT', '/orA`YsNYj9+1LVbxE|KvE4D^6QMl(AN5?3{34$8{zQ~f;tT5n5LR2a`}i^|&s`f' );
define( 'LOGGED_IN_SALT',   ':orL8CPbHI/c@o3*#RMGsE36Dk~|uC)p!S&*QaFxrqh<Cq[bPl-DoLv62h&O;66_' );
define( 'NONCE_SALT',       '?OFP|9-E.P}{AY=_S9pH:Ng~K4m9[d`,8Y><<<!fzreY=CN?I6{m)s0Mvaq:>!YV' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
