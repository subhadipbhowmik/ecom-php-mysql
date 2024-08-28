<?php
include('../includes/connect.php');
include '../utils/alerts/alertUtils.php';

if (isset($_POST['insert_brands_btn'])) {
    $brand_title = trim($_POST['brand_title']);

    // Check if the brand title is empty
    if (empty($brand_title)) {
        echo "<script>alert('BRAND TITLE CANNOT BE EMPTY')</script>";
    } else {
        // Sanitize input
        $brand_title = mysqli_real_escape_string($con, $brand_title);

        // Check if the brand already exists
        $select_query = "SELECT * FROM `brands` WHERE brand_title='$brand_title'";
        $select_result = mysqli_query($con, $select_query);
        $number_of_records = mysqli_num_rows($select_result);

        if ($number_of_records > 0) {
            echo "<script>alert('BRAND ALREADY EXISTS')</script>";
        } else {
            // Insert the new brand
            $SQL_QUERY = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
            $query_result = mysqli_query($con, $SQL_QUERY);

            if ($query_result) {
                // echo "<script>alert('BRAND ADDED SUCCESSFULLY')</script>";
                showAlert('BRAND ADDED SUCCESSFULLY', 'success');
            } else {
                echo "<script>alert('ERROR: COULD NOT ADD BRAND')</script>";
            }
        }
    }
}
?>

<script src="../assets/js/sweetalert.min.js"></script>

<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-primary text-light" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input name="brand_title" type="text" class="form-control" placeholder="Insert Brands" aria-describedby="basic-addon1" aria-label="brands">
    </div>
    <div class="input-group w-10 mb-3 m-auto">
        <button type="submit" name="insert_brands_btn" class="bg-primary px-2 btn btn-primary">
            Insert Brand
        </button>
    </div>
</form>
