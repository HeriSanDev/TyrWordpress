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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'RWb7DFGj>W/7kQHUtBj$oDt-%+yPzsyhA#vjen,f;9.FlKw}K%Ue~1n*(R7`Nl$B' );
define( 'SECURE_AUTH_KEY',  ',}OJGQJih1xX|Ab#4 ].T^pQ;`L<X@lKw7O}^zcZ$.<-6PuFHOUKumb$?n[g(9^b' );
define( 'LOGGED_IN_KEY',    'Gk,/M;yjnU-sHuUqhmIHBKL B6fvgLASrT1C_buv-WRBtGhVf*_CDzDx%^wtpuDJ' );
define( 'NONCE_KEY',        'f6I+2-_P)>_}P?j=7Xs*VZ:o]_^ZSnB^DQSD_c{aW%vT88=CkKYez!p$1v#O1;O^' );
define( 'AUTH_SALT',        'uDcX+JqJo5M{:_B@I::}2apDUNT8<-Fd,ob).*M@sf>*gN RiI,C?0F{.ecIl]$d' );
define( 'SECURE_AUTH_SALT', '@ZZ>Wm_ob|Mk*KzrV8mXT3U}`ETfuyitQ8xgql&.V+6f>_3fK %{>i)Cda%I01%.' );
define( 'LOGGED_IN_SALT',   '[aVJ3FjwQ4R#0U0,.WU<Z_juPJ`xH%Zlkl-HxqsQ:9`e*q,^lm/~V4{(&LP$HsT~' );
define( 'NONCE_SALT',       '2m5Ug{V[2`5o[yHwE-]fO/I,*<=j;(L@B}Ft}02QNTn9Ghnr6W,: ?5%/iL6{S?@' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
