<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'yahoo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GynIl<;0g1e}_Vc|S37!GYAic-|PC>#_yb$Tf`v?guWz-.OCWNfXqm.[qqpl>6sf');
define('SECURE_AUTH_KEY',  'O1cj7(K53&EWk~g=~$~MFebTf!yG!CpC&E{g4y~4zVrkN-5PWprj|N_#=3N%9&M)');
define('LOGGED_IN_KEY',    'E@)A,/vWcnDH4J6aEl<;:TvIyj3_;1aSlp&Q7S()R.4tU-5WgD}O2u:^cyfDr5l3');
define('NONCE_KEY',        '7j!Z:,h]>M5j=J;r#n{bV`fI|(gC:+:a!UJ#o(olt J>ktu;5-Qs*DI5o2XSqK*h');
define('AUTH_SALT',        'xC<8]UD*$Kw+w!>fI_y6A6{[Ft47z2KA|C7&g<^.B]bqsv_Z$B6d+6q<(W(4C}Yt');
define('SECURE_AUTH_SALT', 'FvH%DRLrkOj,^=nU!_k>=IHsNOL0m}6ZYR5A(-B[(HK@$F}v?y].(SkqVcE.$f>n');
define('LOGGED_IN_SALT',   'v91Kq1] !u[f(u*7y>m1f[aXy#9o+@9mt6]5c$Fl88-delF}|-PSA|@DCskk=s}o');
define('NONCE_SALT',       '[S(T;j7#*&E]/lXN@%-n~m3KpY.1b61LeC#3lm7C?Xm6~Csp.eV>W.u|q8|?&*br');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
