## CropTool

[CropTool](https://croptool.toolforge.org/) is a tool for cropping image files
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

1. Request an OAuth 1.0 consumer at https://meta.wikimedia.org/wiki/Special:OAuthConsumerRegistration/propose with

- Callback URL: https://localhost:7878/
- Allow consumer to specify a callback in requests
- Grants: "Edit existing pages", "Create, edit, and move pages", "Upload new files" and "Upload, replace, and move files"

2. Copy `config.dist.ini` to `config.ini` and add the consumer token and secret token to `config.ini`

3. Install dependencies using [Composer](https://getcomposer.org/) and [NPM](https://nodejs.org/en/):

```
composer install
npm install
```

4. Build the frontend:

```
npx gulp build
```

5. Generate secret for encrypted cookies:

```
php generate-key.php
```

6. Start the development server on https://localhost:7878/

```
docker-compose up
```

Note that you should be able to login and preview cropping without waiting for the OAuth consumer to be accepted.

### Deployment notes

To get `jpegtran`, we fetch the latest `jpegsrc.xxx.tar.gz` from the Independent JPEG Group. Note that the server returns "403 Forbidden" if you use the default curl user agent string.

```bash
curl -A "CropTool/0.1 (https://croptool.toolforge.org)" "http://www.ijg.org/files/jpegsrc.v9a.tar.gz" | tar -xz
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

On Toolforge, to use an up-to-date version of Node for installing dependencies, run:

    $ webservice --backend=kubernetes node10 shell

This should start a new shell, from which you can run:

    $ npm install npm
    $ gulp build

