
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
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body class="bg-image d-flex ">
   
<!-- <div  class="Sidebar d-flex flex-column flex-shrink-0 p-3 text-white bg-dark ">
    
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
    
</div> -->
<nav class="navbar navbar-dark bg-dark">
<nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">Navbar</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</nav>
<nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
        <a href="#" class="navbar-brand text-light mt-5">
            <div class=" font-weight-bold">ORIGIN GAMER</div>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100">
                <a href="dashboard.php" class="nav-link text-light pl-4">Dashboard</a>
            </li>
            
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4">Contact</a>
            </li>
            <li class="nav-item dropdown w-100">
                <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Profile</a>
                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Settings</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 02</a></li>
                    <li><a href="logout.php" class="dropdown-item text-light pl-4 p-2">Signout</a></li>
                </ul>
            </li>
            
        </ul>
    </nav>
    <section class="p-4 my-container">
        <button class="btn my-4" id="menu-btn"><i class="fa fa-bars"></i></button>
         </section>

        <!-- CARDS -->
        
        <div class="container">
            <div class="cards row mx-auto">
                <div class="card col-md-12 col-12 mt-5 ms-2 me-3" style=" background-color: #5e5e5e">
                    <div class=" card-body">
                        <h4 class="card-title text-center text-white">Total Products</h4>
                        <h4 class="card-text text-center text-white">0</h4>
                    </div>
                </div>
                <div class="card col-md col-12 mt-5  ms-2 me-3" style="  background-color: #5e5e5e;">
                    <div class="card-body">
                        <h4 class="card-title text-center text-white">Products In Stock</h4>
                        <h4 class="card-text text-center text-white">0</h4>
                    </div>
                </div>
 
                    <div class="card col-md col-12 mt-5 ms-2 me-3" style=" background-color:#5e5e5e">
                        <div class="card-body">
                            <h4 class="card-title text-center text-white">Products Out Of Stock</h4>
                            <h4 class="card-text text-center text-white">0</h4>
                        <div>
                    </div>
            </div>
        </div>
        
     <!-- bootstrap js -->
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
    </script>
    
</body>
</html>