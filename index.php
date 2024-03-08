<?php
    
    require_once 'lib/database/connection.php';
    require_once 'vendor/autoload.php';
    require_once 'app/core/core.php';
    require_once 'app/model/user.php';
    require_once 'app/controller/LoginController.php';

    $core = new Core;
    echo $core->start($_GET);

?>