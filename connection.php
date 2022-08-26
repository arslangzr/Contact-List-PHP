<?php
$db = mysqli_connect('localhost','root','') or die('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'contacts') or die (mysqli_error($db));


?>
<!-- // $hostname = "localhost";
// $username = "root";
// $password = "";
// $database_name = "contacts";
// $mysqli_db = mysqli_connect($hostname, $username, $password, $database_name);

// if (!$mysqli_db) {
//     echo "not connected";
// } else {
//     echo "Connected successfully <br>";
// }
    // $servername = "localhost";
    // $username = "root";
    // $password = "";

    // //creating connection
    // $conn = mysqli_connect($servername, $username, $password);



    // if (!$conn) {
    //     die("Failed to connect: " . mysqli_connect_error());
    // } else {
    //     echo "Connected successfully";
    // } -->
