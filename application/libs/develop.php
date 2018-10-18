<?php

function debug ( $string_for_debug )
{
    echo '<pre>';
    var_dump( $string_for_debug );
    echo '</pre>';
    exit;
}