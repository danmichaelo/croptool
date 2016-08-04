#!/usr/bin/env python
# Why this script? See https://phabricator.wikimedia.org/T104799
from __future__ import print_function
import requests
import subprocess
from datetime import datetime

# 1) Gather data
res = requests.get('https://tools.wmflabs.org/croptool/server-statistics')
res.text.split('\n')
items = [line.split(': ') for line in res.text.split('\n')]
items = {i[0]: i[1] for i in items if len(i) == 2}
conncount = int(items.get('fastcgi.active-requests', 0))

# 2) Restart if necessary
if conncount > 150:
    now = datetime.now()
    now = now.replace(microsecond=0, second=0)
    print('{} Restarted. Connection count was: {}\n'.format(now.isoformat(), conncount))
    subprocess.call(['webservice', 'restart'])
