<?php
if(!function_exists('pre')){
    function pre($var,$exit=0){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        if ($exit)
        exit;
    }
}