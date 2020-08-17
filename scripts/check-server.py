#!/usr/bin/env python
# Why this script? See https://phabricator.wikimedia.org/T104799
from __future__ import print_function
import requests
import subprocess
import sys
from datetime import datetime
from gitterpy.client import GitterClient

# Once create instance
gitter = GitterClient('bf8951be6f67edb1b4536595b442453e07e7e899')

def restart_server():
    subprocess.call(['/usr/local/bin/webservice', 'restart'])

try:
    res = requests.get('https://croptool.toolforge.org/server-statistics', timeout=10)
except requests.exceptions.Timeout:
    print('Timeout when checking server-statistics. Restarting')
    gitter.messages.send('croptool/Lobby', 'Timeout when checking server-statistics. @danmichaelo')

    # restart_server()
    sys.exit(0)

res.text.split('\n')
items = [line.split(': ') for line in res.text.split('\n')]
items = {i[0]: i[1] for i in items if len(i) == 2}
conncount = int(items.get('fastcgi.active-requests', 0))

# 2) Restart if necessary
if conncount > 50:
    now = datetime.now()
    now = now.replace(microsecond=0, second=0)
    gitter.messages.send('croptool/Lobby', 'Server has too many connections: %d. @danmichaelo' % conncount)
    print('{} Restarted. Connection count was: {}\n'.format(now.isoformat(), conncount))
    # restart_server()
    sys.exit(0)


# gitter.messages.send('croptool/Lobby', 'Bleep bloop')
print('Server OK')
