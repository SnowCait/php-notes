# Xdebug

https://xdebug.org/


## 設定

### IntelliJ IDEA, PhpStorm
- Settings > Languages & Frameworks > PHP
  - PHP language level
- Settings > Languages & Frameworks > PHP > Debug
  - Debug port
- Settings > Languages & Frameworks > PHP > Servers
  - Name: 何でも良い
  - Host, Port: 何でも良い（ IDE からブラウザを開く場合は必要）
  - Use path mappings: Absolute path on the server に対応するパスを入力
- Edit Configurations...
  - PHP Remote Debug
    - Filter debug connection by IDE key
    - Server
    - IDE key(session id): 適当なキーを入力
- Debugger
  - `Waiting for incoming connection with ide key '入力したキー'` が出ていればリッスンしてる

### Server
- install xdebug # PHP >= 7.3 requires Xdebug >= 2.7
- docker-php-ext-enable xdebug
- php.ini
```
xdebug.remote_enable=on
xdebug.remote_handler=dbgp
xdebug.remote_autostart=true
xdebug.idekey="KEY"
xdebug.remote_host=docker.for.win.host.internal
xdebug.remote_port=9000
```


## 注意点
- 処理が重くなるので max_execution_time を変更した方がいいかもしれない


## トラブルシューティング

### ブレークポイントで止まらない
- ポートのリッスン
  - PoserShell: `netstat -aon | Select-String "9000"`
  - Cmd: `netstat -an | find ":9000"`
  - Mac: `netstat -an | grep -E " \*.9000 "`
- ポートにアクセスが来ているか（ IDE の方は止める）
  - Bash: `nc -l 9000`
- パスのマッピング

### ブレークポイントで止まるが変数を参照できない
Variables タブ: `Variables are not available`  
本来なら `Waiting for incoming connection with ide key 'KEYNAME'`
- 実際に動いているコードと IDE の PHP バージョンが一致していない
  - IntelliJ: Settings > Languages & Frameworks > PHP
- IDE のバージョンが古い
  - IntelliJ 2018.2.4 / 2018.2.8 で発生を確認（ 2019/07/30 時点）
```
ERROR - plication.impl.ApplicationImpl - Argument for @NotNull parameter 'remoteFileUrl' of com/jetbrains/php/debug/xdebug/debugger/XdebugDriver.onBreak must not be null 
java.lang.IllegalArgumentException: Argument for @NotNull parameter 'remoteFileUrl' of com/jetbrains/php/debug/xdebug/debugger/XdebugDriver.onBreak must not be null
    at com.jetbrains.php.debug.xdebug.debugger.XdebugDriver.$$$reportNull$$$0(XdebugDriver.java)
    at com.jetbrains.php.debug.xdebug.debugger.XdebugDriver.onBreak(XdebugDriver.java)
    at com.jetbrains.php.debug.xdebug.debugger.XdebugDriver$4.onResponse(XdebugDriver.java:172)
    at com.jetbrains.php.debug.xdebug.debugger.XdebugDriver$4.onResponse(XdebugDriver.java:167)
    at com.jetbrains.php.debug.connection.PhpDebugConnection.handleInput(PhpDebugConnection.java:256)
    at com.jetbrains.php.debug.connection.PhpDebugConnection.lambda$startReading$2(PhpDebugConnection.java:290)
    at com.intellij.openapi.application.impl.ApplicationImpl$1.run(ApplicationImpl.java:314)
    at java.util.concurrent.Executors$RunnableAdapter.call(Executors.java:511)
    at java.util.concurrent.FutureTask.run(FutureTask.java:266)
    at java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1142)
    at java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:617)
    at java.lang.Thread.run(Thread.java:745)
```

### PHPUnit で `--process-isolation` や `@runInSeparateProcess` を使うと処理が止まる
- `exec()` 等で他の .php ファイルを呼び出している
