# Toolserver Intuition [![Build Status](https://travis-ci.org/Krinkle/TsIntuition.png)](https://travis-ci.org/Krinkle/TsIntuition)

## Usage

To use it in a tool, read the  [Usage documentation](https://github.com/Krinkle/TsIntuition/wiki/Documentation#usage).

## Quick start

```bash
git clone --recursive https://github.com/Krinkle/TsIntuition.git
```

## Getting involved

### Testing

If you haven't already, [install PHPUnit](http://www.phpunit.de/manual/current/en/installation.html) and make sure it is in your `PATH`. The easiest way to install it is through [PEAR](http://pear.php.net/manual/en/installation.getting.php) (you may have to use `sudo`):
```
pear channel-discover pear.phpunit.de
pear update-channels
pear install --alldeps phpunit/PHPUnit
```

Run tests:
```
phpunit --configuration tests/phpunit/phpunit.xml
```

Or simply `npm test` (if you have node installed).

### Misc

For building of `AUTHORS.txt` (and linting of code base in the future) we use [node-grunt](https://github.com/gruntjs/grunt).
Make sure you have [nodejs](http://nodejs.org/) installed and grunt with `npm install -g grunt`.
Then from inside the root directory of this project:
```
npm install
```

* To regenerate the `AUTHORS.txt` list: `$ grunt authors`
* The default action is to update submodules and lint the grunt file: `$ grunt`
