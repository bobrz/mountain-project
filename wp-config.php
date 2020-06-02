<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'Mountain' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H9ac@ZWh2L=ZbB4BilfrHW8/=45+U5SJ/de&ryx2U](S>*R0FOnB4QyS`[jZjYc&' );
define( 'SECURE_AUTH_KEY',  'p-E$H-h^@4ymc/kWJFB`d_!n]i[ST=>hOag_pNAg%9QBq;6jCeWg83qsp50UgF 1' );
define( 'LOGGED_IN_KEY',    'p.E|Q+AMR*lqdv$O&dUPYXa_Tl6,=XiRCjQJH(W}UyU0Km#XSh!^Tc!u5I_xYlzQ' );
define( 'NONCE_KEY',        'D@d$U,./}^`JS:_5x$nrSNEA?V0glg9-$G{ TR,a:,@<E/yTx_p3$KZ62WT5V(G|' );
define( 'AUTH_SALT',        '^>e7B:?P-@(v>x2;i_^INCq8Ko0<hK+By~4x=QL+WW.iHDA];>XqxHkEgKgbFpy>' );
define( 'SECURE_AUTH_SALT', 'hLWwbV0I[.VrVi<llTX8:=$Fq/E^vaC?l?ad+)U@DH:5TqGZKtvnNU!GGc.R}bu*' );
define( 'LOGGED_IN_SALT',   'TE58@[LTevCMt4_ f*)Z-?t+q9qsCO-7!#@_<t6F6&GiDK%;{EF6CQ`%BFcmx=f=' );
define( 'NONCE_SALT',       'onqxI$XF0g5)pM$/lgyjvh8d`8e<%qfv<z=xn7%E,9CySA|q#snBQ/Ry^d<hbX_k' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
