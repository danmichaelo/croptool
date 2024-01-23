#!/bin/bash
cp config.dist.ini config.ini
heroku-php-apache2 .
