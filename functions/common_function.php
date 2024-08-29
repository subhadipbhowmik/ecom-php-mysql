<?php

// include database
include('./includes/connect.php');

// Function to display products
// Getting all products
function getAllProducts()
{
    global $con;
    // Condition for checking if 'category' or 'brand' is not set
    if (!isset($_GET['category']) && !isset($_GET['brand'])) {
        $FILE_PATH = "./admin_area/product_images/";
        $SELECT_QUERY = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,6";
        $result_query = mysqli_query($con, $SELECT_QUERY);

        if (mysqli_num_rows($result_query) > 0) {
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

                echo "<div class='col-md-4 mb-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='" . $image_path . "' class='card-img-top p-5' alt='" . $product_title . "'>
                    <div class='card-body'>
                    <h5 class='card-title'>" . $product_title . "</h5>
                    <p class='card-text'>" . $product_description . "</p>
                    <p class='card-text'>Price: $" . $product_price . "</p>
                    <a href='#' class='btn btn-primary'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                </div>
                </div>";
            }
        } else {
            echo "<h2 class='text-center text-danger'>No products found.</p>";
        }
    }
}

// Getting all products
function displayAllProducts()
{
    global $con;
    // Condition for checking if 'category' or 'brand' is not set
    if (!isset($_GET['category']) && !isset($_GET['brand'])) {
        $FILE_PATH = "./admin_area/product_images/";
        $SELECT_QUERY = "SELECT * FROM `products` ORDER BY rand()";
        $result_query = mysqli_query($con, $SELECT_QUERY);

        if (mysqli_num_rows($result_query) > 0) {
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

                echo "<div class='col-md-4 mb-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='" . $image_path . "' class='card-img-top p-5' alt='" . $product_title . "'>
                    <div class='card-body'>
                    <h5 class='card-title'>" . $product_title . "</h5>
                    <p class='card-text'>" . $product_description . "</p>
                    <p class='card-text'>Price: $" . $product_price . "</p>
                    <a href='#' class='btn btn-primary'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                </div>
                </div>";
            }
        } else {
            echo "<h2 class='text-center text-danger'>No products found.</p>";
        }
    }
}

// Getting unique category products
function getUniqueCategoryProducts()
{
    global $con;
    // Condition for checking if 'category' is set
    if (isset($_GET['category'])) {
        $category_id = $_GET['category'];
        $FILE_PATH = "./admin_area/product_images/";
        $SELECT_QUERY = "SELECT * FROM `products` WHERE category_id=$category_id";
        $result_query = mysqli_query($con, $SELECT_QUERY);

        if (mysqli_num_rows($result_query) > 0) {
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

                echo "<div class='col-md-4 mb-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='" . $image_path . "' class='card-img-top p-5' alt='" . $product_title . "'>
                    <div class='card-body'>
                    <h5 class='card-title'>" . $product_title . "</h5>
                    <p class='card-text'>" . $product_description . "</p>
                    <p class='card-text'>Price: $" . $product_price . "</p>
                    <a href='#' class='btn btn-primary'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                </div>
                </div>";
            }
        } else {
            echo "<h2 class='text-center text-danger'>No products found for this category.</p>";
        }
    }
}

// Getting unique brand products
function getUniqueBrandProducts()
{
    global $con;
    // Condition for checking if 'brand' is set
    if (isset($_GET['brand'])) {
        $brand_id = $_GET['brand'];
        $FILE_PATH = "./admin_area/product_images/";
        $SELECT_QUERY = "SELECT * FROM `products` WHERE brand_id=$brand_id";
        $result_query = mysqli_query($con, $SELECT_QUERY);

        if (mysqli_num_rows($result_query) > 0) {
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

                echo "<div class='col-md-4 mb-4'>
                <div class='card' style='width: 18rem;'>
                    <img src='" . $image_path . "' class='card-img-top p-5' alt='" . $product_title . "'>
                    <div class='card-body'>
                    <h5 class='card-title'>" . $product_title . "</h5>
                    <p class='card-text'>" . $product_description . "</p>
                    <p class='card-text'>Price: $" . $product_price . "</p>
                    <a href='#' class='btn btn-primary'>Add to Cart</a>
                    <a href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                    </div>
                </div>
                </div>";
            }
        } else {
            echo "<h2 class='text-center text-danger'>No products found for this brand.</p>";
        }
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
function displayBrands()
{
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


// get searching products
function searchProduct()
{
    global $con;
    // If search is set the this
    if (isset($_GET['search_data'])) {

        $search_query_data = $_GET['search_query'];
        $FILE_PATH = "./admin_area/product_images/";
        $SEARCH_QUERY = "SELECT * FROM `products` WHERE product_title LIKE '%$search_query_data%'";
        $result_query = mysqli_query($con, $SEARCH_QUERY);

        if (mysqli_num_rows($result_query) > 0) {
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
        } else {
            echo "<h2 class='text-center text-danger'>No products Name $search_query_data found.</p>";
        }
    }
}

//view details function
function viewDetails()
{
    global $con;
    // Condition for checking if 'category' or 'brand' is not set
    if (!isset($_GET['category']) && !isset($_GET['brand']) && isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];
        $FILE_PATH = "./admin_area/product_images/";
        $SELECT_QUERY = "SELECT * FROM `products` WHERE `product_id`=$product_id";
        $result_query = mysqli_query($con, $SELECT_QUERY);

        if (mysqli_num_rows($result_query) > 0) {
            while ($row = mysqli_fetch_assoc($result_query)) {
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $product_feature_image = $row['product_feature_image'];
                $product_image_1 = $row['product_image_1'];
                $product_image_2 = $row['product_image_2'];
                $product_price = $row['product_price'];
                $category_id = $row['category_id'];
                $brand_id = $row['brand_id'];

                // Build the full path to the image
                $image_path = $FILE_PATH . $product_feature_image;
                $image_path_1 = $FILE_PATH . $product_image_1;
                $image_path_2 = $FILE_PATH . $product_image_2;

                echo '<div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="' . $image_path . '" class="card-img-top p-5" alt="' . $product_title . '">
                    <div class="card-body">
                        <h5 class="card-title">' . $product_title . '</h5>
                        <p class="card-text">' . $product_description . '</p>
                        <p class="card-text">Price: $' . $product_price . '</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                        <a href="product_details.php?product_id=' . $product_id . '" class="btn btn-secondary">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center text-primary">Related Images</h4>
                    </div>
                    <div class="col-md-6">
                        <img src="' . $image_path_1 . '" class="card-img-top p-5" alt="' . $product_title . '">
                    </div>
                    <div class="col-md-6">
                        <img src="' . $image_path_2 . '" class="card-img-top p-5" alt="' . $product_title . '">
                    </div>
                </div>
            </div>';
            }
        } else {
            echo "<h2 class='text-center text-danger'>No products found.</p>";
        }
    }
}


// get ip address of the users
function getIPAddress() {  
    // Whether IP is from the shared internet  
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }  
    // Whether IP is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    // Whether IP is from the remote address  
    else {  
        $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  

// $ip = getIPAddress();  
// echo 'User Real IP Address - ' . $ip;  
 
