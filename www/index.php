<?php
require_once("../const.php");

// get current page name
if(array_key_exists('REDIRECT_URL', $_SERVER)) {
    $exploded = explode('/', $_SERVER['REDIRECT_URL']);
    $len = sizeof($exploded) - 1;
    define('THISPAGE', $exploded[$len]);
}
else {
    define('THISPAGE', 'home');
}

// include current page controller (if it exists)
if(file_exists(BASE_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . THISPAGE . 'Controller.php')) {

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