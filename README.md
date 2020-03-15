## CropTool

[CropTool](https://tools.wmflabs.org/croptool/) is a tool for cropping image files
at Wikimedia Commons and other Wikimedia sites using the MediaWiki API with OAuth.
[Help page on Commons](https://commons.wikimedia.org/wiki/Commons:CropTool).


* Supports JPEG, PNG and (animated) GIF files, and also single pages from
  DJVU and PDF files.
* JPEGs can be cropped either losslessly using [jpegtran](http://jpegclub.org/jpegtran/)
  or pixel perfect using [ImageMagick](https://www.imagemagick.org/).
* Crop preview can be initialized from query string parameters:
  `?title=Example.jpg&left=10&top=10&width=150&height=100`
  or
  `?title=Example.jpg&left=10&top=10&right=10&bottom=10`
* Detects [`{{Remove border}}`](https://commons.wikimedia.org/wiki/Template:Remove_border),
  [Category:Images with borders](https://commons.wikimedia.org/wiki/Category:Images_with_borders),
  [`{{Watermark}}`](https://commons.wikimedia.org/wiki/Template:Watermark) and
  [`{{Trimming}}`](https://commons.wikimedia.org/wiki/Template:Trimming), and
  provides check boxes for optional removal of these upon cropping.
* The result can replace the original file or be uploaded as a new one.
* If the result is uploaded as a new file on Wikimedia Commons,
  * the `{{Extracted from}}` template is added to the new file, and the
  `{{Image extracted}}` template is added or updated on the original.
  * some templates are not copied to the new page: quality assessment templates ([Featured picture](https://commons.wikimedia.org/wiki/Template:Featured picture),
  [Valued image](https://commons.wikimedia.org/wiki/Template:Valued_image),
  [Quality image](https://commons.wikimedia.org/wiki/Template:Quality_image),
  [Picture of the day](https://commons.wikimedia.org/wiki/Template:Picture_of_the_day),
  [Assessments](https://commons.wikimedia.org/wiki/Template:Assessments)),
  license review templates and crop tracking templates
  ([Extracted from](https://commons.wikimedia.org/wiki/Template:Extracted_from)
  and [Image extracted](https://commons.wikimedia.org/wiki/Template:Image_extracted)).
* Stops users from cropping images waiting for license review (having
  [`{{Flickrreview}}`](https://commons.wikimedia.org/wiki/Template:Flickrreview)
  without any parameters, or some of the `User:FlickreviewR` subtemplates),
  since images should be reviewed before being altered.
* Adds [`{{Orphaned non-free revisions}}`](http://en.wikipedia.org/wiki/Template:orfurrev)
  when cropping non-free media on English Wikipedia.

### Setting up a development environment

The easiest way to setup a development environment is by using Vagrant. If you have Vagrant installed, just type
```
vagrant up
```
This will create a virtual machine with the static IP 172.28.128.4 (you can change this in the `Vagrantfile` if needed). To test the MediaWiki OAuth authentication, you can redirect `tools.wmflabs.org` to your newly created virtualbox machine by adding an entry to your `/etc/hosts` file:

    172.28.128.4 tools.wmflabs.org

If you then visit `https://tools.wmflabs.org/croptool` in your browser, the content will be fetched from your virtualbox machine. The Vagrant provisioner has generated a self-signed certificate, so https will work, but the browser will of course warn you about the certificate being self-signed.

Of course you need to remember to remove the entry from `/etc/hosts` when you're done testing.

### Setting up a lightweight development environment

As a lightweight alternative for a development environment, we provide a `Caddyfile` which is meant to be used with [Caddy](https://caddyserver.com/). This allows to do frontend development without the need to boot a virtual machine.

1. Run `caddy` in the source directory
2. Add `127.0.0.1 tools.wmflabs.org` to your `/etc/hosts`
3. Open https://tools.wmflabs.org:7890/croptool/ and accept the certificate warning (since we issue a self-signed certificate)

### Deployment notes

To get `jpegtran`, we fetch the latest `jpegsrc.xxx.tar.gz` from the Independent JPEG Group. Note that the server returns "403 Forbidden" if you use the default curl user agent string.

```bash
curl -A "CropTool/0.1 (http://tools.wmflabs.org/croptool)" "http://www.ijg.org/files/jpegsrc.v9a.tar.gz" | tar -xz
cd jpeg-*
./configure
make
make test
```

#### Download deps and configure croptool:

1. `composer install --optimize-autoloader`
2. `cp config.dist.ini config.ini` and insert OAuth info and the path to jpegtran.
3. Check that the server can write to `logs` and `public_html/files`.
4. `vendor/bin/phpunit`
5. `crontab crontab.tools` to setup cronjobs.
6. `php generate-key.php`

#### Frontend build:


The Node version on ToolForge is dead old (v0.10.25).
Luckily, they provide a kubernetes package with a slightly more decent version (v6.9.1):

    webservice --backend=kubernetes nodejs shell

The npm version (1.4.21) is broken though, so we need to do a local npm install:

    npm install npm
    node_modules/.bin/npm install

Finally, the gulp build:

    gulp build

