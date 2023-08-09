<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "user-information";

$conn = new mysqli($host, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}
echo "Ket noi thanh cong";

?>