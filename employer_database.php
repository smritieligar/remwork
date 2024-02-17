<?php
$server_name="localhost";
$username="root";
$password=""; 
$database_name="database1";


$connection = mysqli_connect($server_name,$username,$password,$database_name);
if(!$connection)
{
    die("Connection failed: " . mysqli_connect_error());

}

if(isset($_POST['save']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    $query = "INSERT INTO employerlogin (email, password)
    VALUES ('$email', '$password')";

    if (mysqli_query($connection, $query))
    {
        echo "Entry successfull!";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($connection);



    }
    mysqli_close($connection);
} 
if ($loginSuccessful) {
    header("Location: employerdash.html");
    exit(); 
} else {
    header("Location: employerdash.html"); 
    exit();
}
?>