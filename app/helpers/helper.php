<?php

function env($key, $default = ''){
    if(isset($_ENV[$key])){
        return $_ENV[$key];
    }
    return $default;
}