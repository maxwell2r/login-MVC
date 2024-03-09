<?php
    session_start();
    require_once 'lib/database/connection.php';
    require_once 'vendor/autoload.php';
    require_once 'app/core/core.php';
    require_once 'app/model/user.php';
    require_once 'app/controller/LoginController.php';
    require_once 'app/controller/DashboardController.php';

    $core = new Core;
    echo $core->start($_GET);

?>