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
define( 'DB_NAME', 'artpubv886' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'artpubv886' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'FuJRduy758yP' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'artpubv886.mysql.db' );

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
define( 'AUTH_KEY',         'Z0[X`PnZp3;.t!UJS=gEDh09TNLwAEO}J(ZNpHNT<slVpv&*KB9#-iUzV)>Tz#7=' );
define( 'SECURE_AUTH_KEY',  'd#~bW7$!DQjL-#a__[( ^1/r` wPELD8jE,|8^7H>$K_y+0C|C0Gm)&FOG/fXFW!' );
define( 'LOGGED_IN_KEY',    'eE$Mi`s=zs^,3l~IO@SZE`:(Kfs6*0mIq%FU5gJUzZ<V0KjqMqC]v.(^H&?;ggG$' );
define( 'NONCE_KEY',        '/|_5`&0bZ0q-QZZXdNaksPuf6HB$>2rRtnw0=Jhu([-qo93>xM!g I]9|l8q&|Wz' );
define( 'AUTH_SALT',        'pK3=Kj{>>A%q}m @5c:elw#o/1d,gA$9jM[NEdg.3OXcI}(!%bx)MPy~KsHMKig<' );
define( 'SECURE_AUTH_SALT', 'Kzo$t5sm&`*5]5p]g=+i5<WR2)4a<pEYh6s!C^PN>/*INKCEc<ryDETb0H{`YLSD' );
define( 'LOGGED_IN_SALT',   'A`h$J7tro&-7I0kV9p^9T>mY@XM78qc5^+6P`+:K71.#8RW _R&;{YmCOJ)!^vMR' );
define( 'NONCE_SALT',       'PB>w!$HjSa:{Lr%<[O,9skt@N.e/ARg8H#=s-Hs~?!nXv*6q,781L9qNtYR~P.I^' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'demo1_';

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
