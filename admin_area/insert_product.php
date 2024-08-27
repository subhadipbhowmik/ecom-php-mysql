<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <!-- Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container">
        <h3 class="text-center m-2">Insert Products</h3>
        <form action="" method="post" enctype="multipart/form-data">
            <!-- product title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input name="product_title" type="text" id="product_title" class="form-control" placeholder="Enter Product Title" autocomplete="off" required>
            </div>

            <!-- product description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-label">Product Description</label>
                <textarea name="product_description" id="product_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required></textarea>
            </div>

            <!-- product keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input name="product_keywords" type="text" id="product_keywords" class="form-control" placeholder="Enter Product Keywords" autocomplete="off" required>
            </div>

            <!-- product categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_categories" class="form-label">Product Categories</label>
                <select name="product_categories" id="product_categories" class="form-control" required>
                    <option value="" disabled selected>Select Product Category</option>
                    <option value="electronics">Electronics</option>
                    <option value="fashion">Fashion</option>
                    <option value="home_appliances">Home Appliances</option>
                    <option value="books">Books</option>
                    <option value="beauty">Beauty</option>
                </select>
            </div>

            <!-- product brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_brands" class="form-label">Product Brands</label>
                <select name="product_brands" id="product_brands" class="form-control" required>
                    <option value="" disabled selected>Select Product Brand</option>
                    <option value="apple">Apple</option>
                    <option value="samsung">Samsung</option>
                    <option value="sony">Sony</option>
                    <option value="nike">Nike</option>
                    <option value="adidas">Adidas</option>
                    <!-- Add more brands as needed -->
                </select>
            </div>

            <!-- product feature image -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_feature_image" class="form-label">Product Feature Image</label>
                <input name="product_feature_image" type="file" id="product_feature_image" class="form-control" accept="image/*" required>
            </div>

            <!-- product image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image_1" class="form-label">Product Image 1</label>
                <input name="product_image_1" type="file" id="product_image_1" class="form-control" accept="image/*" required>
            </div>

            <!-- product image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image_2" class="form-label">Product Image 2</label>
                <input name="product_image_2" type="file" id="product_image_2" class="form-control" accept="image/*" required>
            </div>

            <!-- product price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product Price</label>
                <input name="product_price" type="number" id="product_price" class="form-control" placeholder="Enter Product Price" step="0.01" min="0" required>
            </div>

            <!-- submit button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input name="insert_product_btn" type="submit" class="btn btn-primary w-100" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>
