<?php include 'index.html';
?>
<div class="container bg-info">
  <div class="row justify-content-center">
    <h2>All Records</h2>
    <div class="col-md-8 ">
      <table class="table table-bordered bg-secondary pb-3">
        <thead class=" bg-dark text-light">
          <?php
          $conn = mysqli_connect("localhost", "root", "", "crud")  or die("connection failed");
          $sql = "SELECT*FROM student JOIN sclass WHERE student.vclass = sclass.sid";
          $result = mysqli_query($conn, $sql) or die("query unseccessful");
          if (mysqli_num_rows($result) > 0) {

          ?>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody class="bg-dark text-light">
          <?php
            while ($row = mysqli_fetch_array($result)) {
          ?>
            <tr>
              <td><?php echo $row['cid']; ?></td>
              <td><?php echo $row['cname'];?></td>
              <td><?php echo $row['saddress'];?></td>
              <td><?php echo $row['sname'];?></td>
              <td><?php echo $row['sphone'];?></td>
              <td>
                <a class='text-decoration-none text-warning' href='edit.php?id=<?php echo $row['cid'];   ?>'>Edit/</a>
                <a class="text-decoration-none text-danger" href="delete.php?id=<?php echo $row['cid'];   ?>">Delete</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    <?php } else {
            echo "<h2> no record found <h2/>";
          }
          mysqli_close($conn);
    ?>
    </div>
  </div>
</div>
</body>

</html>