#!/bin/bash
pecl install imagemagick
pecl install exif
pecl install zip

# curl -A "CropTool/0.1 (https://croptool.toolforge.org)" "http://www.ijg.org/files/jpegsrc.v9a.tar.gz" | tar -xz
# cd jpeg-*
# ./configure
# make
# make test
# composer install --optimize-autoloader
cp config.dist.ini config.ini
vendor/bin/phpunit
php generate-key.php
npx gulp build
heroku-php-apache2 .
