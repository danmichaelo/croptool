#!/bin/bash
php generate-key.php
exec lightpd -f .lightpd.conf -D
