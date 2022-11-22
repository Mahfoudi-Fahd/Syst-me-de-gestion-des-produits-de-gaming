<?php
    //INCLUDE DATABASE FILE
    include'connect.php';
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES

    //ROUTING
    if(isset($_POST['save']))        saveProduct();
    if(isset($_POST['update']))      updateProduct();
    if(isset($_POST['delete']))      deleteTask();
    

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
                 <td>".$row['category']."</td>
                 <td>".$row['price']."</td>
                <td>".$row['status']."</td>
                <form action=\"script.php\" method=\"post\">
                    <td>
                    <button type=\"submit\" class=\"btn btn-outline-secondary\" name=\"delete\" value=\"".$row['id']."\"><i class=\"fa fa-trash \" aria-hidden=\"true \"></i></button>
                    <button type=\"button\" data-toggle=\"modal\" data-target=\"#exampleModal\" class=\"btn btn-outline-secondary\" name=\"update\" 
                    onclick=\"updateProduct(".$row["id"].",'".$row["name"]."','".$row["id_cat"]."','".$row["price"]."')\" 
                    value=\"".$row['id']."\"><i class=\"fas fa-edit\"></i></button>
                    </td>
                </form>      
            </tr>"; 
        }
      }
      
        }
      
        // onclick="updateProduct('.$row['id'].','.$row['name'].','.$row['category'].','.$row['price'].','.$row['status'].')"

//     function countTask($nb) 
// {
//     include('database.php');
   
//     $sql = "SELECT  COUNT(*) As nbrow from tasks where status_id=$nb";
            
//     $query=mysqli_query($conn, $sql);
//     $row=mysqli_fetch_assoc($query);
//     echo $row['nbrow'];

// }

                
    function saveProduct()
    {
        global $conn;
            
            $name       = ($_POST['name']);
            $price      = ($_POST['price']);
            $status      = ($_POST['status']);
            $category   = ($_POST['category']);
          
           $sql= "INSERT INTO products(name,price,status,category_id) 
            VALUES ('$name','$price','$status','$category')";

          

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

       
        //CODE HERE
    
        $update = "UPDATE  products SET  `name`='$name',`price`='$price',`category_id`='$category' WHERE id = '$id'";
        
        
        //SQL UPDATE
        if(mysqli_query($conn, $update)){
            header('location: dashboard.php');
        }else{
            echo "erreur lors de la modification";
        }
 }



    function deleteTask()
{
// //     //CODE HERE
//     require 'connect.php';
global $conn;
    $id = $_POST['delete'];
    $del = "DELETE FROM products where id='$id'";
    $query = mysqli_query($conn, $del);

    header('location: dashboard.php');
}
 ?>