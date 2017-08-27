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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'hq-ilegra');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'QM7fe)8G]RzfB0_%Sn[<8|Bh4^bS1}]o*%Et8WBJ--Qyzj+H>#[=FMq#wH1a`6Tz');
define('SECURE_AUTH_KEY',  ']g,cVeiJJyNt)T4M_]n+n<!IjjHd!F$y(KmW.^DgiCX&]Xsxx?G,_IJo.db:s|0`');
define('LOGGED_IN_KEY',    '+xBgxc{8U]<+?[&1q8y$ANyGi>17]Tdp_jt0U}Bx n|zMi0gf52R?v.^}(S y4-`');
define('NONCE_KEY',        '<j1:TyFQN^?;-?17Xa`1LY2weG[Yia}L9wy-+%|JY_@EMjilROZZr_EqOj7?wYNz');
define('AUTH_SALT',        'ugq7fjR4>Zev1J5nm/($u}-vOuDihG8f$jvSwo%d#S++_k#mHmG(*v3+?Gk)?&u9');
define('SECURE_AUTH_SALT', 'HfiNFJ-D@GN$}HO,zT,%|o[QC-_JkF:|>$W4vDZLj`_ VOI#%{|!D*FUft,iOif{');
define('LOGGED_IN_SALT',   '9Vz$}Dy:<Tw>X><B -KL!22cv-%c4Oc8n2C=$YeqZb<|M.>_4(* +@=mQF;k#F]0');
define('NONCE_SALT',       '.)ju>Kb}nD!A.RZo%Q4-N&-2RsD<]a-9DteAG-pwd>6)|FCS-gz OM!v+B3+<#{>');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_hq-ilegra';

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
