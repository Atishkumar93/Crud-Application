<?php
echo $id = $_POST['fid'];
echo $name = $_POST['fname'];
echo $address = $_POST['fadd'];
echo $class = $_POST['fclass'];
echo $phone = $_POST['fphone'];

$conn = mysqli_connect("localhost", "root", "", "crud")  or die("connection failed");
$sql = "INSERT INTO student(cname,saddress,vclass,sphone) VALUE ('{$name}','{$address}','{$class}','{$phone}')";
$result = mysqli_query($conn, $sql) or die("query unseccessful");
header("location: http://localhost/form/home.php");

mysqli_close($conn);
