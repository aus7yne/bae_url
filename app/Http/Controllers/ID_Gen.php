<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class ID_Gen extends Controller
{
/**
* Generate a more truly "random" alpha-numeric string.
*
* @param  int  $length
* @return string
*
* @throws \RuntimeException
*/
public static function random($length = 6)
{
if ( ! function_exists('openssl_random_pseudo_bytes'))
{
    throw new RuntimeException('OpenSSL extension is required.');
}

$bytes = openssl_random_pseudo_bytes($length * 2);

if ($bytes === false)
{
    throw new RuntimeException('Unable to generate random string.');
}

return substr(str_replace(array('/', '+', '='), '', base64_encode($bytes)), 0, $length);
}

/**
* Generate a "random" alpha-numeric string.
*
* Should not be considered sufficient for cryptography, etc.
*
* @param  int  $length
* @return string
*/
public static function quickRandom($length = 6)
{
$pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
}
}
