## CropTool for nccommons.org
* [Change I made to the code.](https://github.com/MrIbrahem/nccroptool/pull/2/files)

```
mkdir $HOME/local
mkdir $HOME/local/bin
cp /usr/bin/convert $HOME/local/bin/convert

```

### install


```
rm -rf croptool
git clone https://github.com/danmichaelo/croptool.git
cp -rn croptool/* .
```

```
npm install
```

```
webservice --backend=kubernetes php8.2 shell
composer install
```

```
npx gulp build

docker compose run phpfpm php generate-key.php

exit
```

```
webservice --backend=kubernetes php8.2 start
```
