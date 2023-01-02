<?php

include "includes/database.class.php";
include "includes/session.class.php";
include "includes/user.class.php";
include "includes/usersession.class.php";

global $__site_config;
$__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'] . '\..\photogramconfig.json');

session::start();

function get_db_config($key,$default=false)
{
    global $__site_config;
    $array = json_decode($__site_config, true);
    if (isset($array[$key]))
        return $array[$key];
    else
        return $default;
}

function load($name)
{
    //include __DIR__."\..\_templates\\$name.php";
    include $_SERVER['DOCUMENT_ROOT'] . "\htdocs\_templates\\$name.php";
}
