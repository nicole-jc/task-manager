<?php

require_once __DIR__ . '/../core/database.php';

class Task {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE status = 'pending'"); // Pending tasks = 0
        $stmt->execute();
        $tasks0 = [];

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $tasks0[] = $row;
        }
        return $tasks0;  

}
    public function getCompleted() {
        $stmt = $this->db->prepare("SELECT * FROM tasks WHERE status = 'completed'"); // Completed tasks = 1
        $stmt->execute();
        $tasks1 = [];

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $tasks1[] = $row;
        }
        return $tasks1;
    }

    public function create($title, $description) {
        $stmt = $this->db->prepare("INSERT INTO tasks (title, description, status) VALUES (?, ?, 'pending')");
        if ($stmt->execute([$title, $description])) {
            return true;
        }
        return false;
    }

    public function update($id) {
        $stmt = $this->db->prepare("UPDATE tasks SET status = 'completed' WHERE id = ?");
        if ($stmt->execute([$id])) {
            return true;
        }
        return false;
    }

    public function delete($id){
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = ?");
        if ($stmt->execute([$id])) {
            return true;
        }
        return false;
    }
}