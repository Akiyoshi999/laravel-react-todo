# 使用コマンド

Laravel のインストール
$ composer create-project laravel/laravel TodoApp

バージョン指定してインストール
$ composer create-project laravel/laravel LaravelMiniCMS "8.\*"

laravel-ide-helper のインストール
$ composer require --dev barryvdh/laravel-ide-helper

Model の追加
php artisan make:model -a Task

 マイグレーション
php artisan migrate

シーダの実行
php artisan db:seed
