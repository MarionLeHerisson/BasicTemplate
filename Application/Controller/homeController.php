<?php
/**
 * Created by MarionLeHerisson
 * https://github.com/MarionLeHerisson/BasicTemplate
 * GNU GPL v3.0
 */

class homeController {

    public function indexAction() {

        // ajax
        if(isset($_POST['action']) && !empty($_POST['action'])) {
            $this->Ajax($_POST);
        }

        require_once(BASE_PATH . 'Application/View/header.php');
        require_once(BASE_PATH . 'Application/View/nav.php');
        require_once(BASE_PATH . 'Application/View/home.php');
        require_once(BASE_PATH . 'Application/View/footer.php');
    }

    private function Ajax($post) {
        $action = $post['action'];
        $param = [];

        if(isset($post['param'])) {
            $param = $post['param'];
        }

        require_once(BASE_PATH . 'Application/Model/Ajax/home.php');
        $ajaxApi = new HomeAjax();

        switch($action) {
            case 'someAction' :
                $ajaxApi->action($param);
                break;
            case 'anotherAction' :
                $ajaxApi->otherAction($param);
                break;
        }
    }
}