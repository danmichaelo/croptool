[![Stories in Ready](https://badge.waffle.io/danmichaelo/croptool.png?label=ready)](http://waffle.io/danmichaelo/croptool)

Tool for cropping images at Wikimedia Commons. Lives at http://tools.wmflabs.org/croptool/ 

CropTool uses [jpegtran](http://jpegclub.org/jpegtran/), [Jcrop](//github.com/tapmodo/Jcrop), [AngularJS](//angularjs.org/) and Sean Huber's [Curl wrapper for php](//github.com/shuber/curl).

### Install

Fetch latest jpegsrc.xxx.tar.gz from Independent JPEG Group. We only need jpegtran, so we remove the rest of the package. Note that the server returns "403 Forbidden" if you use the default curl user agent string.

```bash
curl -A "CropTool/0.1 (http://tools.wmflabs.org/croptool)" "http://www.ijg.org/files/jpegsrc.v9a.tar.gz" | tar -xz
cd jpeg-*
./configure
make
cp jpegtran ../
cd ..
rm -r jpeg-*
```

Download deps and configure croptool:
    1. `composer install`
    2. `cp config.dist.ini config.ini` and edit
    3. Check that the server can write to `data` and `public_html/files`.
    4. `vendor/bin/phpunit`

