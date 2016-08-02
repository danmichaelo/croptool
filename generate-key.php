<?php

require_once('vendor/autoload.php');

use Defuse\Crypto\Key;

if (file_exists('croptool-secret-key.txt')) {
    die('Key already exists, will not overwrite.');
}
$key = Key::createNewRandomKey();
file_put_contents('croptool-secret-key.txt', $key->saveToAsciiSafeString());
chmod('croptool-secret-key.txt', 0600);
