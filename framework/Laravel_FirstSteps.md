# Laravel の始め方

## インストール

### Composer を最新にする

```shell
$ composer --version
Composer version 1.6.3 2018-01-31 16:28:17
$ composer self-update
Updating to version 2.0.7 (stable channel).
   Downloading (100%)         
Use composer self-update --rollback to return to version 1.6.3
$ composer --version
Composer version 2.0.7 2020-11-13 17:31:06
```

### Laravel

```shell
$ composer create-project --prefer-dist laravel/laravel fleet
Creating a "laravel/laravel" project at "./fleet"
Installing laravel/laravel (v6.18.35)
  - Downloading laravel/laravel (v6.18.35)
  - Installing laravel/laravel (v6.18.35): Extracting archive
Created project in /Users/snowcait/GitHub/fleet/fleet
> @php -r "file_exists('.env') || copy('.env.example', '.env');"
Loading composer repositories with package information
Updating dependencies
Lock file operations: 88 installs, 0 updates, 0 removals
  - Locking dnoegel/php-xdg-base-dir (v0.1.1)
(...)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 88 installs, 0 updates, 0 removals
  - Downloading doctrine/inflector (2.0.3)
(...)
69 package suggestions were added by new dependencies, use `composer suggest` to see details.
Package fzaninotto/faker is abandoned, you should avoid using it. No replacement was suggested.
Package jakub-onderka/php-console-color is abandoned, you should avoid using it. Use php-parallel-lint/php-console-color instead.
Package jakub-onderka/php-console-highlighter is abandoned, you should avoid using it. Use php-parallel-lint/php-console-highlighter instead.
Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover --ansi
Discovered Package: facade/ignition
Discovered Package: fideloper/proxy
Discovered Package: laravel/tinker
Discovered Package: nesbot/carbon
Discovered Package: nunomaduro/collision
Package manifest generated successfully.
41 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan key:generate --ansi
Application key set successfully.
$ cd fleet/
```

## 実行

### ローカルサーバー

```shell
$ php artisan serve --host=localhost --port=8888
Laravel development server started: http://localhost:8888
[Sun Nov 15 02:09:02 2020] ::1:51612 [200]: /favicon.ico
```

### テスト

```shell
$ ./vendor/bin/phpunit 
PHPUnit 8.5.9 by Sebastian Bergmann and contributors.

..                                                                  2 / 2 (100%)

Time: 706 ms, Memory: 16.00 MB

OK (2 tests, 2 assertions)
```
