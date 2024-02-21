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
define( 'DB_NAME', 'aloacai' );

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
define( 'AUTH_KEY',         'G&*wy#i]Z9*#v4 C_UvYITz^&7]M(~tlRku<6k-M[vN(PI(gy<2Wg`i%U %Of+jJ' );
define( 'SECURE_AUTH_KEY',  '`Fo!_;Ma~p6c%l= 6kA)4oMcehr`>5mLh+}+dN3m%3-wy)s~nLjVwuqz<zKiklJc' );
define( 'LOGGED_IN_KEY',    '!lRB0QrWwt`((bf* !>^ _S#>]<,qoN070tvSqD9%$.5-;=wuJ6.bSt.hZE~Jy%x' );
define( 'NONCE_KEY',        'm6abAiQ{ay:FW.X8FGPb.,Z*9;$]arp99d%`2%Yv2# 3]{p.&OJ<KDW1Z2^Kr)0[' );
define( 'AUTH_SALT',        '%B ltvAHWKRJ2aSttEF/}=un,k6x/<Xt[_q)3{.SfJYbDaSUJ1@x@&Pfj^Nk `~]' );
define( 'SECURE_AUTH_SALT', 'ISyV;N%C2./1wLVL=D0i=`nmfO|Fj3LJI9T_Lo<!dl$Vlb;WB3Q7mTQsH(<U2>3Q' );
define( 'LOGGED_IN_SALT',   'uKymZ*f+9#vVZ8/(dtG9`wO+7Mcg<H7PR#j&}{TdHBf>9J6#D|IXgr(7dP#fKh`T' );
define( 'NONCE_SALT',       'eim/^bsl,_b(n:-YXdkt+<ml[2BldD:+4Zl3hag5c,q#uN(IX>B5yv4t:s!?sI=#' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'acai_alo';

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
