<?php 

if (!function_exists('frontend')) {
    function frontend($url) {
        return url('frontend/'.$url);
    }
}