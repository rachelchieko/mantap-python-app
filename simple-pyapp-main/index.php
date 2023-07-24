<?php

$conn = mysqli_connect("testsql", "root", "Mantap", "mantap");

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

echo "Connected to mySQL successfully!";

//query to database
$sql = "Select name from account where id = '1' ";
$result = $conn->query($sql);

//print to web
$row = $result->fetch_assoc();
	echo "<br>Hello, " . $row["name"] . ". Have a nice day!";

?>
