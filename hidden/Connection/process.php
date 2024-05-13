<?php
include 'con.php';

if (isset($_Post['submit']))
{

    $name=$_POST['name'];
    $age=$_POST['age'];
}

$sql="insert into players (name,age,) values ('$name','$age',)";


if (mysqli_query ($con,$sql))

{

    echo " <script> Alert ('new re') </script>";

}
{

    echo "error:".mysqli_error($con);



}
mysqli_close($con);


?>