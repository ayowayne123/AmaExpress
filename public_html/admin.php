<?php

require_once("db.php");
$edit = false;
    $product_id = " ";
    $product_code = " ";
    $brand =  " ";
    $model =  " ";
    $description =  " ";
    $name = " ";
    $price = " ";

if (isset($_POST['submit'])) {
  $product_code = $_POST['product_code'];
  $brand =  $_POST['brand'];
  $model =  $_POST['model'];
  $description =  $_POST['description'];
  $name = $_POST['name'];
  $price = $_POST['price'];

  $query = "INSERT INTO products (product_code, brand, model, description,name, price) VALUES ('$product_code', '$brand', '$model', '$description','$name', '$price')";
  mysqli_query($conn, $query);

  $message = 'Product added successfully';
}
if (isset($_GET['edit'])) {
    $edit = true;
    $product_id = $_GET['edit'];
    $sql = "SELECT * FROM products WHERE id ='$product_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($row) {
        $product_code = $row['product_code'];
  $brand =  $row['brand'];
  $model =  $row['model'];
  $description =  $row['description'];
  $name = $row['name'];
  $price = $row['price'];  
    } else {
      echo "Error: product not found";
  }
} 

if (isset($_POST['update'])) {
   $product_code = $_POST['product_code'];
  $brand =  $_POST['brand'];
  $model =  $_POST['model'];
  $description =  $_POST['description'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  
  $query = "UPDATE products SET product_code = '$product_code', brand = '$brand', model='$model', description = '$description',name = '$name', price = '$price'  WHERE id='$id'";
  mysqli_query($conn, $query);

  $message = 'Product update successfully';
  $product_id = " ";
    $product_code = " ";
    $brand =  " ";
    $model =  " ";
    $description =  " ";
    $name = " ";
    $price = " ";
}

if (isset($_GET['delete'])) {

  $id = $_GET['delete'];
  $sql = "DELETE FROM products WHERE id='$id' ";
    if (mysqli_query($conn, $sql)) {
             $_SESSION['message'] = "product deleted succesfully";
    $_SESSION['msg_type'] = 'danger';
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
        
        
    $result = $conn->query("SELECT * FROM products");
    mysqli_close($conn);

?>


<?php
if (isset($message)) {
  echo $message;
}
?>

<!DOCTYPE HTML>

<html lang='en'>

<head>
	<meta charset="UTF-8"/>
	<meta name="description" content="admin page for AmamExpress"/>
	<meta name="keywords" content="login"/>
	<meta name="robots" content="index,follow"/>

	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-store" />
	<meta http-equiv="expires" content="-1" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />


	<base href="AmaExpress"/>
	<script src="cgpacalculator.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="icon" href="AmaIcon.ico"/>

	<title>Admin- AmaExpress </title>
</head>

<body class='admin'>
    
    <div class='admin'>
        <h1> welcome Admin </h1>
        <h3> You can add, delete or modify products here</h3>
         <div class='halfs btn'> 
        <a href="products.php">View products</a> <a href="index.php">Visit website</a>
       </div> 
        </div>
        
        
     <div class='halfs'>     
    <div class='addprod'> 
        <form  method="post" action="admin.php">
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <label for="product_code"><b>product code</b></label>
             <input type="text" name="product_code" placeholder="product code" value="<?php echo $product_code; ?>">
            <label for="brand"><b>Brand</b> </label>
            <select name="brand" id="brand" value="<?php echo $brand; ?>">
              <option value="apple">Apple</option>
              <option value="Samsung">Samsung</option>
              <option value="LG">LG</option>
            </select>
    
             <label for="model"><b>Model</b></label>
             <input type="text" name="model" placeholder="Model" value="<?php echo $model; ?>">
              
              <label for="description"><b>Description</b></label>
              <input type="text" name="description" placeholder="Description" value="<?php echo $description; ?>">
              
              <label for="name"><b>Product Name</b></label>
              <input type="text" name="name" placeholder="product name" value="<?php echo $name; ?>">
              
              
            <label for="price"><b>Product price</b></label>
            <input type="number" name="price" placeholder="Price in tl" value="<?php echo $price; ?>tl">
            
            <?php  if($edit = true):  ?>
  <button type="submit" name="submit"> Add Product </button>
      <?php  elseif($edit == true):  ?>
    <button type="submit" name="update"> Update Product </button>
      <?php endif ?>
              
            
        </form>
    </div>

<div class='addtable'>
<table>
  <tr>
    <th>Product Code</th>
    <th>Brand</th>
    <th>Model</th>
    <th>Description</th>
    <th>Price</th>
    <th>Edit/Delete</th>
  </tr>
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $row['product_code']; ?></td>
      <td><?php echo $row['brand']; ?></td>
      <td><?php echo $row['model']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td class='editbtn'> 
 
                <a href="admin.php?edit=<?php echo $row['id']; ?>"> edit </a>
                <a href="admin.php?delete=<?php echo $row['id']; ?>"> delete </a></td>
    </tr>
  <?php } ?>
</table>
</form>
</div>

</div>
    
</body>

</html>
    
    