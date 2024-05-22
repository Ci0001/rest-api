<?php
define("PROJECT_ROOT_PATH",__DIR__. "/../");

ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');
error_reporting(E_ALL);

//include main configuration file
require_once PROJECT_ROOT_PATH . "/inc/config.php";

//include base controller file
require_once PROJECT_ROOT_PATH . "/Controller/Api/BaseController.php";

//include user model file
require_once PROJECT_ROOT_PATH . "/Model/UserModel.php";

?>