<?php
/**
 *Plugin Name:Example plugin 
 *Description:This is an example plugin
 **/
function example_function()
{
    $content=" Hello world...!...This is a basic plugin";
    return $content;
}

add_shortcode('example','example_function');

?>