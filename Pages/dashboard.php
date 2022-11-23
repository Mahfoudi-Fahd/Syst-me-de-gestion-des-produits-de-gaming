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
    <title>Origin Gamer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../includes/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css"/>
    <script defer  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script defer src="https://parsleyjs.org/dist/parsley.min.js"></script>
</head>

<body class="bg-image d-flex ">
            
<!-- sideBar  -->

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
                   
                    <li><a href="logout.php" class="dropdown-item text-light pl-4 p-2">Signout</a></li>
                </ul>
            </li>

        </ul>
    </nav>
    <section class=" my-container">
        <button class="btn" id="menu-btn"><i class="fa fa-bars"></i></button>
    </section>


    <!-- CARDS -->

    <div class=" container">
                <div class="alert" role="alert"> welcome <?php echo $_SESSION['name'] ?></div>
        <div class="cards row mx-auto">
            <div class="card col-md-12 col-12 mt-5 ms-2 me-3" style=" background-color: #5e5e5e">
                <div class=" card-body">
                    <h4 class="card-title text-center text-white">Total Products</h4>
                    <h4 class="card-text text-center text-white"><?php countProduct();?></h4>
                </div>
            </div>
            <div class="card col-md col-12 mt-5  ms-2 me-3" style="  background-color: #5e5e5e;">
                <div class="card-body">
                    <h4 class="card-title text-center text-white">Min Price</h4>
                    <h4 class="card-text text-center text-white"><?php echo counterMin();?></h4>
                </div>
            </div>

            <div class="card col-md col-12 mt-5 ms-2 me-3" style=" background-color:#5e5e5e">
                <div class="card-body">
                    <h4 class="card-title text-center text-white">Max Price</h4>
                    <h4 class="card-text text-center text-white"><?php echo counterMax()?></h4>
                </div>
            </div>
        </div>
    
            <!-- Button trigger modal -->
            <button type="button" onclick="add()" class="addProduct btn btn-outline-secondary container m-5" data-toggle="modal"
                data-target="#exampleModal">
                Add Product
            </button>

            
            <!-- Table -->

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                <tr>
                <?php
                ShowProduct();
                ?>
                </tr>
                </tbody>
            </table>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal"  tabindex="-1" role="dialog"
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
                                        <form action="script.php" id="form" method="POST" enctype="multipart/form-data" data-parsley-validate>
                              
                                            <div class="form-group mt-2">
                                                <input class="form-control" id="id" name="id" type="hidden">
                                                <label>Name</label>
                                                <input class="form-control" id="name" name="name" placeholder="Product Name" data-parsley-trigger="keyup" required>
                                            </div>
                                           
                                            <div class="form-group mt-2">
                                                <label for="exampleFormControlTextarea1">Price</label>
                                                <input class="form-control" id="price" name="price" placeholder="Price" type="number" data-parsley-type="integer" data-parsley-trigger="keyup" required>
                                            </div>
                                            

                                            <div class="form-group mt-2">
                                            <label for="exampleFormControlTextarea1">Quantity</label>
                                                <input class="form-control" id="quantity" name="quantity" placeholder="Quantity" type="number" data-parsley-type="integer" data-parsley-trigger="keyup" required>
                                            </div>
                                            
                                            <div class="form-group mt-2">
                                                <label>Category</label>
                                                <select name="category" class="form-control" required>
                                                    <option value="">Please select</option>
                                                    <option value="1" id="1">Accessories</option>
                                                    <option value="2" id="2">Consoles</option>
                                                    <option value="3" id="3">Composants</option>
                                                    <option value="4" id="4">Pc Gamer</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Product Image</label>
                                                <input class="form-control" name="image" type="file" id="formFile">
                                            </div>
                                            <div class="modal-footer mt-2">
                                                <button type="submit" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <input type="submit" id="save_button" class="btn btn-info" value="Save changes"
                                                    name="save">
                                                <input type="submit" id="update_button" class="btn btn-info" value="Update changes"
                                                    name="update">

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



                            function updateProduct(id, name, category, price, quantity) {


                                document.getElementById("update_button").style.display = "block";
                                document.getElementById("save_button").style.display = "none";
                                document.getElementById("id").value = id;
                                document.getElementById("name").value = name;
                                document.getElementById("price").value = price;
                                document.getElementById(category).selected = true;
                                document.getElementById("quantity").value= quantity;
                                   
                            }
                            function add(){
                                document.getElementById("form").reset();
                                document.getElementById("update_button").style.display = "none";
                                document.getElementById("save_button").style.display = "block";
                            }
                           
                            </script>
                            

</div><script src="main.js"></script>
</body>

</html>