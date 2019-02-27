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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'terroawpemp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'luisfsdbi');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'luisreal4523');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'iFCJxnO)%oEA`U<ZvM[>c+yr0)$D|a!*2e|s,f~o|?, 1LcNY)q!)<HjLo)x-Ds ');
define('SECURE_AUTH_KEY',  '>m/)7tL_,]C2%lrqVKj^=7!c/REo*Kf-8./z/eK:#GYj+*E>`1iPP1PM6BJ05Yb~');
define('LOGGED_IN_KEY',    'H*xx<?`z8}VdWPaC]{^>OP2fkM0fZ1cUKyOPfe8)&}3dplINS;RT0qZ|#.974F|r');
define('NONCE_KEY',        'vM#b4KSmG_R=Z!:MbmQ-H:Om#9Kv%R^ @SeG_odnA7i!c+un9ZwBt}w0ZzHTtF~<');
define('AUTH_SALT',        'm@yr)Pk4lP?$O1_su!+|L@pdkeUTk#nQw}z`%~8Yx=(px>pPO/`e~`yT|`N?qJ:Z');
define('SECURE_AUTH_SALT', 'ts<Ch)H-QB/Mo:0Lv>-nj-n~9GX);N]W:|tBCzrl9O>{r$-r~q_LMSM5bekkW/;0');
define('LOGGED_IN_SALT',   'G_N8h(*>b,@EvKe8)Nbd*:smV:l[Te0[Jtv7>(cO37%rMs8~~CiH=H?MGcNX&0@I');
define('NONCE_SALT',       '4;`6&)G;dt76s?}$h3 qmnr)am3t>e# _+jW%R@2C|6yFLXN%8!QT]O=)x?gh24q');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'terrwpaoemp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
