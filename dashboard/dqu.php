<?php
require  '../sqll.php';
$conn = new mysqli($servername, $user, $pass, $dbname);
$changelog = $_POST['changelog'];
$mekkemsg = $_POST['mekkemsg'];
$title = $_POST['title'];
if($changelog != NULL){
    $q = "UPDATE sitequotes SET content='$changelog' WHERE quote='changelog'";
    if ($conn->query($q) === TRUE){
        echo "Successfully set quote changelog as: " . $changelog;
    }
}
if($mekkemsg != NULL){
    $q = "UPDATE sitequotes SET content='$mekkemsg' WHERE quote='mekkemsg'";
    if ($conn->query($q) === TRUE){
        echo "Successfully set quote mekkemsg as: " . $mekkemsg;
    }
}
if($title != NULL){
    $q = "UPDATE sitequotes SET content='$title' WHERE quote='title'";
    if ($conn->query($q) === TRUE){
        echo "Successfully set quote title as: " . $title;
    }
}
?>