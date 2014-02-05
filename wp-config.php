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
define('DB_NAME', 'wordpress_bd');

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
define('AUTH_KEY',         '?;7X-CsflUb=0rL|=BF6)HeA3N~Z?]j0.I=-cA@w@[6-7*+HuaO5bgnq:Ya_d2pK');
define('SECURE_AUTH_KEY',  '0ItR^Ptb3)Wr9F-6C =u4^`[FFKoTDp)dVfOnmLI+CP0L4*Z1OXS-=vp?X|}GVq+');
define('LOGGED_IN_KEY',    '_l&#I,+=~mQl@63]S8-![/F|`hO;=cL;j#0MkHz:D4D=$IJ]?(3w~qj{R3:+W^.?');
define('NONCE_KEY',        'N`r{GT;b7&Flk2t/Q=gR|K+#>]a^7=&$EOvQM#|2_|0>qKO>p^09@re]iq&$(0!}');
define('AUTH_SALT',        '9ob+|dNKoMbc ei=5[bM_09k|u7wbhvW|bR8%qJw>aM|d`z|cirk,gNkrU-=32nK');
define('SECURE_AUTH_SALT', 'r:P(|cN+Af|&T7z{|}LwWZSoet*u<g6Tr<;a!,$|y4W}9R(sR>`fL!&n<*G0D,_s');
define('LOGGED_IN_SALT',   'Cz-TiLHy-v.=4.5C(RwZq6J4T*G~=[Cx$m]tXv$(Ztp}+F8)M0`gbP{)57IcuzF1');
define('NONCE_SALT',       '%~x&@Yc$+fF-bk+4WK2SNiNb=T,Lm%LS1~esR08AE^JXNiwppZH(B[5^V[a 3)bN');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'me_';

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
