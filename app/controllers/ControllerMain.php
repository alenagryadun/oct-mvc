<?php

namespace controllers;

use core\Controller;

class ControllerMain extends Controller {

    public function action_index() {
        $this->view->reder('main_index_view');
    }

    public function action_create() {
        echo 'Main controller action index'; //TODO delete
    }

}
