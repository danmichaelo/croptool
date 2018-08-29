#!/usr/bin/env bash

export DEBIAN_FRONTEND=noninteractive

apt-get update > /dev/null

echo "Installing Git"
apt-get install -y git > /dev/null

echo "Installing jpegtran"
apt-get install -y libjpeg-progs > /dev/null

echo "Installing Lighttpd"
apt-get install -y lighttpd > /dev/null

echo "Installing Node.js and NPM"
apt-get install -y build-essential
curl -sL https://deb.nodesource.com/setup_8.x | bash -
apt-get install -y nodejs

echo "Installing djvulibre"
apt-get install -y djvulibre-bin > /dev/null

echo "Installing Imagemagick"
apt-get install -y imagemagick > /dev/null

echo "Installing PHP"
apt-get install -y php5-fpm php5-cli php5-imagick php5-curl > /dev/null

echo "Configuring Lighttpd"
chown -R vagrant:vagrant /var/www
chown -R vagrant:vagrant /var/log/lighttpd
if [[ ! -e /etc/lighttpd/certs/lighttpd.pem ]]; then
	mkdir -p /etc/lighttpd/certs
	cd /etc/lighttpd/certs
	openssl req -new -x509 -keyout lighttpd.pem -out lighttpd.pem -days 365 -nodes -subj "/CN=tools.wmflabs.org" > /dev/null
	chmod 400 lighttpd.pem
fi
sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=1/g' /etc/php5/fpm/php.ini
sed -i 's/memory_limit = .*/memory_limit = 512M/g' /etc/php5/fpm/php.ini
sed -i 's/www-data/vagrant/g' /etc/php5/fpm/pool.d/www.conf
cp /vagrant/provision/15-php-fpm.conf /etc/lighttpd/conf-available/15-php-fpm.conf
cp /vagrant/provision/lighttpd.conf /etc/lighttpd/lighttpd.conf
lighttpd-enable-mod fastcgi > /dev/null
lighttpd-enable-mod php-fpm > /dev/null

if [[ ! -d /var/www/ ]]; then
	mkdir -p /var/www/
fi
echo "Hello world. Looking for <a href='/croptool/'>CropTool</a>?" >| /var/www/index.html
ln -sf /vagrant/public_html /var/www/croptool

service php5-fpm restart > /dev/null
service lighttpd restart > /dev/null

# Composer

cd /vagrant

if [[ -n "$(composer --version --no-ansi | grep 'Composer version')" ]]; then
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

# chmod ug+x ./vendor/phpexiftool/exiftool/exiftool
