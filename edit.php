<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="form/style.css">
</head>

<body>
    <?php include 'index.html';
    ?>
    <div id="main">
        <h1 id="all">All Update</h1>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection failed");
        $stu_id = $_GET['id'];
        $sql = "SELECT * FROM student WHERE cid={$stu_id}";
        $result = mysqli_query($conn, $sql) or die("query unseccessful");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <form action="updatedata.php" method="post">
                    <table cellpadding="5px" align="center">
                        <tr>
                            <td>id:</td>
                            <td><input type="text" name="fid" value="<?php echo $row['cid'] ?>"></td>
                        </tr>
                        <tr>
                            <td>name:</td>
                            <td><input type="text" name="fname" value="<?php echo $row['cname'] ?>"></td>
                        </tr>
                        <tr>
                            <td>address:</td>
                            <td><input type="text" name="fadd" value="<?php echo $row['saddress'] ?>"></td>
                        </tr>
                        <tr>
                            <td>class:</td>
                            <td><input type="text" name="fclass" value="<?php echo $row['vclass'] ?>"></td>
                        </tr>
                        <tr>
                            <td>phone:</td>
                            <td><input type="text" name="fphone" value="<?php echo $row['sphone'] ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="fbtn" size=""></td>
                        </tr>
                    </table>
                </form>
        <?php }
        } ?>
    </div>
</body>

</html>