<?php

// *_*_*_*_*_*_*_*_*_*
// uncomment these in production
// ini_set('display_errors', 'Off');
// error_reporting(0);
// *_*_*_*_*_*_*_*_*_*
ini_set('log_errors', TRUE); // Error logging
ini_set('error_log', 'your/path/to/errors.log'); // Logging file
ini_set('log_errors_max_len', 1024); // Logging file size

// comment these out in production
ini_set('display_errors', 'On');
error_reporting(E_All);

spl_autoload_register(function($class) {
  require_once "core/{$class}.php";
});

defined('LNBPATH') or define('LNBPATH', __DIR__);
defined('LNBURL') or define('LNBURL', 'http://localhost/');

function base_url($location) {return LNBURL.'/'.$location;}
function css_url($location) {return LNBURL.'/assets/css/'.$location;}
function js_url($location) {return LNBURL.'/assets/js/'.$location;}
function image_url($location) {return LNBURL.'/assets/img/'.$location;}

/* Example Usage
** <?= base_url('index.php') ?> <?= css_url('app.css') ?> 
** <?= js_url('app.js') ?> <?= image_url('showcase.png') ?> 
* * * * * * * * * * * * * * * * * */

require_once 'functions.php';
