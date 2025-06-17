<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <?php include'index.html';
    $conn=mysqli_connect("localhost","root","","crud")  or die("connection failed");
    $id= $_GET['id'];
    $sql="DELETE FROM `student` WHERE cid='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:home.php");
        exit();
    }
?>
<!-- //<div id="main">

  <form action=""method="post">
    <h1> Delete-Records</h1>
<table cellpadding="10px" align ="center">
    <tr>
    <td>id:</td> <td> <input type="text"name="fid" size=""></td>
    </tr>
    <tr>
    <td></td> <td> <input type="submit"name="fbtn" size="" class="bg-danger"></td>
    </tr>
</table>
</form> -->
