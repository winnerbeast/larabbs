<?php
/**
 * Created by PhpStorm.
 * User: Winner
 * Date: 2020/10/31
 * Time: 18:38
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
