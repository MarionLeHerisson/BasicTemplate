<?php
/**
 * Created by MarionLeHerisson
 * https://github.com/MarionLeHerisson/BasicTemplate
 * GNU GPL v3.0
 */

require_once("../../const.php");

// get actual page name
$exploded = explode('/', $_SERVER['REDIRECT_URL']);
$len = sizeof($exploded) - 1;
$thisPage = $exploded[$len];

// base address = homepage
if($thisPage == '') {

    require_once(BASE_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . 'homeController.php');
    $errorController = new homeController;
    $errorController->indexAction();
}
// include actual page controller (if it exists)
else if(file_exists(BASE_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . $thisPage . 'Controller.php')) {

    require_once(
        BASE_PATH . 'Application' . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR . $thisPage . 'Controller.php');

    // Create instance and show index for this page
    $controllerName = $thisPage . 'Controller';
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