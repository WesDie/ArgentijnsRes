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

    if(isset($_POST['product1']) && 
    $_POST['product1'] == 'Yes') 
    {
        echo "Product 1";
    }
    else
    {
        echo "No Product 1";
    }

    if(isset($_POST['product2']) && 
    $_POST['product2'] == 'Yes') 
    {
        echo "Product 2";
    }
    else
    {
        echo "No Product 2";
    }	 

    if(isset($_POST['product3']) && 
    $_POST['product3'] == 'Yes') 
    {
        echo "Product 3";
    }
    else
    {
        echo "No Product 3";
    }	 

    if(isset($_POST['product4']) && 
    $_POST['product4'] == 'Yes') 
    {
        echo "Product 4";
    }
    else
    {
        echo "No Product 4";
    }	 

?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
        <form action="menu.php" method="post">
        Product 1: <input type="checkbox" name="product1" value="Yes"><br>
        Product 2: <input type="checkbox" name="product2" value="Yes"><br>
        Product 3: <input type="checkbox" name="product3" value="Yes"><br>
        Product 4: <input type="checkbox" name="product4" value="Yes"><br>
        Product 5: <input type="checkbox" name="product5" value="Yes"><br>
        Product 6: <input type="checkbox" name="product6" value="Yes"><br>
        Product 7: <input type="checkbox" name="product7" value="Yes"><br>
        Product 8: <input type="checkbox" name="product8" value="Yes"><br>
        <input type="submit">
        </form>


        <h1>Welcome <?php echo $login_session; ?></h1> 
        <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>