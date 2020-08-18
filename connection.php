<?php
$severname ="localhost";
$username ="root";
$password ="";
$database ="students";

$conn = mysqli_connect($severname,$username,$password ,$database );
if($conn)
{
   
}
else
{
    die("connection failed due to".mysqli_connect_error());
}
?>