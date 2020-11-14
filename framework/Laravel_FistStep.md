# Laravel の始め方

## インストール

### Composer を最新にする

```bash
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

```bash
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
  - Locking doctrine/inflector (2.0.3)
  - Locking doctrine/instantiator (1.4.0)
  - Locking doctrine/lexer (1.2.1)
  - Locking dragonmantank/cron-expression (v2.3.1)
  - Locking egulias/email-validator (2.1.23)
  - Locking facade/flare-client-php (1.3.7)
  - Locking facade/ignition (1.16.4)
  - Locking facade/ignition-contracts (1.0.1)
  - Locking fideloper/proxy (4.4.1)
  - Locking filp/whoops (2.9.1)
  - Locking fzaninotto/faker (v1.9.1)
  - Locking hamcrest/hamcrest-php (v2.0.1)
  - Locking jakub-onderka/php-console-color (v0.2)
  - Locking jakub-onderka/php-console-highlighter (v0.4)
  - Locking laravel/framework (v6.18.43)
  - Locking laravel/tinker (v2.4.2)
  - Locking league/commonmark (1.5.7)
  - Locking league/flysystem (1.0.70)
  - Locking mockery/mockery (1.3.3)
  - Locking monolog/monolog (2.1.1)
  - Locking myclabs/deep-copy (1.10.2)
  - Locking nesbot/carbon (2.41.5)
  - Locking nikic/php-parser (v4.10.2)
  - Locking nunomaduro/collision (v3.1.0)
  - Locking opis/closure (3.6.1)
  - Locking paragonie/random_compat (v9.99.99)
  - Locking phar-io/manifest (1.0.3)
  - Locking phar-io/version (2.0.1)
  - Locking phpdocumentor/reflection-common (2.2.0)
  - Locking phpdocumentor/reflection-docblock (5.2.2)
  - Locking phpdocumentor/type-resolver (1.4.0)
  - Locking phpoption/phpoption (1.7.5)
  - Locking phpspec/prophecy (1.12.1)
  - Locking phpunit/php-code-coverage (7.0.10)
  - Locking phpunit/php-file-iterator (2.0.2)
  - Locking phpunit/php-text-template (1.2.1)
  - Locking phpunit/php-timer (2.1.2)
  - Locking phpunit/php-token-stream (3.1.1)
  - Locking phpunit/phpunit (8.5.9)
  - Locking psr/container (1.0.0)
  - Locking psr/log (1.1.3)
  - Locking psr/simple-cache (1.0.1)
  - Locking psy/psysh (v0.10.4)
  - Locking ramsey/uuid (3.9.3)
  - Locking scrivo/highlight.php (v9.18.1.4)
  - Locking sebastian/code-unit-reverse-lookup (1.0.1)
  - Locking sebastian/comparator (3.0.2)
  - Locking sebastian/diff (3.0.2)
  - Locking sebastian/environment (4.2.3)
  - Locking sebastian/exporter (3.1.2)
  - Locking sebastian/global-state (3.0.0)
  - Locking sebastian/object-enumerator (3.0.3)
  - Locking sebastian/object-reflector (1.1.1)
  - Locking sebastian/recursion-context (3.0.0)
  - Locking sebastian/resource-operations (2.0.1)
  - Locking sebastian/type (1.1.3)
  - Locking sebastian/version (2.0.1)
  - Locking swiftmailer/swiftmailer (v6.2.3)
  - Locking symfony/console (v4.4.16)
  - Locking symfony/css-selector (v4.4.16)
  - Locking symfony/debug (v4.4.16)
  - Locking symfony/error-handler (v4.4.16)
  - Locking symfony/event-dispatcher (v4.4.16)
  - Locking symfony/event-dispatcher-contracts (v1.1.9)
  - Locking symfony/finder (v4.4.16)
  - Locking symfony/http-client-contracts (v1.1.10)
  - Locking symfony/http-foundation (v4.4.16)
  - Locking symfony/http-kernel (v4.4.16)
  - Locking symfony/mime (v4.4.16)
  - Locking symfony/polyfill-ctype (v1.20.0)
  - Locking symfony/polyfill-iconv (v1.20.0)
  - Locking symfony/polyfill-intl-idn (v1.20.0)
  - Locking symfony/polyfill-intl-normalizer (v1.20.0)
  - Locking symfony/polyfill-mbstring (v1.20.0)
  - Locking symfony/polyfill-php72 (v1.20.0)
  - Locking symfony/polyfill-php73 (v1.20.0)
  - Locking symfony/polyfill-php80 (v1.20.0)
  - Locking symfony/process (v4.4.16)
  - Locking symfony/routing (v4.4.16)
  - Locking symfony/service-contracts (v1.1.9)
  - Locking symfony/translation (v4.4.16)
  - Locking symfony/translation-contracts (v1.1.10)
  - Locking symfony/var-dumper (v4.4.16)
  - Locking theseer/tokenizer (1.2.0)
  - Locking tijsverkoyen/css-to-inline-styles (2.2.3)
  - Locking vlucas/phpdotenv (v3.6.7)
  - Locking webmozart/assert (1.9.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 88 installs, 0 updates, 0 removals
  - Downloading doctrine/inflector (2.0.3)
  - Downloading doctrine/lexer (1.2.1)
  - Downloading dragonmantank/cron-expression (v2.3.1)
  - Downloading symfony/polyfill-php80 (v1.20.0)
  - Downloading symfony/polyfill-php72 (v1.20.0)
  - Downloading symfony/polyfill-mbstring (v1.20.0)
  - Downloading symfony/var-dumper (v4.4.16)
  - Downloading symfony/service-contracts (v1.1.9)
  - Downloading symfony/polyfill-php73 (v1.20.0)
  - Downloading symfony/console (v4.4.16)
  - Downloading scrivo/highlight.php (v9.18.1.4)
  - Downloading psr/log (1.1.3)
  - Downloading monolog/monolog (2.1.1)
  - Downloading symfony/polyfill-ctype (v1.20.0)
  - Downloading phpoption/phpoption (1.7.5)
  - Downloading vlucas/phpdotenv (v3.6.7)
  - Downloading symfony/css-selector (v4.4.16)
  - Downloading tijsverkoyen/css-to-inline-styles (2.2.3)
  - Downloading symfony/routing (v4.4.16)
  - Downloading symfony/process (v4.4.16)
  - Downloading symfony/polyfill-intl-normalizer (v1.20.0)
  - Downloading symfony/polyfill-intl-idn (v1.20.0)
  - Downloading symfony/mime (v4.4.16)
  - Downloading symfony/http-foundation (v4.4.16)
  - Downloading symfony/http-client-contracts (v1.1.10)
  - Downloading symfony/event-dispatcher-contracts (v1.1.9)
  - Downloading symfony/event-dispatcher (v4.4.16)
  - Downloading symfony/debug (v4.4.16)
  - Downloading symfony/error-handler (v4.4.16)
  - Downloading symfony/http-kernel (v4.4.16)
  - Downloading symfony/finder (v4.4.16)
  - Downloading symfony/polyfill-iconv (v1.20.0)
  - Downloading egulias/email-validator (2.1.23)
  - Downloading swiftmailer/swiftmailer (v6.2.3)
  - Downloading paragonie/random_compat (v9.99.99)
  - Downloading ramsey/uuid (3.9.3)
  - Downloading opis/closure (3.6.1)
  - Downloading symfony/translation-contracts (v1.1.10)
  - Downloading symfony/translation (v4.4.16)
  - Downloading nesbot/carbon (2.41.5)
  - Downloading league/flysystem (1.0.70)
  - Downloading league/commonmark (1.5.7)
  - Downloading laravel/framework (v6.18.43)
  - Downloading filp/whoops (2.9.1)
  - Downloading facade/ignition-contracts (1.0.1)
  - Downloading facade/flare-client-php (1.3.7)
  - Downloading facade/ignition (1.16.4)
  - Downloading fideloper/proxy (4.4.1)
  - Downloading fzaninotto/faker (v1.9.1)
  - Downloading jakub-onderka/php-console-color (v0.2)
  - Downloading nikic/php-parser (v4.10.2)
  - Downloading dnoegel/php-xdg-base-dir (v0.1.1)
  - Downloading psy/psysh (v0.10.4)
  - Downloading laravel/tinker (v2.4.2)
  - Downloading hamcrest/hamcrest-php (v2.0.1)
  - Downloading mockery/mockery (1.3.3)
  - Downloading jakub-onderka/php-console-highlighter (v0.4)
  - Downloading nunomaduro/collision (v3.1.0)
  - Downloading phpdocumentor/type-resolver (1.4.0)
  - Downloading phpdocumentor/reflection-docblock (5.2.2)
  - Downloading doctrine/instantiator (1.4.0)
  - Downloading phpspec/prophecy (1.12.1)
  - Downloading myclabs/deep-copy (1.10.2)
  - Downloading phpunit/phpunit (8.5.9)
  - Installing doctrine/inflector (2.0.3): Extracting archive
  - Installing doctrine/lexer (1.2.1): Extracting archive
  - Installing dragonmantank/cron-expression (v2.3.1): Extracting archive
  - Installing symfony/polyfill-php80 (v1.20.0): Extracting archive
  - Installing symfony/polyfill-php72 (v1.20.0): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.20.0): Extracting archive
  - Installing symfony/var-dumper (v4.4.16): Extracting archive
  - Installing psr/container (1.0.0): Extracting archive
  - Installing symfony/service-contracts (v1.1.9): Extracting archive
  - Installing symfony/polyfill-php73 (v1.20.0): Extracting archive
  - Installing symfony/console (v4.4.16): Extracting archive
  - Installing scrivo/highlight.php (v9.18.1.4): Extracting archive
  - Installing psr/log (1.1.3): Extracting archive
  - Installing monolog/monolog (2.1.1): Extracting archive
  - Installing symfony/polyfill-ctype (v1.20.0): Extracting archive
  - Installing phpoption/phpoption (1.7.5): Extracting archive
  - Installing vlucas/phpdotenv (v3.6.7): Extracting archive
  - Installing symfony/css-selector (v4.4.16): Extracting archive
  - Installing tijsverkoyen/css-to-inline-styles (2.2.3): Extracting archive
  - Installing symfony/routing (v4.4.16): Extracting archive
  - Installing symfony/process (v4.4.16): Extracting archive
  - Installing symfony/polyfill-intl-normalizer (v1.20.0): Extracting archive
  - Installing symfony/polyfill-intl-idn (v1.20.0): Extracting archive
  - Installing symfony/mime (v4.4.16): Extracting archive
  - Installing symfony/http-foundation (v4.4.16): Extracting archive
  - Installing symfony/http-client-contracts (v1.1.10): Extracting archive
  - Installing symfony/event-dispatcher-contracts (v1.1.9): Extracting archive
  - Installing symfony/event-dispatcher (v4.4.16): Extracting archive
  - Installing symfony/debug (v4.4.16): Extracting archive
  - Installing symfony/error-handler (v4.4.16): Extracting archive
  - Installing symfony/http-kernel (v4.4.16): Extracting archive
  - Installing symfony/finder (v4.4.16): Extracting archive
  - Installing symfony/polyfill-iconv (v1.20.0): Extracting archive
  - Installing egulias/email-validator (2.1.23): Extracting archive
  - Installing swiftmailer/swiftmailer (v6.2.3): Extracting archive
  - Installing paragonie/random_compat (v9.99.99): Extracting archive
  - Installing ramsey/uuid (3.9.3): Extracting archive
  - Installing psr/simple-cache (1.0.1): Extracting archive
  - Installing opis/closure (3.6.1): Extracting archive
  - Installing symfony/translation-contracts (v1.1.10): Extracting archive
  - Installing symfony/translation (v4.4.16): Extracting archive
  - Installing nesbot/carbon (2.41.5): Extracting archive
  - Installing league/flysystem (1.0.70): Extracting archive
  - Installing league/commonmark (1.5.7): Extracting archive
  - Installing laravel/framework (v6.18.43): Extracting archive
  - Installing filp/whoops (2.9.1): Extracting archive
  - Installing facade/ignition-contracts (1.0.1): Extracting archive
  - Installing facade/flare-client-php (1.3.7): Extracting archive
  - Installing facade/ignition (1.16.4): Extracting archive
  - Installing fideloper/proxy (4.4.1): Extracting archive
  - Installing fzaninotto/faker (v1.9.1): Extracting archive
  - Installing jakub-onderka/php-console-color (v0.2): Extracting archive
  - Installing nikic/php-parser (v4.10.2): Extracting archive
  - Installing dnoegel/php-xdg-base-dir (v0.1.1): Extracting archive
  - Installing psy/psysh (v0.10.4): Extracting archive
  - Installing laravel/tinker (v2.4.2): Extracting archive
  - Installing hamcrest/hamcrest-php (v2.0.1): Extracting archive
  - Installing mockery/mockery (1.3.3): Extracting archive
  - Installing jakub-onderka/php-console-highlighter (v0.4): Extracting archive
  - Installing nunomaduro/collision (v3.1.0): Extracting archive
  - Installing webmozart/assert (1.9.1): Extracting archive
  - Installing phpdocumentor/reflection-common (2.2.0): Extracting archive
  - Installing phpdocumentor/type-resolver (1.4.0): Extracting archive
  - Installing phpdocumentor/reflection-docblock (5.2.2): Extracting archive
  - Installing phpunit/php-token-stream (3.1.1): Extracting archive
  - Installing sebastian/version (2.0.1): Extracting archive
  - Installing sebastian/type (1.1.3): Extracting archive
  - Installing sebastian/resource-operations (2.0.1): Extracting archive
  - Installing sebastian/recursion-context (3.0.0): Extracting archive
  - Installing sebastian/object-reflector (1.1.1): Extracting archive
  - Installing sebastian/object-enumerator (3.0.3): Extracting archive
  - Installing sebastian/global-state (3.0.0): Extracting archive
  - Installing sebastian/exporter (3.1.2): Extracting archive
  - Installing sebastian/environment (4.2.3): Extracting archive
  - Installing sebastian/diff (3.0.2): Extracting archive
  - Installing sebastian/comparator (3.0.2): Extracting archive
  - Installing phpunit/php-timer (2.1.2): Extracting archive
  - Installing phpunit/php-text-template (1.2.1): Extracting archive
  - Installing phpunit/php-file-iterator (2.0.2): Extracting archive
  - Installing theseer/tokenizer (1.2.0): Extracting archive
  - Installing sebastian/code-unit-reverse-lookup (1.0.1): Extracting archive
  - Installing phpunit/php-code-coverage (7.0.10): Extracting archive
  - Installing doctrine/instantiator (1.4.0): Extracting archive
  - Installing phpspec/prophecy (1.12.1): Extracting archive
  - Installing phar-io/version (2.0.1): Extracting archive
  - Installing phar-io/manifest (1.0.3): Extracting archive
  - Installing myclabs/deep-copy (1.10.2): Extracting archive
  - Installing phpunit/phpunit (8.5.9): Extracting archive
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
```
