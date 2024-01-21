<?php declare(strict_types= 1);

use BlessingNyamajiwa\Framework\Http\Request;

require_once dirname(__DIR__) ."/vendor/autoload.php";

// dd("Test Output!");

// Request received
$request = Request::createFromGlobals();
dd($request);

// Perform some logic

// Send response (string of content)
echo "Hello world";