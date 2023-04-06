<?php

$server_name="localhost";

$username="root";

$password="";

$database_name="wp project";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
if(isset($_POST['save']))
{
$fname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobno = $_POST['mobno'];
$program = $_POST['program'];
$gender = $_POST['gender'];
//For inserting the values to mysql database 
$sql_query = "INSERT INTO registration_form (fname,email,password,mobno,program,gender)
VALUES ('$fname','$email','$password','$mobno','$program','$gender')";
if (mysqli_query($conn, $sql_query))
{
 alert("New Details Entry inserted successfully !");
}
// $sql_query = "DELETE FROM registration_form WHERE email=$email";
// if (mysqli_query($conn, $sql_query))
// {
//     alert ("Details deleted successfully !");
// }


}
?>
