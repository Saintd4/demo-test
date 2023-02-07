<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
};
//example - both are the same

/*if ($_SERVER['REQUEST_URI'] === '/') {
    echo 'bg-gray-900 text-white';
} else {
    echo 'text-gray-300';
}

echo $_SERVER['REQUEST_URI']=== '/' ? 'bg-gray-900 text-white' : 'text-gray-300';*/

function urlIs ($value){
    $_SERVER['REQUEST_URI'] === $value;
}