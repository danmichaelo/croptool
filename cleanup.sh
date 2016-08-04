#!/bin/sh
DIR=/data/project/croptool/public_html/files/
NFILES=`find $DIR -type f -mmin +600 -print -delete | wc -l`
echo "$(date +'%Y-%m-%d %H:%M') Deleted $NFILES files"
