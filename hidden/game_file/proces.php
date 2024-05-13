<?php
include 'con.php';

if (isset($_Post['submit']))
{

    $name=$_POST['name'];
    $age=$_POST['age'];
    
    $nameg=$_POST['nameg'];
    $ageg=$_POST['ageg'];
}

$sql="insert into newtab (name,age,nameg,ageg,) values ('$name','$age','$nameg','$ageg')";


if (mysqli_query ($conn,$sql))

{

    echo " <script> Alert ('new re') </script>";

}
{

    echo "error:".mysqli_error($con);



}
mysqli_close($con);


?>