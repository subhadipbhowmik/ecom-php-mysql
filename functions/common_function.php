<?php

// include database
include('./includes/connect.php');

// getting all products
function getAllProducts()
{
    global $con;
    $FILE_PATH = "./admin_area/product_images/";
    $SELECT_QUERY = "SELECT * FROM `products` ORDER BY rand()";
    $result_query = mysqli_query($con, $SELECT_QUERY);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_feature_image = $row['product_feature_image'];
        $product_price = $row['product_price'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];

        // Build the full path to the image
        $image_path = $FILE_PATH . $product_feature_image;

        echo '<div class="col-md-4 mb-4">
      <div class="card" style="width: 18rem;">
        <img src="' . $image_path . '" class="card-img-top p-5" alt="' . $product_title . '">
        <div class="card-body">
          <h5 class="card-title">' . $product_title . '</h5>
          <p class="card-text">' . $product_description . '</p>
          <p class="card-text">Price: $' . $product_price . '</p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
          <a href="#" class="btn btn-secondary">View More</a>
        </div>
      </div>
    </div>';
    }
}

// show categories 
function displayCategories()
{
    global $con;
    // Assuming you have a 'categories' table
    $SELECT_CATEGORIES = "SELECT * FROM `categories`";
    $categories_result = mysqli_query($con, $SELECT_CATEGORIES);

    while ($category_data = mysqli_fetch_assoc($categories_result)) {
        $category_title = $category_data['category_title']; // Access category title
        $category_id = $category_data['category_id']; // Access category ID

        echo "<li class='nav-item ms-2 text-light'>
                      <a href='index.php?category=$category_id' class='nav-link'>$category_title</a>
                      </li>";
    }
}

//show brands 
function displayBrands(){
    global $con;
    $SELECT_BRANDS = "SELECT * FROM `brands`";
    $brands_result = mysqli_query($con, $SELECT_BRANDS);

    while ($row_data = mysqli_fetch_assoc($brands_result)) {
        $brand_title = $row_data['brand_title']; // Access brand title
        $brand_id = $row_data['brand_id']; // Access brand ID

        echo "<li class='nav-item ms-2 text-light'>
              <a href='index.php?brand=$brand_id' class='nav-link'>$brand_title</a>
              </li>";
    }
}

?>