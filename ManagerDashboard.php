<?php
   include('session.php');

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $product = mysqli_real_escape_string($db,$_POST['productSearch']);

      $sql = "SELECT * FROM products WHERE productSearch = '$product' ";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      echo strval($row);
         
         
      $count = mysqli_num_rows($result);

      for ($i = 1; ; $i++) {
         if($count == $i){
            echo $i;
         }
      }
   }

?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <form action="ManagerDashboard.php" method="post">
         Search: <input type="text" name="productSearch"><br>
         <input type="submit">
      </form>

      <h1>Welcome manager <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>