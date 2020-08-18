<?php
include("connection.php");
error_reporting(0);
$rollno = $_GET['rn'];

$query="DELETE FROM STUD WHERE ROLLNO='$rollno'  ";
$data = mysqli_query($conn, $query);
if($data)
{
    echo"<script>alert('Record Deleted ')</script>";
    ?>
<META HTTP-EQUIV="Refresh" CONTENT="0 ; URL=http://localhost/CRUD/display.php">
<?php
}
else
{
    echo"<font color='Red'>Sorry Failed to Delete";
    
}
?>