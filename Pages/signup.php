<?php
// connection
include("connect.php");

if(isset($_POST['submit'])){
$name=htmlspecialchars(strtolower(trim($_POST['name'])));
$email=htmlspecialchars(strtolower(trim($_POST['email'])));
$password=htmlspecialchars(strtolower(trim(md5($_POST['password']))));
$query= "INSERT INTO signup(Name,Email,Password) 
        VALUES('$name','$email','$password')";
        mysqli_query($conn,$query);
        header("location:signin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css"/>
    <script defer  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
</head>
<body>
<form  action = "" method ="POST" class="bg-image" style="background-image: url('https://www.heet.org.uk/wp-content/uploads/2016/06/gradient-background-26046-26731-hd-wallpapers.jpg.png'); height: 100vh" data-parsley-validate>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                 <h3 class="fs-1 mb-5 d-flex justify-content-center ">Sign Up</h3>

                <div class="form-outline mb-4">
                    <input type="name" name="name" placeholder="Username " class="form-control form-control-lg" required/>
                </div>
                <div class="form-outline mb-4">
                    <input type="email" name="email" placeholder="email " class="form-control form-control-lg" data-parsley-type="email" required/>
                </div>

                <div class="form-outline mb-4">
                <input class="input form form-control" type="password" name="password" data-parsley-minlength="8" required> 
                           </div>

          
                <div class="d-flex justify-content-center ">
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" >register</button>
                </div>
                <div>
                <p class="m-5 d-flex justify-content-center">Alrady have an account? <a href="signin.php" class="text-white-50 fw-bold mx-4">Sign In</a></p>
                </div>

            </div>
        </div>
    </div>
</form>
					
					
</body>
</html>