<?php

if (!function_exists('hsprintf'))
{
    function hsprintf()
    {
        return htmlspecialchars(call_user_func_array('sprintf', func_get_args()));
    }
}

if (!function_exists('hprintf'))
{
    function hprintf()
    {
        echo hsprintf(func_get_args());
    }
}

if (!function_exists('sget'))
{
    function sget($key)
    {
        return isset($_GET[$key])? $_GET[$key]: null;
    }
}

if (!function_exists('spost'))
{
    function spost($key)
    {
        return isset($_POST[$key])? $_POST[$key]: null;
    }
}

if (!function_exists('ssession'))
{
    function ssession($key, $value = null)
    {
        if (1 === func_num_args())
        {
            return isset($_SESSION[$key])? $_SESSION[$key]: null;
        }
        else
        {
            $_SESSION[$key] = $value;
        }
    }
}

