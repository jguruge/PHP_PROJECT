<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "mybook_db";

// Connect to the database
$connection = mysqli_connect($host, $username, $password, $db);


$first_name="Jayshan";
$last_name="Guruge";
$email="Jguruge2021@gmail.com";
$password="2410186Kcaco#100";

/*$query="INSERT IGNORE INTO users (first_name,last_name,email,password)VALUES('$first_name','$last_name','$email','$password')";
if(mysqli_query($connection, $query)){
    echo "Recorded Succesfully<br />";
}*/

// Check for connection errors
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
$query1="Select * from users";
$result=mysqli_query($connection, $query1);
echo "<pre>";
while($row=mysqli_fetch_array($result)){
    echo "<pre>";
    print_r($row);
    echo "<pre>";
}
echo "</pre>";

// Close the connection
mysqli_close($connection);
?>