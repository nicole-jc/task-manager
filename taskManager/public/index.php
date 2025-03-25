<?php
require '../app/core/database.php';
require_once __DIR__ . '/../app/controllers/taskController.php';

$controller = new taskController();

$tasks0 = $controller->getAll(); // peding tasks
$tasks1 = $controller->getCompleted(); // completed tasks

// create task
function handleCreateTask($controller) {
    if (isset($_POST['submit'])) {
        $title = trim($_POST['title']);
        $description = trim($_POST['desc']);
        return $controller->create($title, $description);
    }
    return null;
}

// update task to completed
function handleUpdateTask($tasks0, $controller) {
    if (isset($_POST['complete'])) {
        foreach ($tasks0 as $task) {
            $id = $task['id'];
            $controller->update($id);
        }
    }
}

// delete task
function handleDeleteTask($tasks1, $controller) {
    if (isset($_POST['delete'])) {
        foreach ($tasks1 as $task) {
            $id = $task['id'];
            $controller->delete($id);
        }
    }
}

handleCreateTask($controller);
handleUpdateTask($tasks0, $controller);
handleDeleteTask($tasks1, $controller);

require_once '../app/view/view.php';
