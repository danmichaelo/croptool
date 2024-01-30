#!/bin/bash
php generate-key.php
exec lighttpd -f .lightpd.conf -D
