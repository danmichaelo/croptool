CropTool
===========================

[![Stories in Ready](https://badge.waffle.io/danmichaelo/croptool.png?label=ready)](http://waffle.io/danmichaelo/croptool)

Tool for cropping images at Wikimedia Commons. The current official installation lives at http://tools.wmflabs.org/croptool/ 

CropTool uses [Jcrop](//github.com/tapmodo/Jcrop), [AngularJS](//angularjs.org/) and Sean Huber's [Curl wrapper for php](//github.com/shuber/curl).

Checklist:

	1. `composer install`
	2. `cp config.dist.ini config.ini` and edit
    3. Check that the server can write to `data` and `public_html/files`.
    4. `vendor/bin/phpunit`

