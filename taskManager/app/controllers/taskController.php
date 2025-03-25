<?php

require_once __DIR__ . '/../models/task.php';

class taskController {
    private $taskModel;

    public function __construct() {
        $this->taskModel = new Task();
    }

    public function getAll() {
        $tasks0 = $this->taskModel->getAll(); // Get pending tasks
    return $tasks0;
    }

    public function getCompleted() {
        $tasks1 = $this->taskModel->getCompleted(); // Get completed tasks
    return $tasks1;
    }

    public function create($title, $description) {
        $this->taskModel->create($title, $description); // Create task
        header("Location: " . $_SERVER['PHP_SELF']);
    exit;
        }

    public function update($id) {
            $this->taskModel->update($id); // Set task completed
            header("Location: " . $_SERVER['PHP_SELF']);
    exit;
        }

        public function delete($id){
            $this->taskModel->delete($id); // Delete task
            header("Location: " . $_SERVER['PHP_SELF']);
    exit;
        }


    }
