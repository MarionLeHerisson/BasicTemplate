<?php
/**
 * Created by MarionLeHerisson
 * https://github.com/MarionLeHerisson/BasicTemplate
 * GNU GPL v3.0
 */

class homeController {

    public function indexAction() {

        require_once('../View/header.php');
        require_once('../View/home.php');
        require_once('../View/footer.php');
    }
}