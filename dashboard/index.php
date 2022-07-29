<?php
session_start();
$id = $_SESSION['id'];
if ($id == NULL){
    http_response_code(403);
    die('ERR CODE 403 -- FORBIDDEN');
}
require "../sqll.php";
$conn = new mysqli($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT user FROM login WHERE id='$id'";
$result = $conn->query($query);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $user = $row['user'];
    }
}
?>
<html>
    <head>
        <title>mekke dashboard</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1 align="center" class="y">Wellcome, <?php echo $user?>!</h1>
        <div id="qbox">
            <h1 align="center">Modify quotes in DB:</h1>
            <h2 style="color: yellow;" align="right"><?php require 'qfu.php';?></h2>
            <form method="post" action="dqu.php">
            <label for="changelog">changelog:</label><br>
            <input type="text" id="changelog-q" name="changelog">
            <input type="submit" value="Submit">
            </form><br>
            <form method="post" action="dqu.php">
            <label for="mekkemsg">mekkemsg:</label><br>
            <input type="text" id="mekkemsg-q" name="mekkemsg">
            <input type="submit" value="Submit">
            </form><br>
            <form method="post" action="dqu.php">
            <label for="title">title:</label><br>
            <input type="text" id="title-q" name="title">
            <input type="submit" value="Submit">
            </form><br>
            <img id="bolosica" src="../par.jpg">
        </div>
    </body>
</html>