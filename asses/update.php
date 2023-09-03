<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('location:login.php');
  }
  $regno = $_SESSION['user'];

include 'connect.php';

if (isset($_POST['action']) && $_POST['action'] == 'esay') {
    $qid = $_POST['qid'];
    $sql = "INSERT INTO `responces`(`regno`, `wordid`, `responce`) VALUES ('$regno','$qid','1')";
    if ($conn->query($sql) === true) {
        echo 'Database updated successfully';
    } else {
        echo 'Error updating the database: ' . $conn->error;
    }
}
elseif (isset($_POST['action']) && $_POST['action'] == 'medium') {
    $qid = $_POST['qid'];
    $sql = "INSERT INTO `responces`(`regno`, `wordid`, `responce`) VALUES ('$regno','$qid','2')";
    if ($conn->query($sql) === true) {
        echo 'Database updated successfully';
    } else {
        echo 'Error updating the database: ' . $conn->error;
    }
}
elseif (isset($_POST['action']) && $_POST['action'] == 'difficult') {
    $qid = $_POST['qid'];
    $sql = "INSERT INTO `responces`(`regno`, `wordid`, `responce`) VALUES ('$regno','$qid','3')";
    if ($conn->query($sql) === true) {
        echo 'Database updated successfully';
    } else {
        echo 'Error updating the database: ' . $conn->error;
    }
}
 else {
    echo 'Invalid request';
}
?>
