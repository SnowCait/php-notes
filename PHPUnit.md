# PHPUnit

## 全般
* 例外がスローされる箇所は全てテストする

## Assertion

* `assertEquals`ではなく型まで比較される`assertSame`を使用する
* 1テスト1アサーションが理想だが実行に時間がかかるので実行速度とのバランスを取る
  * 正常系のテストは1つのメソッドにまとめて、異常系のテストは例外毎に個別に `@expectedException` するのが良さそう

## カバレッジ
* [PHP でカバレッジを出すなら phpdbg](https://qiita.com/nanasess/items/f5f8483e92c76ef408ff)

## コマンドラインオプション
* `--stop-on-error`
