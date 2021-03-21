# 使用コマンド

-   Laravel のインストール
    $ composer create-project laravel/laravel TodoApp

-   バージョン指定してインストール
    $ composer create-project laravel/laravel LaravelMiniCMS "8.\*"

-   laravel-ide-helper のインストール
    $ composer require --dev barryvdh/laravel-ide-helper

-   Model の追加
    php artisan make:model -a Task
    php artisan make:request TaskRequest

-   マイグレーション
    php artisan migrate

-   シーダの実行
    php artisan db:seed

-   laravel 起動
    php artisan serve

-   IDE ヘルパー
    php artisan ide-helper:generate

php artisan ide-helper:models "App\Models\Task"

-   テストファイルの作成
    php artisan make:test TaskTest
    ./vendor/bin/phpunit tests/Feature/TaskTest.php
