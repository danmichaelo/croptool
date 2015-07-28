#!/usr/bin/env python
import requests
import subprocess
from datetime import datetime
import plotly.plotly as py
from plotly.graph_objs import *

# 1) Gather data
now = datetime.now()
now = now.replace(microsecond=0, second=0)
res = requests.get('https://tools.wmflabs.org/croptool/server-statistics')
res.text.split('\n')
items = [line.split(': ') for line in res.text.split('\n')]
items = {i[0]: i[1] for i in items if len(i) == 2}
conncount = int(items.get('fastcgi.active-requests', 0))

# 2) Restart if necessary
if conncount > 150:
    with open('check-server.log', 'a') as logfile:
        logfile.write('{} Restarted. Connection count was: {}\n'.format(now.isoformat(), conncount))
    subprocess.call(['webservice', 'restart'])

# 3) Write to file
with open('connections.csv', 'a') as datafile:
    datafile.write('{}\t{}\n'.format(now.isoformat(), conncount))

# 4) Plot
s = py.Stream('658je052cx')
s.open()
s.write(dict(x=now, y=conncount))
s.close()

