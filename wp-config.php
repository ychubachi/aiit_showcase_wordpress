<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wordpress');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'RZtLteYADufHSpRx');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wH/v,I0D.Ci6XCkJY741sEes<H|Q!IY!J{vY%R?5hyKO66XZ~Mvd&!uzxP`l+9fu');
define('SECURE_AUTH_KEY',  '[sK+|63]Tjiu?V%E<QGu|+u8!|B&O;-L^5}r )i%Bj=%JE+=@~LtVtgt_9b{*mNv');
define('LOGGED_IN_KEY',    '9N|aM7iu5;SA3qs(]!>321=*DO1FPzfj[Lb6i(}!WEP *a1{DedVggB&puu9u++x');
define('NONCE_KEY',        'uVed};&J?h=L3|uphcXXjFZ=9]U]jy|5lBAYPHpO-+jK8$#n#vm1|9s,v,M]O$-=');
define('AUTH_SALT',        'dFj?b~Ct|tHJC6Gr=K __N;TXF!%6J,QJM+$e*&7h|TN/9 U!1t_-DZVg~):/kjY');
define('SECURE_AUTH_SALT', 'RHr(zFZt*Epr:(sL:8BiZ%_S]].SSPHKc0#8nQds6sBrrPrA0mv|`fQ2m.).l)MV');
define('LOGGED_IN_SALT',   'Nx=NUXc6Ze>#O5a?y}m|r;?c$~tYY-%=}[RIZMm K[<s Hr?jbM3}%H|9|f2C1fT');
define('NONCE_SALT',       '-QHK]?0p[Pq! N~Y.()qj&-LAYXzzg9fYca/!H?V5z^{M[lSW_Z$S,VQG7uAl*.u');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Set up 'direct' method for wordpress, auto update without FTP */
define('FS_METHOD', 'direct');
