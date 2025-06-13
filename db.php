<?php
$host = 'localhost';
$dbname = 'dbznsyxiih1dy4';
$username = 'uxgukysg8xcbd';
$password = '6imcip8yfmic';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
