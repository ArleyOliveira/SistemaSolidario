s configurações básicas do WordPress.
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
define('DB_NAME', 'site_incubatecs');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'estagiario2015');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'incuba15tecs');

/** nome do host do MySQL */
define('DB_HOST', '200.131.5.231');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'rBbMZv|!-DQdFlf#=-NT6s0),&%-@s&7IJb/rW#{iPNRfnUleQLG36)Az;M4w{ZJ');
define('SECURE_AUTH_KEY',  '1U|*P:EIE-bDfR-(13vyE)Ut47k$sig3mq^]qf1InE#:oncyyuf|/s>|69r1U|c{');
define('LOGGED_IN_KEY',    'C0([9SM?rn]bFjG(yyC&v$&5s]PaZ]!hN(?J+#^fN|3_p9Yz,EEn,Jv/3qJ;w*u.');
define('NONCE_KEY',        '_H|<s(1VX}O%TLEw(=Hv:--p&0Ya;gaX2O-,GVlMA,Jt&P2_}q%jF=*_<{YZ5*k5');
define('AUTH_SALT',        'V/J)Y@|}eVDD7+Ba#;(3*%DJ2;:_#Cix3Zx9/K d&s-7cu&ng*hW/ H%]@H-H[y+');
define('SECURE_AUTH_SALT', '=U~B5l.hGjyydy_]+>1!Z$)l?4Gk9-[}y!gn )O/$vA^%={|r,r[2-OV3f.eR<mR');
define('LOGGED_IN_SALT',   '8=,5^lLMvrQyg*J^f7L]L_6Ief+!<xblKfkV|Y~{l]U+|!f3p4B/kW.FlwK!PT(m');
define('NONCE_SALT',       'K.)&/vnN1r0)&]*zD7jW^tC/$k,4}g*01^?{-J!Q+FT$h_@l~-zZePD+[RV7a6FJ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


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



B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
B
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A
A

