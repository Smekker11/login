<?php
require '../sqll.php';
$conn = new mysqli($servername, $user, $pass, $dbname);
$s = "SELECT * FROM sitequotes";
$results = $conn->query($s);
if($results->num_rows > 0){
    while($row = $results->fetch_assoc()){
        echo $row['quote'] . " -> " . $row['content'] . "<br>";
    }
}
?>