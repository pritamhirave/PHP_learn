<style>
td {
    padding: 10px;
}
</style>
<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STUD";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if($total != 0)
{
    ?>
<table>
    <tr>
        <th>Roll No</th>
        <th>Name</th>
        <th>Class</th>
        <th colspan="2">Operation</th>
    </tr>



    <?php
    while($result =mysqli_fetch_assoc($data))
    {
        echo "<tr>
                <td>".$result['rollno']."</td>
                <td>".$result['name']."</td>
                <td>".$result['class']."</td>
                <td><a href ='update.php?rn=$result[rollno]& st=$result[name]& cl=$result[class]'>Edit'</a></td>
                <td><a href='Delete.php?rn=$result[rollno]' onclick = 'checkdelete()' >Delete'</a></td>
            </tr>";
    
    }
   
}
else
{
    echo " No records found";
}
 ?>
</table>
<script>
function checkdelete() {
    return confirm('Are you sure You want to delete this data???');
}
</script>