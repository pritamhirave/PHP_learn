<?php
include("connection.php");
$query = "INSERT INTO STUD VALUES('4','Priti','MCA')";
$data = mysqli_query($conn, $query);

if($data)
{
    echo "Data inserted into DB";
}
?>