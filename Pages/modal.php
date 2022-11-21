<?php 
include("connect.php");

// if(isset($_POST['add'])){
//   $name     = ($_POST['name']);
//   $category = ($_POST['category']);
//   $price    = ($_POST['price']);
//   $status   = ($_POST['status']);

// $sql= "INSERT INTO product(name,category,price,status) 
// VALUES ('$name','$category','$price','$status')";
//  mysqli_query($conn,$sql);
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Add Product</title>
  </head>
  <body>
<div class="container my-5">
<form method="post">
  <div class="form-group">
    <label >Name</label>
    <input  class="form-control" name="name" placeholder="Product Name">
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control">
    <option value="">Please select</option>
      <option value="1" >Pc Gamer</option>
      <option value="2">Accessories</option>
      <option value="3">Consoles</option>
      <option value="4">Composants</option>
    
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Price</label>
    <input  class="form-control" name="price" placeholder="Price">
  </div>
  <div class="form-group">
  <label>Status</label>
    <select name="status" class="form-control">
      <option value="1">In stock</option>
      <option value="2">Out of stock</option>
    </select>
  </div>
  <div>
    <button  type="submit" class="btn btn-outline-secondary">Add</button>
  </div>

</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </body>
</html>