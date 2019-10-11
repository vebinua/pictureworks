<?php

if (!function_exists('apidie')) {

    function apidie($string, $code = 200){
        $string .= "";
        http_response_code($code);
        if(defined('SCRIPT') && SCRIPT)
            throw new Exception($string);
        die($string);
    }
}

if (!function_exists('human_file_size')) {

    function missing_request($field){
        return (!isset($_REQUEST[$field]) or !$_REQUEST[$field]);
    }
}

if (!function_exists('missing_post')) {

    function missing_post($field){
        return (!isset($_POST[$field]));
    }
}

if (!function_exists('missing_get')) {

    function missing_get($field){
        return (!isset($_GET[$field]) or !$_GET[$field]);
    }
}

if (!function_exists('is_json')) {

    function is_json($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
}

if (!function_exists('contains')) {
    function contains($haystack, $needle, $case_sensitive = true){
        if(!$case_sensitive)
            return (strpos(strtolower($haystack), strtolower($needle)) !== FALSE);
        return (strpos($haystack, $needle) !== FALSE);
    }
}

if (!function_exists('startswith')) {

    function startswith($haystack, $needle, $case_sensitive = true){
        if(!$case_sensitive)
            return (strpos(strtolower($haystack), strtolower($needle)) === 0);
        return (strpos($haystack, $needle) === 0);
    }
}