[![Stories in Ready](https://badge.waffle.io/danmichaelo/croptool.png?label=ready)](https://waffle.io/danmichaelo/croptool)  
CropTool
===========================

Tool for cropping images at Wikimedia Commons. The current official installation lives at http://tools.wmflabs.org/croptool/ 

CropTool uses [Jcrop](//github.com/tapmodo/Jcrop), [AngularJS](//angularjs.org/) and Sean Huber's [Curl wrapper for php](//github.com/shuber/curl).

Setup:

	1. `composer install`
	2. `chown www-data:www-data data`
	2. `chown www-data:www-data public_html/files`
	3. `cp config.dist.yml config.yml` and edit

