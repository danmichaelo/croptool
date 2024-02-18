#!/bin/bash
DIR=/workspace/public_html/files
NFILES=`find $DIR -type f -mmin +60 -name '[!.]*' -print -delete | wc -l`
echo "$(date +'%Y-%m-%d %H:%M') Deleted $NFILES files" >> $TOOL_DATA_DIR/logs/last_cleanup.log
