## CropTool

[CropTool](https://croptool.toolforge.org/) is a tool for cropping image files
at Wikimedia Commons and other Wikimedia sites using the MediaWiki API with OAuth.

* [Help page on Commons](https://commons.wikimedia.org/wiki/Commons:CropTool).
* [Tool info on WikiTech](https://wikitech.wikimedia.org/wiki/Tool:CropTool)

Features:

* Supports JPEG, PNG, SVG and (animated) GIF files, and also single pages from
  DjVu and PDF files.
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

2. Copy `config.dev.ini` to `config.ini` and add the consumer token and secret token to `config.ini` and check the default paths for the dependencies.

3. Install dependencies using [Composer](https://getcomposer.org/) and [NPM](https://nodejs.org/en/):

```
docker compose run phpfpm composer install
npm install
```

4. Build the frontend:

```
npx gulp build
```

5. Generate secret for encrypted cookies:

```
docker compose run phpfpm php generate-key.php
```

6. Start the development server on https://localhost:7878/

```
docker-compose up
```

Note that you should be able to login and preview cropping without waiting for the OAuth consumer to be accepted.

### Deployment notes

* `ssh tools-login.wmflabs.org`
* `become croptool`
* `toolforge build start https://github.com/danmichaelo/croptool.git`
* `toolforge webservice --backend=kubernetes --mount=all buildservice restart`

First-time setup:

- Copy `config.prod.ini` into the home directory, and add OAuth information
- Creates a `public_files` directory in the home directory and set it to be readable and writable by others
