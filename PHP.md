# PHP

## 基本
[Composer](https://getcomposer.org/)を使う https://qiita.com/niisan-tokyo/items/8cccec88d45f38171c94

## 環境指定
`define('ENVIRONMENT', 'develop');`をバージョン管理外の.phpファイルに用意するよりはapacheの環境変数で指定するのがベター。

## 型
戻り値の型宣言を使用する場合はstrictモードにしておく https://qiita.com/itosho/items/f7d1b3ab41bce6503b52

## CI
* PHPUnit
* 静的解析 `php -l`, `phpcs`, `phpmd`, etc http://algo13.net/php/tips/static-analysis.html

## クラス名の文字列を取得するときは`::class`を使う
* エラーを検知できる
* リファクタリングしやすい
* namespaceが長い場合にすっきりする http://suzuki.tdiary.net/20140312.html