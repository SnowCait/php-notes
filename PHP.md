# PHP

## 基本
[Composer](https://getcomposer.org/)を使う https://qiita.com/niisan-tokyo/items/8cccec88d45f38171c94

## 環境指定
* `define('ENVIRONMENT', 'develop');`をバージョン管理外の.phpファイルに用意するよりはapacheの環境変数で指定するのがベター。
* `if (ENVIRONMENT == 'production')`のようなコードが散見されるが、フレームワークのconfigに定義すべき。

## 型
戻り値の型宣言を使用する場合はstrictモードにしておく https://qiita.com/itosho/items/f7d1b3ab41bce6503b52

## 例外
* 投げ直すときは `$previous` を設定する。

## 定数
* グローバルな `define` よりスコープの小さいクラス定数を使う

## 乱数
* [mt_rand](http://php.net/manual/ja/migration71.incompatible.php#migration71.incompatible.fixes-to-mt_rand-algorithm) を使う

## 可読性
* `extract` はライブラリ以外では使わない方がいい
* `exec_shell` はなるべく使わない

## CI
### テスト
* PHPUnit
* Codeception
* PHPSpec

### 静的解析
`php -l`, `phpcs`, `phpmd`, etc http://algo13.net/php/tips/static-analysis.html

## クラス名の文字列を取得するときは`::class`を使う
* エラーを検知できる
* リファクタリングしやすい
* namespaceが長い場合にすっきりする http://suzuki.tdiary.net/20140312.html

## 非同期
* [PHPの非同期処理ライブラリを漁ってみた](https://qiita.com/niisan-tokyo/items/cb717fee8066a0fa5f4f)
* [PHPで作る非同期処理 - Speaker Deck](https://speakerdeck.com/niisantokyo/phpdezuo-rufei-tong-qi-chu-li)
