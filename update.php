<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_GET['firstname']);
$last_name = mysqli_real_escape_string($link, $_GET['lastname']);
$email_address = mysqli_real_escape_string($link, $_GET['email']);
 
// attempt update query execution
$sql = "UPDATE persons SET lastname='Casey'  WHERE firstname = 'Justin'";
if(mysqli_query($link, $sql)){
    echo "Record updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
