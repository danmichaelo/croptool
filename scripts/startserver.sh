#!/bin/bash
exec /layers/fagiani_apt/apt/usr/sbin/lighttpd -D -f .lighttpd.conf -m /layers/fagiani_apt/apt/usr/lib/lighttpd/
