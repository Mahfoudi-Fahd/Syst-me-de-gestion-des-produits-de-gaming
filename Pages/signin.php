<?php
include("connect.php");
session_start();



$query="SELECT * FROM signup";
mysqli_query($conn,$query);

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=md5($_POST['password']);

    $sql = "SELECT * FROM signup WHERE Name='$name' && Password='$password'";
    // $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows(mysqli_query($conn,$sql))){
        $_SESSION['name']=$name;
        header("Location:dashboard.php");
    }
   
    else
    {
    echo "incorrect inputs";
    }

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<form  action = "" method ="POST" class="bg-image" style="background-image: url('https://www.heet.org.uk/wp-content/uploads/2016/06/gradient-background-26046-26731-hd-wallpapers.jpg.png'); height: 100vh">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                 <h3 class="fs-1 mb-5 d-flex justify-content-center ">Sign in</h3>

                <div class="form-outline mb-4">
                    <input type="name" name="name" placeholder="Username " class="form-control form-control-lg" required/>
                </div>

                <div class="form-outline mb-4">
                    <input type="password" name="password" placeholder="Password"class="form-control form-control-lg" required />
                </div>

          
                <div class="d-flex justify-content-center ">
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Login</button>
                </div>
                <div>
                <p class="m-5 d-flex justify-content-center ">Don't have an account?    <a href="signup.php" class="text-white-50 fw-bold mx-4">Sign Up</a></p>
                </div>

            </div>
        </div>
    </div>
</form>
  
					
</body>
</html>