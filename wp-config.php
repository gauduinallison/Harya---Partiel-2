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
define('DB_NAME', 'harya');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '.2z,Y=d[C$snjN,<k:G7!.2Y,<@ENJnp]E*E+I=`-pSEt<q{n;~6@ybU/t+OhIh%');
define('SECURE_AUTH_KEY',  '/mf=C#w@]Dyfkr@*Tz59,J]_x<kREg}j[T ojs-8nQwNpqTSGgqh);&1@ERJmFcr');
define('LOGGED_IN_KEY',    '}#I4*ffv709Jj<G_2S3dTZc-J3gSj6#K%,nd3OS{BUCQ2|u y0l&N6O[p#6;@Sl;');
define('NONCE_KEY',        '?-M7_^j!O1,TB`jm=+q+W2n2b~GK6?rHOb#XKc,ssOgn>?j&^r5VyIJWQ@6IzI}n');
define('AUTH_SALT',        '1Q!tsFFi[=yY1}LTaE{eg(=a0vBF@S?wKuVl2?0b-4,G:g^3Pf:]VszUk;F2_r8^');
define('SECURE_AUTH_SALT', 'oK5t*+Gl7M>!Xf`D;-D;*wI&[]bR/0@^*?W4!QS*@6*i;7uqpwlQnu&.I(<z&@TR');
define('LOGGED_IN_SALT',   'ztV++LKmuG~RIjb8;Il|XH9|>R+:T3-nz=/7mOTZ/a (C=_V_c={:BB_~D/k06OM');
define('NONCE_SALT',       '>?N:1BnGi/G-?|onq>6b$=/Pt2@)-gC2bK<X]q=M(0j{W?)]_{/u9;B7M`YuI4sc');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');