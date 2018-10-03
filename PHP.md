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

## foreach
* 値は基本的に参照渡しにしない（ループ内で変更を加えるように見えてしまう）
* ループを抜けた後の `unset` は行わない
  * 参照渡しをするときは `unset` しておく https://qiita.com/ttskch/items/c6d8ea00c57640c52cd8

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
* [php - PHPの非同期処理は、Ajaxと何が違うのでしょうか？ - スタック・オーバーフロー](https://ja.stackoverflow.com/questions/30724/php%E3%81%AE%E9%9D%9E%E5%90%8C%E6%9C%9F%E5%87%A6%E7%90%86%E3%81%AF-ajax%E3%81%A8%E4%BD%95%E3%81%8C%E9%81%95%E3%81%86%E3%81%AE%E3%81%A7%E3%81%97%E3%82%87%E3%81%86%E3%81%8B)
