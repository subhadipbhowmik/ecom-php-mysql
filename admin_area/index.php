<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - MKCS</title>
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- navbar  -->
    <div class="container-fluid p-0">
        <!-- first child  -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
            <div class="container-fluid">
                <img class="logo" src="./admin_images/logo.svg" alt="">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link text">
                                <h5>Welcome Guest</h5>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child  -->
        <div class="bg-light container-fluid p-0">
            <h3 class="text-center p-2">Manage </h3>
        </div>

        <!-- third child  -->
        <div class="container-fluid bg-warning py-4">
            <div class="row align-items-center">
                <div class="col-md-12 d-flex p-1">
                    <div class="text-center">
                        <img class="admin-image" src="./admin_images/inventory.png" alt="Admin Image">
                        <p class="mb-0">Admin Name</p>
                    </div>
                    <div class="ms-auto text-center">
                        <button class="btn btn-primary mx-2 my-2"><a href="" class="nav-link text-light">Insert Products</a></button>
                        <button class="btn btn-primary mx-2 my-2"><a href="" class="nav-link text-light">View Products</a></button>
                        <button class="btn btn-primary mx-2 my-2"><a href="index.php?insert_category" class="nav-link text-light">Insert Categories</a></button>
                        <button class="btn btn-primary mx-2 my-2"><a href="" class="nav-link text-light">View Categories</a></button>
                        <button class="btn btn-primary mx-2 my-2"><a href="index.php?insert_brand" class="nav-link text-light">Insert Brand</a></button>
                        <button class="btn btn-primary mx-2 my-2"><a href="" class="nav-link text-light">View Brands</a></button>
                        <button class="btn btn-primary mx-2 my-2"><a href="" class="nav-link text-light">All Orders</a></button>
                        <button class="btn btn-primary mx-2 my-2"><a href="" class="nav-link text-light">All Payments</a></button>
                        <button class="btn btn-primary mx-2 my-2"><a href="" class="nav-link text-light">List Users</a></button>
                        <button class="btn btn-primary mx-2 my-2"><a href="" class="nav-link text-light">Logout</a></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- fourth child  -->
         <div class="container my-5">
            <?php
            if(isset($_GET['insert_category'])){
                include('./insert_categories.php');
            }

            if(isset($_GET['insert_brand'])){
                include('./insert_brands.php');
            }
            ?>
         </div>

        <!-- last child  -->
        <div class="p-3 text-center footer">
            <p>All Copyright Reserved 2024</p>
        </div>
    </div>

    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>