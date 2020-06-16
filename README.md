# php-unit-training

PHPUnit練習用リポジトリです。

## はじめに

```
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```

## PHPUnit実行方法

```
./vendor/bin/phpunit tests
```

## その他

テスト実行時に、クラスが見つからないとエラーが出た場合は、下記を実行してください。

```
php composer.phar dump-autoload
```
