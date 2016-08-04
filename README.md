## CropTool

[![Stories in Ready](https://badge.waffle.io/danmichaelo/croptool.png?label=ready)](https://waffle.io/danmichaelo/croptool)

Tool for cropping images at Wikimedia Commons. Lives at http://tools.wmflabs.org/croptool/ 

CropTool uses [jpegtran](http://jpegclub.org/jpegtran/), [Jcrop](//github.com/tapmodo/Jcrop), [AngularJS](//angularjs.org/) and Sean Huber's [Curl wrapper for php](//github.com/shuber/curl).

### Setting up a development environment

The easiest way to setup a development environment is by using Vagrant. If you have Vagrant installed, just type
```
vagrant up
```
This will create a virtual machine with the static IP 172.28.128.4 (you can change this in the `Vagrantfile` if needed). To test the MediaWiki OAuth authentication, you can redirect `tools.wmflabs.org` to your newly created virtualbox machine by adding an entry to your `/etc/hosts` file:

    172.28.128.4 tools.wmflabs.org

If you then visit `https://tools.wmflabs.org/croptool` in your browser, the content will be fetched from your virtualbox machine. The Vagrant provisioner has generated a self-signed certificate, so https will work, but the browser will of course warn you about the certificate being self-signed.

Of course you need to remember to remove the entry from `/etc/hosts` when you're done testing.

### Deployment notes

To get `jpegtran`, we fetch the latest `jpegsrc.xxx.tar.gz` from the Independent JPEG Group. Note that the server returns "403 Forbidden" if you use the default curl user agent string.

```bash
curl -A "CropTool/0.1 (http://tools.wmflabs.org/croptool)" "http://www.ijg.org/files/jpegsrc.v9a.tar.gz" | tar -xz
cd jpeg-*
./configure
make
make test
```

Download deps and configure croptool:

1. `composer install`
2. `cp config.dist.ini config.ini` and insert OAuth info and the path to jpegtran.
3. Check that the server can write to `data`, `logs` and `public_html/files`.
4. `vendor/bin/phpunit`
5. `crontab crontab.tools` to setup cronjobs.
6. `npm install`
7. `gulp build`
