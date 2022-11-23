<?php
    //INCLUDE DATABASE FILE
    include'connect.php';
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES

    //ROUTING
    if(isset($_POST['save']))        saveProduct();
    if(isset($_POST['update']))      updateProduct();
    if(isset($_POST['delete']))      deleteProduct();
    

    function ShowProduct()
    {

        global $conn;

        //SQL SELECT

        $sql="SELECT products.* , categories.id as id_cat ,categories.name as category FROM products INNER JOIN categories ON products.category_id = categories.id";
        $result=mysqli_query($conn,$sql);
      
        if($result){
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>
                 <th scope=\"row\">".$row['name']."</th>

                 <td>
                 <img style='height:50px;' class=\"f \" src=\"./img/".$row['image']."\">
                 </td>

                <td>".$row['category']."</td>
                <td>".$row['price']."</td>
                <td>".$row["quantity"]."</td>

                <form action=\"script.php\" method=\"post\">
                    <td>
                    <button type=\"submit\" class=\"btn btn-outline-secondary\" name=\"delete\" value=\"".$row['id']."\"><i class=\"fa fa-trash \" aria-hidden=\"true \"></i></button>
                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#exampleModal\" class=\"btn btn-outline-secondary\" name=\"update\" 
                    onclick=\"updateProduct(".$row["id"].",'".$row["name"]."','".$row["id_cat"]."','".$row["price"]."','".$row["quantity"]."')\" 
                    value=\"".$row['id']."\"><i class=\"fas fa-edit\"></i></button>
                    </td>
                </form>      
            </tr>"; 
        }
      }
      
        }
      


    function countProduct() 
{
 global $conn;
   
    $sql = "SELECT  COUNT(*) As nbrow from products";
            
    $query=mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($query);
    echo $row['nbrow'];

}

                
    function saveProduct()
    {
        global $conn;
            
            $name       = ($_POST['name']);
            $price      = ($_POST['price']);
            $category   = ($_POST['category']);
            $quantity      = ($_POST['quantity']);

            $image      = ($_FILES['image']['name']);
            $target = "img/" . $image;
          
           $sql= "INSERT INTO products(name,image,price,category_id,quantity) 
            VALUES ('$name','$image','$price','$category','$quantity')";

            move_uploaded_file($_FILES['image']['tmp_name'],$target);
          

        mysqli_query($conn,$sql);
        header('location:dashboard.php');
    }
        

    function updateProduct()
     {
        
        global $conn;
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $quantity = $_POST['quantity'];

        $image      = ($_FILES['image']['name']);
        if (empty($image)) {
            # code
            $update = "UPDATE  products SET  `name`='$name',`price`='$price',`category_id`='$category',`quantity`='$quantity' WHERE id = '$id'";
        }else{
            $target = "img/" . $image;
            move_uploaded_file($_FILES['image']['tmp_name'],$target);
            $update = "UPDATE  products SET  `name`='$name',`image` = '$image',`price`='$price',`category_id`='$category',`quantity`='$quantity' WHERE id = '$id'";

        }       
        
       
     mysqli_query($conn, $update);
            header('location: dashboard.php');
       
 }



    function deleteProduct()
{
// //     //CODE HERE
//     require 'connect.php';
global $conn;
    $id = $_POST['delete'];
    $del = "DELETE FROM products where id='$id'";
    $query = mysqli_query($conn, $del);

    header('location: dashboard.php');
}


//Min Price counter
function counterMin(){
    global $conn;
    $query= "SELECT MIN(price)
            FROM products";
    $result=mysqli_query($conn, $query);

    $result= mysqli_fetch_array($result);

    return $result[0];

}


//Max Price counter
function counterMax(){
    global $conn;
    $query= "SELECT MAX(price)
    FROM products";

$result=mysqli_query($conn, $query);

$result= mysqli_fetch_array($result);

return $result[0];
}
 ?>