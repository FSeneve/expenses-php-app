<?php

function dd(mixed $value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    die();
}