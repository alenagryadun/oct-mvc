<?php

namespace controllers;

use core\Controller;
use models\ModelTasks;

class ControllerTasks extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new ModelTasks();
    }

    public function action_index() {
        $this->view->tasks = $this->model->all();
        $this->view->render('tasks_index_view');
    }

    public function action_create() {
        $this->view->render('tasks_create_view');
    }

    public function action_add() {
        $task = filter_input(INPUT_POST, 'newTask');
        $url = $_SERVER['HTTP_ORIGIN'] . '/tasks';
        if (!empty($task)) {
            $this->model->addTask($task);
        }
        header("Location: " . $url);
    }

    public function action_save() {
        $task = filter_input(INPUT_POST, 'taskText');
        $id = $_POST['idTask'];
//        var_dump($id);
        $url = $_SERVER['HTTP_ORIGIN'] . '/tasks';
        if (!empty($task)) {
            $this->model->saveTask($task, $id);
        }
        header("Location: " . $url);
    }

    public function action_delete() {
        $id = $_POST['idTask'];
        $url = $_SERVER['HTTP_ORIGIN'] . '/tasks';
        $this->model->deleteTask( $id);
        header("Location: " . $url);
    }

}
