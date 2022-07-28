<?php
require "sqll.php";
session_start();
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$lemail = $_POST["email"];
$lpass = $_POST["pass"];
$query = "SELECT id FROM login WHERE email='$lemail' AND pass='$lpass'";
$result = $conn->query($query);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $id = $row["id"];
        $_SESSION['id'] = $id;
        header("Location: /dashboard/index.php");
    }
}
else{
    $id = "nuc";
    $_SESSION['id'] = $id;
    header("Location: index.php");  
}
?>
