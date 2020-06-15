curl -sS https://getcomposer.org/installer | php
php composer.phar install
php composer.phar require --dev phpunit/phpunit ^9

# PHPUnitインストール
./vendor/bin/phpunit tests
php composer.phar dump-autoload
