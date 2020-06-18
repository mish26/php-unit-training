# php-unit-training

PHPUnit練習用リポジトリです。

## はじめに

```
curl -sS https://getcomposer.org/installer | php
php composer.phar install
```

## PHPUnit実行方法

```
# testsディレクトリ配下の、すべてのテストを実行する
./vendor/bin/phpunit tests

# testsディレクトリ配下の、特定のテストクラスのみ実行する
./vendor/bin/phpunit tests/EmailTest.php
```

## その他

テスト実行時に、クラスが見つからないとエラーが出た場合は、下記を実行してください。

```
php composer.phar dump-autoload
```
