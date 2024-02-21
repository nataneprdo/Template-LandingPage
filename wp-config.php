<?php
define('WP_CACHE', true); // WP-Optimize Cache
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'clinicapaolaribeiro' );
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
define( 'AUTH_KEY',         'Gv*>rHw=8P?FMdnih:FU]B-$}8*,_4RlHSWe&|{jOlo#leA{#U^%R%HfD;lXBDpg' );
define( 'SECURE_AUTH_KEY',  '7H_t8+l4YFJ5xU~T<_YHL|k?b{5!GIqskzn9{w-O)Ebj.[+A,(AE.%;.QJkL$yIj' );
define( 'LOGGED_IN_KEY',    '|FGWf_uy+M8n9s}8GUl JHu<g(sKxoRfmKd[CXex-N37(S0Q,s[D--_0f07cQ2Ls' );
define( 'NONCE_KEY',        'irRyWQU)oqs|xe=4*q[I4uMCbZ=lrw]KNs/j-rN_U(m7-#Kc{[A!6z>m()PTiZ?3' );
define( 'AUTH_SALT',        'q@:-n;mi7Od!4eqk;?2#(sHX D#(-K,l^zto2w!v$eY1xboV!1P?OSjEGQB%^rK7' );
define( 'SECURE_AUTH_SALT', 'm/R.|N56ea-#+p6dkrftN+<3KSWwT4WfhQ^1K5D-=Sq#ZE(1DaW{fwTOe.(b2I9x' );
define( 'LOGGED_IN_SALT',   '^.U2&iV#d-=x=o@Ivv&`[3();3)C=?tM@E6O9U{h?tkq!umlC8~/bT!&@fh?{X_?' );
define( 'NONCE_SALT',       '>LH$iFku]cW]ho5?.k_j 7fME,^ErcI[RPA!90(6iAh+B+>xnLTV&b$jlh9Ra]I=' );
/**#@-*/
/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = '_clinica';
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Adicione valores personalizados entre esta linha até "Isto é tudo". */
/* Isto é tudo, pode parar de editar! :) */
/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';