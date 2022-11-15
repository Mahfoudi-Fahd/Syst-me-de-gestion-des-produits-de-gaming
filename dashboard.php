
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
</head>
<body class="bg-image" style="background-image: url('https://www.heet.org.uk/wp-content/uploads/2016/06/gradient-background-26046-26731-hd-wallpapers.jpg.png'); height: 100vh">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="welcome.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">EcoGamer</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
        
        <li>
            <a href="welcome.php" class="nav-link text-white">
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
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" >
                <img src="" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong >Fahd</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow show" aria-labelledby="dropdownUser1" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(0px, -34px);" data-popper-placement="top-start">
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
            </ul>
        </div>
    </div>
</body>
</html>