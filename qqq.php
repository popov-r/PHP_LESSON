<?php
$file = 'dict.txt';

error_reporting(E_ALL);
ini_set('display_errors', true);
echo 'phpversion: ', phpversion(), "\n";
echo 'uname: ', php_uname("s r"), "\n"; // name/release of the operating system
echo 'sapi: ', php_sapi_name(), "\n";

echo $file, file_exists($file) ? ' exists' : ' does not exist', "\n";
echo $file, is_readable($file) ? ' is readable' : ' is NOT readable', "\n";
echo $file, is_writable($file) ? ' is writable' : ' is NOT writable', "\n";

$fp = fopen($file, 'a+');
if ( !$fp ) {
  echo 'last error: ';
  var_dump(error_get_last());
}
else {
  echo "ok.\n";
}
