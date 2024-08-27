<?php
include('../includes/connect.php');

if (isset($_POST['insert_category_btn'])) {
    $category_title = trim($_POST['category_title']);

    // Check if the category title is empty
    if (empty($category_title)) {
        echo "<script>alert('CATEGORY TITLE CANNOT BE EMPTY')</script>";
    } else {
        // Sanitize input
        $category_title = mysqli_real_escape_string($con, $category_title);

        // Check if the category already exists
        $select_query = "SELECT * FROM `categories` WHERE category_title='$category_title'";
        $select_result = mysqli_query($con, $select_query);
        $number_of_records = mysqli_num_rows($select_result);

        if ($number_of_records > 0) {
            echo "<script>alert('CATEGORY ALREADY EXISTS')</script>";
        } else {
            // Insert the new category
            $SQL_QUERY = "INSERT INTO `categories` (category_title) VALUES ('$category_title')";
            $query_result = mysqli_query($con, $SQL_QUERY);

            if ($query_result) {
                echo "<script>alert('CATEGORY ADDED SUCCESSFULLY')</script>";
            } else {
                echo "<script>alert('ERROR: COULD NOT ADD CATEGORY')</script>";
            }
        }
    }
}
?>

<h2 class="text-center">Insert Brands</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-3">
        <span class="input-group-text bg-primary text-light" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input name="category_title" type="text" class="form-control" placeholder="Insert Categories" aria-describedby="basic-addon1" aria-label="categories">
    </div>
    <div class="input-group w-10 mb-3 m-auto">
        <input name="insert_category_btn" type="submit" class="bg-primary px-2 btn btn-primary" value="Insert Category">
    </div>
</form>