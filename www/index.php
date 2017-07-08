<?php
require_once("../const.php");

// get actual page name
if(array_key_exists('REDIRECT_URL', $_SERVER)) {
    $exploded = explode('/', $_SERVER['REDIRECT_URL']);
    $len = sizeof($exploded) - 1;
    define('THISPAGE', $exploded[$len]);
}
else {
    define('THISPAGE', '');
}

// base address = homepage
if(THISPAGE == '') {

    require_once(BASE_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . 'homeController.php');
    $errorController = new homeController;
    $errorController->indexAction();
}
// include actual page controller (if it exists)
else if(file_exists(BASE_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . THISPAGE . 'Controller.php')) {

    require_once(
        BASE_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . THISPAGE . 'Controller.php');

    // Create instance and show index for this page
    $controllerName = THISPAGE . 'Controller';
    $controller = new $controllerName;
    $controller->indexAction();
}
// something we don't know
else {

    require_once(BASE_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . 'errorController.php');
    $errorController = new errorController;
    $errorController->indexAction();
}

?>