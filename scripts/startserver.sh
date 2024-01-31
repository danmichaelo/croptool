#!/bin/bash
php generate-key.php
heroku-php-apache2 -C ./apache.conf public_html/
