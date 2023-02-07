<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    require 'controllers/index.php';
}
else if ($uri === '/controllers/about'){
    require 'controllers/about.php';
} else if($uri === '/contact'){
    require 'controllers/contact.php';
}
