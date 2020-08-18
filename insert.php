<?php
include("connection.php");
error_reporting(0);
?>

<html>

<head>
</head>

<body>
    <form action="" method="GET">

        Roll No: <input type="text" name="rollno" value="" /><br><br>
        Name: <input type="text" name="name" value="" /><br><br>
        Class <input type="text" name="class" value="" /><br><br>
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    if($_GET['submit'])
    {
        $rn = $_GET['rollno'];
        $st = $_GET['name'];
        $cl = $_GET['class'];
            if($rn!= "" && $st!= "" && $cl!= "")
            {
                $query = "INSERT INTO STUD VALUES('$rn','$st','$cl')";
                $data = mysqli_query($conn, $query);  
                
            if($data)
                {
                  echo "Data inserted into DB";
                }
            }
            else
            {
                echo "All fields are required";
            }
    }
    




    ?>
</body>

</html>