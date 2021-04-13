<?php
include_once("connection.php");
include_once("session.php");
check_login_user();
$sql = "SELECT id, f_name,l_name,email, password, gender FROM signup";
$result = $conn->query($sql);
?>
<!DOCTYPE HTML>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
  <table class="table">
    <thead>
      <tr>
        <th >First Name</th>
        <th >Last Name</th>
        <th >Email</th>
        <th>Password</th>
        <th>Gender</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$res['f_name']."</td>";
        echo "<td>".$res['l_name']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "<td>".$res['password']."</td>";
        echo "<td>".$res['gender']."</td>";

      }
      ?>
    </tbody>
  </table>
  <a href="logout.php" class="btn btn-info" role="button" style="float:right;">Log Out</a>

</body>
</html>