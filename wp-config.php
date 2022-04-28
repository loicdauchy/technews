<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'technews' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'uVKe&c&Ae.=;xSKOQ>>|PKmh`>$OK;V{OTzP+M saO0[mP(KEXL*-rP2RYT _*dS' );
define( 'SECURE_AUTH_KEY',  'u~t{dp/qz2|X`5k}f:D)f1y<r|e}VyvoRT}aw6uHxmyKrE+//ogoC^d$1]zZH{(z' );
define( 'LOGGED_IN_KEY',    '_BMnMVXU1i<#Ex5(xv,fQh-Oa>Ut>R5 iHD-_CfH-}rRAV7Bi?dU2=8je0_X@a07' );
define( 'NONCE_KEY',        'tVFw7{lei&EWHzzDX2Gzlhjon1@IXatZ_R{A]D7 [#^vozf9K1~!>c).[@J.x3dO' );
define( 'AUTH_SALT',        '}!k__A5bTfC8H`^EE5bf~ZcFfjx^{_W}vqP*CGJCyN;v[W##!sg%Rk7x=%ex-/CZ' );
define( 'SECURE_AUTH_SALT', 'NbW|S j;SQ??Ay:+{W iE{O:{dk8b*FCD0A_b+mw8$by]7jDOYdeQ,-qqq2N o:v' );
define( 'LOGGED_IN_SALT',   'kf%@NHYll9M%F2+U1 SY!|Mq5WLSa>Y-stW5n3+w %.GVhZ%<{E~T_?c+W,yiS6k' );
define( 'NONCE_SALT',       'QIY{9sr/+x0<wmL,Z{:tBKPCZl+v(~y2]Xfx/,DXI.4`#?P|J:7@LvToqdUClIT-' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
