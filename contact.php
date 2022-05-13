<?php
require ('connect_db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$content = $_POST['content'];

$sql = "INSERT INTO kontaktid (name, email, content) VALUES ('$name', '$email', '$content')";
if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
    header("Location: kontakt.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
?>