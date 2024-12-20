<?php
require_once './connect.php';

function saveTask($db, $task) {
    if (!empty($task)) {
        $stmt = mysqli_prepare($db, "INSERT INTO `task` (task, status) VALUES (?, 'En attente')");
        mysqli_stmt_bind_param($stmt, "s", $task);
        $result = mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        return $result;
    }
    return false;
}
if (isset($_POST['task'])) {
    $task = $_POST['task'];
    if (saveTask($db, $task)) {
        header('Location: ./index.php');
    } else {
        echo 'Failed to add task';
    }
}
?>