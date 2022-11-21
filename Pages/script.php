<?php
    //INCLUDE DATABASE FILE
    include'connect.php';
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES

    //ROUTING
    if(isset($_POST['save']))        saveProduct();
    if(isset($_POST['update']))      updateTask();
    if(isset($_POST['delete']))      deleteTask();
    

    function ShowProduct($status)
    {

        $sql="SELECT * FROM product";

        $result=mysqli_query($conn,$sql);
        return $result;
        }
    //    echo '<tr>
    //             <th scope="row">1</th>
    //             <td>Mark</td>
    //             <td>Otto</td>
    //             <td>@mdo</td>       
    //         </tr>'  
        //SQL SELECT
    


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
        
            
            $name       = ($_POST['name']);
            $price      = ($_POST['price']);
            $status      = ($_POST['status']);
            $category   = ($_POST['category']);
          
           $sql= "INSERT INTO products(name,price,status,category_id) 
            VALUES ('$name','$price','$status','$category')";

          global $conn;

           mysqli_query($conn,$sql);

        }
        

//     function updateTask()
//      {
//         require 'database.php';
//         $id = $_POST['index'];
//         $title = $_POST['title'];
//         $type = $_POST['tasktype'];
//         $priority = $_POST['priority'];
//         $status = $_POST['status'];
//         $date = $_POST['date'];
//         $description = $_POST['description'];
       
//         //CODE HERE
    
//         $upd = "UPDATE  `tasks` SET  `title`='$title',`type_id`='$type',`priority_id`='$priority',`status_id`='$status',`task_datetime`='$date',`description`='$description' WHERE id = '$id'";
//         mysqli_query($conn, $upd);
        
//         //SQL UPDATE
        
//         $_SESSION['message'] = "Task has been updated successfully !";
//         header('location: index.php');
//  }

//     function deleteTask()
// {
//     //CODE HERE
//     require 'database.php';
//     $id = $_POST['index'];
//     $del = "DELETE FROM tasks where id='$id'";
//     $query = mysqli_query($conn, $del);
//     //SQL DELETE
//     $_SESSION['message'] = "Task has been deleted successfully !";
//     header('location: index.php');
// }
// ?>