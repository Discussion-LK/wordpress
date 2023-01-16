<?php
/**
 * Plugin Name: Discussion
 * Plugin URI: https://discussion.lennardkuenen.dev/
 * Description: A Discussion plugin for wordpress
 * Version: 1.0
 * Author: Lennard Kuenen
 * Author URI: https://lennardkuenen.dev/
 */

define('discussionDir', __DIR__);
define('discussionUri', str_replace($_SERVER['DOCUMENT_ROOT'], get_site_url() , __DIR__) . '/');
define('discussionAccess', true);
 
foreach (glob(shopncartDir . "/classes/*.class.php") as $filename){
  require_once($filename);
}

foreach (glob(shopncartDir . "/functions/*.function.php") as $filename){
  require_once($filename);
}

// Navigation
include shopncartDir . "/includes/navigation.include.php";

