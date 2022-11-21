<?php
session_start();
include('script.php');

if(!isset($_SESSION['name'])){
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body class="bg-image d-flex ">


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
                <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-expanded="false">Profile</a>
                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Settings</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 02</a></li>
                    <li><a href="logout.php" class="dropdown-item text-light pl-4 p-2">Signout</a></li>
                </ul>
            </li>

        </ul>
    </nav>
    <section class="p-5 my-container">
        <button class="btn my-4" id="menu-btn"><i class="fa fa-bars"></i></button>
    </section>
    <!-- CARDS -->

    <div class=" container">
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
                </div>
            </div>
        </div>
    
            <!-- Button trigger modal -->
            <button type="button" class="addProduct btn btn-outline-secondary container m-5" data-toggle="modal"
                data-target="#exampleModal">
                Add Product
            </button>

            <!-- Table -->

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>

                
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <form action="script.php" method="post">
                                            <div class="form-group mt-2">
                                                <label>Name</label>
                                                <input class="form-control" name="name" placeholder="Product Name">
                                            </div>
                                            <div class="form-group mt-2">
                                                <label>Category</label>
                                                <select name="category" class="form-control">
                                                    <option value="">Please select</option>
                                                    <option value="1">Pc Gamer</option>
                                                    <option value="2">Accessories</option>
                                                    <option value="3">Consoles</option>
                                                    <option value="4">Composants</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-2">
                                                <label for="exampleFormControlTextarea1">Price</label>
                                                <input class="form-control" name="price" placeholder="Price">
                                            </div>

                                            <div class="form-group mt-2">
                                                <label>Status</label>
                                                <select name="status" class="form-control">
                                                    <option value="1">In stock</option>
                                                    <option value="2">Out of stock</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Product Image</label>
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                            <div class="modal-footer mt-2">
                                                <button type="submit" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-info" value="Save changes"
                                                    name="save">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- bootstrap js -->
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                                crossorigin="anonymous"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
                                integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d"
                                crossorigin="anonymous"></script>
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
</div>
</body>

</html>