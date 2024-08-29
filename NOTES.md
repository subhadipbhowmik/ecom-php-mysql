## Mostly Time Used Mysql Functions

1. mysqli_connect($host, $user, $password, $database, $port)
2. $SELECT_QUERY= "SELECT * FROM `cart_details` WHERE product_id=$get_product_id AND ip_address=$ip";
3. $RESULT_QUERY=mysqli_query($con, $SELECT_QUERY);
4. $num_of_rows= mysqli_num_rows($RESULT_QUERY);
5. isset($_GET['add_to_cart'])