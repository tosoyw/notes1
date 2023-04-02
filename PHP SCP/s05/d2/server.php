<?php

session_start();

// echo $_POST['description'];

class TaskList {
    public function add($description) {
        $newTask = (object) [
            'description' => $description,
            'isFinished' => false
        ];

        if ($_SESSION['tasks'] === null) {
            $_SESSION['tasks'] = array();
        } 
        array_push($_SESSION['tasks'], $newTask);
    }

    public function update($id, $description, $isFinished) {
        $_SESSION['tasks'][$id]->description = $description;
        $_SESSION['tasks'][$id]->isFinished = ($isFinished !== null) ? true: false;
    }

    public function remove($id) {
        array_splice($_SESSION['tasks'], $id, 1);
    }

    public function clear() {
        session_destroy();
    }
}

$taskList = new TaskList();

// This selection control manages the communication between index.php and server.php
if ($_POST['action'] === 'add') {
    $taskList->add($_POST['description']);
} else if ($_POST['action'] === 'update') {
    $taskList->update($_POST['id'], $_POST['description'], $_POST['isFinished']);
} else if ($_POST['action'] === 'remove') {
    $taskList->remove($_POST['id']);
} else if ($_POST['action'] === 'clear') {
    $taskList->clear();
}

// header() is to redirect back to index.php
header('Location: ./index.php');