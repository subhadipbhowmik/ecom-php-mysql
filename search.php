<?php
include('./includes/connect.php');
include('./functions/common_function.php')
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eCom</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- navbar -->
  <div class="container-fluid">
    <!-- first child  -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="#">MKCS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navcontent" aria-controls="navcontent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navcontent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i>
               <sup><?php cartItemNumber()?></sup>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Total Price</a>
          </li>
        </ul>
        <form class="d-flex" role="search" action="" method="get">
          <input name="search_query" class="form-control me-2" type="search" placeholder="Search Cycles " aria-label="search">
          <input name="search_data" class="btn btn-outline-success" type="submit" value="search">
        </form>
      </div>
    </nav>

    <!-- second child  -->
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </nav>

    <!-- third child  -->
    <div class="text-center">
      <h3 class="text-center">Hidden Store</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, adipisci?</p>
    </div>

    <!-- fourth child  -->
    <div class="row px-4">
      <div class="col-md-10">
        <!-- fetching products  -->
        <div class="row">
          <?php
          searchProduct();
          getUniqueCategoryProducts();
          getUniqueBrandProducts();
          ?>
        </div>
      </div>


      <div class="col-md-2 bg-secondary rounded p-0">
        <!-- side nav  -->
        <ul class="navbar-nav me-auto rounded">
          <!-- Display Categories -->
          <li class="nav-item bg-primary text-center rounded">
            <a href="#" class="nav-link text-light">
              <h4>Categories</h4>
            </a>
          </li>
          <?php
          displayCategories();
          ?>

          <!-- Display Brands -->
          <li class="nav-item bg-primary text-center rounded">
            <a href="#" class="nav-link text-light">
              <h4>Brands</h4>
            </a>
          </li>
          <?php
          displayBrands();
          ?>


        </ul>
      </div>



    </div>
    <!-- footer  -->

    <div class="py-2 bg-warning mt-4 text-center rounded-top">
      <p class="mb-0">All Copyright Reserved</p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>