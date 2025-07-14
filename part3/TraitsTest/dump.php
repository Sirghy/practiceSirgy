<?php

if (function_exists('dump')) {
    function dump($var, $echo = true, $label = false)
    {
        echo $label . '<br>';
        echo '<pre>';
        echo var_export($var, true) . '<br>';
    }
}
