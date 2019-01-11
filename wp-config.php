<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp1');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DiqE@}T_!].xlef f~<&`#)`OIcP/&E-ZnYe32#gg+Ai6G.B0+]P,D.jo1/F8MtR');
define('SECURE_AUTH_KEY',  '5qZw5Uv^~.ChX/p+p9{VHcI:2wzAwZA+k 8X[!#4#i!{z;nN%I]LfmPYc$3uJi#.');
define('LOGGED_IN_KEY',    ' Noea@,I0l+?A|Lq|>J+nyT?.Kq[!s:BqBY3JZ<afT~=Z&;WoGOE>QsL&j&g:6/>');
define('NONCE_KEY',        'ZoSm^{)Y`#6)|xbxJ@.=R<-xLypYcTv]R5I,B%Ib=7X0?I19dBka:5H|3|>Pd(va');
define('AUTH_SALT',        'RRO=>U:_exL(6-j{V^y+ s}N@cp6st/VB>o?Vf%Wd]sSC/C*hkrCp/2yw^zuea8y');
define('SECURE_AUTH_SALT', ']`*H>D|L}lL}0T!;<>|X==&)po5Rel1A<@KYc5FY)en8`N)]Af>W&Ie_JZ9g:Lix');
define('LOGGED_IN_SALT',   '5hXmg&NNn2>]N6zB%@F@2}3T}<@Qng^Tl^,9vvH6,Wr) ~nJDw,3b;O:Xl>9[0+L');
define('NONCE_SALT',       '2ls;TSLH!/bOOFU|:skLb?->~Ka*QcA3R(`Mxoz^J*<R%$-EXQiwJ+tr`#W%QE=i');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
