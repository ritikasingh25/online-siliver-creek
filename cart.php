<?php
    session_start();
    $database_name = "Products";
    $con = mysqli_connect("localhost","root","",$database_name);
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale=10.>
	<title>Shopping Cart - OnlineSliverCreek </title>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
        *{
            font-family: 'Open Sans', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
            margin-right: -720px;
            margin-left: 0px;
        }
        table, th, tr{
            text-align: center;
     
	
}
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        .table th{
            background-color: #efefef;
        }
        .img-responsive{
            align: center;
            width: 150px;
	        height: 150px;
	        margin-right: 50px;
            display: flex;
	        flex-wrap: wrap;
          

        }
            
        
    

       

    </style>
	
</head>

<body>
	<div class="header">

		<div class="container">
			<div class="navbar">
				<div class="logo">
	
					<img src="images/logo.jpeg" width="145px">
				</div>
				<nav>
					<ul id="MenuItems">
						<li><a href="index.php">Home</a></li>
						<li><a href="registration.php">Register</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>
				</nav>

				<a class="nav-link" href="cart.php"><img src="https://img.icons8.com/color/30/ffffff/shopping-cart--v1.png"/></a>
				<img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
			
		</div>
	</div>
    
    <div class="container" style="width: 65%">
        <h2>Shopping Cart</h2>
        <?php
        $query = "SELECT * FROM product ORDER BY id ASC ";
        $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

                            <div class="product">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive">
                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
                                <input type="number" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>
        
        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>
            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
        
    
</div>
<!----------------footer---------->
<div class="footer">
				<div class="container">
					<div class="row">
						<div class="footer-colu-1">
							<h3>Download Our App</h3>
							<p>Download App for Android and ios mobile phone.</p>
							<div class="app-logo">
								<img src="images/app-logo.png">
								<img src="images/app.png">
							</div>
						</div>
						<div class="footer-colu-2">
							<img src="images/log.png">
							<p>Our Purpose Is To Sustainably Make the Pleasure and
								Benefits of Sports Accessible to the Many.
							</p>
						</div>
						<div class="footer-colu-3">
							<h3>Useful Links</h3>
							<ul>
								<li>Coupons</li>
								<li>Blog Post</li>
								<li>Return Policy</li>
								<li>Join Affiliate</li>

							</ul>
						</div>
						<div class="footer-colu-4">
							<h3>Follow us</h3>
							<ul>
								<li>Facebook</li>
								<li>Twitter</li>
								<li>Instagram</li>
								<li>YouTube</li>

							</ul>
						</div>
					</div>
					<hr>
					<p class="Copyright">Conditions of use Privacy Notice Intrested-Based Ads &#169 2021,
						OnlineSilverCreek.com </p>
				</div>
            </div>
<!----------------js for toggle menu-------------->
    <script>
	    var MenuItems = document.getElementById("MenuItems");
	    MenuItems.style.maxHeight = "0px";
	    function menutoggle(){
            if(MenuItems.style.maxHeight == "0px"){
			    MenuItems.style.maxHeight = "200px";
		}
		    else{
			    MenuItems.style.maxHeight = "0px";
		    }
	}
    </script>
</body>

</html>
</body>
</html>