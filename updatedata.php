<?php
 $stu_id = $_POST['fid'];
 $name = $_POST['fname'];
 $address = $_POST['fadd'];
 $class = $_POST['fclass'];
 $phone = $_POST['fphone'];
$conn = mysqli_connect("localhost", "root", "", "crud")  or die("connection failed");
$sql = "UPDATE student SET cname= '$name',saddress='$address',vclass='$class',sphone='$phone' where cid = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("query unseccessful");
header("location: http://localhost/form/home.php");
mysqli_close($conn);
