
<?php
session_start();

if(isset($_SESSION['name'])){
   
}
else
{
    header("location:signin.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-image d-flex " style="background-image: url('https://www.heet.org.uk/wp-content/uploads/2016/06/gradient-background-26046-26731-hd-wallpapers.jpg.png'); height: 100vh">
   
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;height:100%">
    
        <a href="dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <img src="https://cdn.dribbble.com/users/160383/screenshots/3143675/originpro.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <span class="fs-6">ORIGIN GAMER</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        
        <li>
            <a href="dashboard.php" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
            Dashboard
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
            Orders
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
            Products
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
            Customers
            </a>
        </li>
        </ul>
        <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG-Free-Download.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>fahd</strong>
      </a>
      <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
      </ul>
    </div>
    
</div>

        <!-- <div class="dropup-center dropup">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Account</button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item " href="logout.php">logout</a></li>
                <li><a class="dropdown-item" href="#">Action two</a></li>
                <li><a class="dropdown-item" href="#">Action three</a></li>
            </ul>
        </div> -->
        
        <div class="d-flex w-100 justify-content-evenly flex-wrap mt-5">
            <div class="card " style="width:11rem; height:7rem;">
                <div class="card-body ">
                    <h5 class="card-title d-flex justify-content-center ">Total Products</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text d-flex justify-content-center mt-4">0</p>
                </div>
            </div>
            <div class="card " style="width:11rem; height:7rem;">
                <div class="card-body ">
                    <h5 class="card-title d-flex justify-content-center ">In Stock</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text d-flex justify-content-center mt-4">0</p>
                </div>
            </div>
            <div class="card " style="width:11rem; height:7rem;">
                <div class="card-body ">
                    <h5 class="card-title d-flex justify-content-center ">Out Of Stock</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text d-flex justify-content-center mt-4">0</p>
                </div>
            </div>
        </div>
    
</body>
</html>