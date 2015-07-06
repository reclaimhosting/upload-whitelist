<?php
/*
Plugin Name: Upload Whitelist
Description: Custom plugin to allow alternative file uploads in WordPress
Version: 1.1
Author: Reclaim Hosting
Author URI: https://reclaimhosting.com
*/

function my_myme_types($mime_types){
    $mime_types['kml'] = 'application/vnd.google-earth.kml+xml'; //Adding kml extension
    $mime_types['kmz'] = 'application/vnd.google-earth.kmz'; //Adding kmz extension
    $mime_types['gpx'] = 'application/gpx-xml'; // Adding gpx-xml
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);
