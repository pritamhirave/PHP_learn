<?php
include("connection.php");
error_reporting(0);
 $_GET['rn'];
 $_GET['st'];
 $_GET['cl'];
?>

<html>

<head>
</head>

<body>
    <form action="" method="GET">

        Roll No: <input type="text" name="rollno" value="<?php echo $_GET['rn']; ?>" /><br><br>
        Name: <input type="text" name="name" value="<?php echo $_GET['st'];?>" /><br><br>
        Class <input type="text" name="class" value="<?php echo $_GET['cl']; ?>" /><br><br>
        <input type="submit" name="submit" value="Update" />
    </form>
    <?php
    if($_GET['submit'])
    {
        $rollno = $_GET['rollno'];
        $name = $_GET['name'];
        $class = $_GET['class'];
        $query = "Update stud SET name='$name', class='$class'  WHERE rollno='$rollno'  ";
        
        $data = mysqli_query($conn, $query);
        if($data)
        {
            echo "<font color = 'Green'>Record Updated Succefully . <a href='display.php'> Check updated list here </a>";
        }
        else
        {
            echo "<font color = 'Red'>Record Not Updated  . <a href='display.php'> Check updated list here </a>";
        }
    }
    else
    {
        echo "<font color='Blue'>Click On Update Button to save changes";
    }
    
    ?>
</body>

</html>