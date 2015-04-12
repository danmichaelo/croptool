#!/usr/bin/env bash

export DEBIAN_FRONTEND=noninteractive

apt-get update > /dev/null

echo "Installing Git"
apt-get install -y git > /dev/null

echo "Installing jpegtran"
apt-get install -y libjpeg-progs > /dev/null

echo "Installing Nginx"
apt-get install -y nginx > /dev/null

echo "Installing PHP"
apt-get install -y php5-fpm php5-cli php5-mcrypt php5-imagick php5-curl > /dev/null
ln -sf /etc/php5/mods-available/mcrypt.ini /etc/php5/fpm/conf.d/20-mcrypt.ini
ln -sf /etc/php5/mods-available/mcrypt.ini /etc/php5/cli/conf.d/20-mcrypt.ini

echo "Configuring Nginx"
if [[ ! -e /etc/nginx/server.key ]]; then
	echo "Generate Nginx server private key..."
	genrsa="$(openssl genrsa -out /etc/nginx/server.key 2048 2>&1)"
	echo $genrsa
fi
if [[ ! -e /etc/nginx/server.csr ]]; then
	echo "Generate Certificate Signing Request (CSR)..."
	openssl req -new -batch -key /etc/nginx/server.key -out /etc/nginx/server.csr
fi
if [[ ! -e /etc/nginx/server.crt ]]; then
	echo "Sign the certificate using the above private key and CSR..."
	signcert="$(openssl x509 -req -days 365 -in /etc/nginx/server.csr -signkey /etc/nginx/server.key -out /etc/nginx/server.crt 2>&1)"
	echo $signcert
fi
cp /vagrant/provision/nginx_vhost /etc/nginx/sites-available/nginx_vhost
ln -sf /etc/nginx/sites-available/nginx_vhost /etc/nginx/sites-enabled/
rm -f /etc/nginx/sites-available/default

# Since we cannot chmod in a synced folder, we change the Nginx user 
# from 'www-data' to 'vagrant' instead.
sed -i 's/user = www-data/user = vagrant/g' /etc/php5/fpm/pool.d/www.conf
sed -i 's/group = www-data/group = vagrant/g' /etc/php5/fpm/pool.d/www.conf

if [[ ! -d /var/www/html/ ]]; then
	mkdir -p /var/www/html/
fi

echo "Hello world. Looking for <a href='/croptool/'>CropTool</a>?" >| /var/www/html/index.html
ln -sf /vagrant/public_html /var/www/html/croptool

echo "Restarting Nginx and PHP-FPM"
service nginx restart > /dev/null
service php5-fpm restart > /dev/null

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
	composer install --no-progress --prefer-dist
fi

chmod ug+x ./vendor/phpexiftool/exiftool/exiftool
