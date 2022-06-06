#!/bin/bash
DIR=/data/project/croptool/public_html/files/
NFILES=`find $DIR -type f -mmin +60 -name '[!.]*' -print -delete | wc -l`
echo "$(date +'%Y-%m-%d %H:%M') Deleted $NFILES files"
