<?php
/**
 * Created by MarionLeHerisson
 * https://github.com/MarionLeHerisson/BasicTemplate
 * GNU GPL v3.0
 */

class contactController {

    public function indexAction() {

        require_once(BASE_PATH . 'Application/View/header.php');
        require_once(BASE_PATH . 'Application/View/contact.php');
        require_once(BASE_PATH . 'Application/View/footer.php');
    }
}