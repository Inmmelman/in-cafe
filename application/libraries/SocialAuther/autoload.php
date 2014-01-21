<?php

spl_autoload_register('autoload');

function autoload($class)
{
    var_dump($class);
    require_once str_replace('/SocialAuther/', '', str_replace('\\', '/', $class) . '.php');
}