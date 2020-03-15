#!/usr/bin/env bash

export DEBIAN_FRONTEND=noninteractive

apt-get update > /dev/null

echo "Installing essentials"
apt-get install -y vim \
	build-essential \
	gcc \
	make \
	autoconf \
	libc-dev \
	pkg-config \
	unzip \
	git \
	curl \
	> /dev/null

echo "Installing jpegtran"
apt-get install -y libjpeg-progs > /dev/null

echo "Installing Lighttpd"
apt-get install -y lighttpd > /dev/null

echo "Installing Node.js and NPM"
curl -sL https://deb.nodesource.com/setup_10.x | bash - > /dev/null
apt-get install -y nodejs  > /dev/null

echo "Installing djvulibre"
apt-get install -y djvulibre-bin > /dev/null

echo "Installing Imagemagick"
apt-get install -y imagemagick libmagickwand-dev > /dev/null

echo "Installing PHP"
apt install -y apt-transport-https lsb-release ca-certificates
wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg
echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list
apt update
apt install -y php7.4 \
	php7.4-dom \
	php7.4-fpm \
	php7.4-curl \
	php7.4-cli \
	php7.4-common \
	php7.4-json \
	php7.4-opcache \
	php7.4-mysql \
	php7.4-zip \
	php7.4-fpm \
	php7.4-mbstring \
	php7.4-imagick \
	> /dev/null

echo "Configuring Lighttpd"
chown -R vagrant:vagrant /var/www
chown -R vagrant:vagrant /var/log/lighttpd
if [[ ! -e /etc/lighttpd/certs/lighttpd.pem ]]; then
	echo "Generating SSL key"
	mkdir -p /etc/lighttpd/certs
	cd /etc/lighttpd/certs
	openssl req -new -batch -x509 -days 365 -nodes -subj "/CN=tools.wmflabs.org" \
	   -keyout lighttpd.pem -out lighttpd.pem 2>/dev/null
	chmod 400 lighttpd.pem
fi
sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=1/g' /etc/php/7.4/fpm/php.ini
sed -i 's/memory_limit = .*/memory_limit = 512M/g' /etc/php/7.4/fpm/php.ini
sed -i 's/www-data/vagrant/g' /etc/php/7.4/fpm/pool.d/www.conf
cp /vagrant/provision/15-php-fpm.conf /etc/lighttpd/conf-available/15-php-fpm.conf
cp /vagrant/provision/lighttpd.conf /etc/lighttpd/lighttpd.conf
lighttpd-enable-mod fastcgi > /dev/null
lighttpd-enable-mod php-fpm > /dev/null

if [[ ! -d /var/www/ ]]; then
	mkdir -p /var/www/
fi
echo "Hello world. Looking for <a href='/croptool/'>CropTool</a>?" >| /var/www/index.html
ln -sf /vagrant/public_html /var/www/croptool

service php7.4-fpm restart > /dev/null
service lighttpd restart > /dev/null

# Composer

cd /vagrant

if [[ -n "$(composer --version --no-ansi 2>/dev/null | grep 'Composer version')" ]]; then
	echo "Updating Composer..."
	composer self-update

	# rm -rf vendor composer.lock
	echo "Updating Composer packages"
	composer update --no-progress --prefer-dist
else
	echo "Installing Composer..."
	curl -sS https://getcomposer.org/installer | php > /dev/null
	chmod +x composer.phar
	mv composer.phar /usr/local/bin/composer

	echo "Installing Composer packages"
	rm composer.lock
	composer install --no-progress --prefer-dist
fi

echo "Installing npm packages and gulp build"
npm install -g gulp --silent
npm install --silent
gulp build

if [[ ! -f croptool-secret-key.txt/ ]]; then
	echo "Creating key"
	php generate-key.php
fi

# chmod ug+x ./vendor/phpexiftool/exiftool/exiftool
