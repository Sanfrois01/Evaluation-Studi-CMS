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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Mkll=9;dw5y`3v}D|ChXn8Ed0NqNS{^EAV@{{j=-5BC/4;ibeC&8X2%7b$l!Ya.e' );
define( 'SECURE_AUTH_KEY',  'hZ>;=3U]eL#P1W*}$cidGN(09}UQ-ZwMCeeu-UdceIg2o&gg4qo%]T6@j:_GG6F_' );
define( 'LOGGED_IN_KEY',    '*sVq:]Z<OWR5H?]l8>O,(}5,#LU@a+mBHs2KN!0+Qj|^h_sl0i,:;`2dcqtaZQJC' );
define( 'NONCE_KEY',        ')#tCEL]7u/lx~m>r=#2sl6eKK,nE58LEmMB@mWT?v|>A0c]KvhOh5loM..yFn:vA' );
define( 'AUTH_SALT',        '3z`k.}5plntk{>3W s=$n:*OH}hKYEpt]KLzs+c3MDCLO J9uO/u{E.TA7=sr4Np' );
define( 'SECURE_AUTH_SALT', '2>j~fR$MgwJ~+.BHvDjJcgZ]lU58RlkZA5`blhYF_>Ft&YE,8]VCg-A+,|;<~#uA' );
define( 'LOGGED_IN_SALT',   'txOC!fu}kvI!4X8p0>ijD>DO,7nNN,m0My%>O?}ohfDj|&wC`y!P]{V]5z~Rn<mk' );
define( 'NONCE_SALT',       '<^?&2fzD*esmF{;bx BY5!o<2+pM_wMc7_tt9yON&F@Z?)9|fPVH_:1;P[=GM70U' );
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
