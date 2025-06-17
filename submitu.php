<?php
echo $id = $_POST['fid'];
echo $name = $_POST['fname'];
echo $address = $_POST['fadd'];
echo $class = $_POST['fclass'];
echo $phone = $_POST['fphone'];

$conn=mysqli_connect("localhost","root","","crud")  or die("connection failed"); 
$sql="UPDATE student SET cname= '$name',saddress='$address',vclass='$class',sphone='$phone' WHERE cid= {$id}";
$result=mysqli_query($conn,$sql) or die("query unseccessful");
header("location: http://localhost/form/home.php");

mysqli_close($conn);

?>