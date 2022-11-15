<?php
   include('session.php');

   $sql = "SELECT product_id, name, cost_price, selling_price, category FROM products";
   $result = $db->query($sql);

   if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
         echo "id: " . $row["product_id"]. " - name: " . $row["name"]. " cost price:" . $row["cost_price"]. " selling price:" . $row["selling_price"]. " category:" . $row["category"]. "<br>";
         }
   } else  {
      echo "0 results";
   }

?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome medewerker <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>