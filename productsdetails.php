<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale=10.>
	<title>All  Products - OnlineSliverCreek </title>
	<link rel="stylesheet" href="style1.css">
	<link
		href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,500;1,600;1,700;1,800&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
	
	  
    <!--------------single products details------------->
    <div class="small-container single-product">
        <div class="row">
            <div class="colu-2">
                <img src="images/pro1 (1).jpg" width="95%" id="ProductImg">
                <div class="small-img-row">
                    <div class="small-img-colu">
                        <img src="images/p4.jpg" width="70%" class="small-img">
                    </div>    
                    <div class="small-img-colu">
                        <img src="images/p2.jpg" width="70%" class="small-img">
                    </div>
                    <div class="small-img-colu">
                        <img src="images/pro1 (1).jpg" width="70%" class="small-img">
                    </div>
                    <div class="small-img-colu">
                        <img src="images/prod11.jpg" width="70%" class="small-img">
                    </div>    
                    
                </div>
            </div>
            <div class="colu-2">
                <p>Home / T-Shirt</p>
                <h2>Green Printed 
                T-Shirt 
                by HRX</h2>
                <h4>$500.00</h4>
                <select>
                    <option>Select Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>Large</option>
                    <option>Medium</option>
                    <option>Small</option>
                </select>
                <input type="number" value="1">
                <a href="cart.php" class="btn">Add To Cart</a>
                <h3>Product Details  <i class="fa fa-indent"></i></h3>
                <br>
                <p>Give your summer wardrobe a style upgrade with the HRX Men's Active T-shirt. Team it with a pair of shorts
                for your morning workout or a denims for an evening out with the guys.</p>
            </div>
        </div>
        <br>
    </div>
    <!------------title------------->
    <div class="small-container">
        <div class="row row-2">
            <h2>Related Products</h2>
            <p>View More</p>
        </div>
    </div>


    <!-----------products------------>
    <div class="small-container">
		<div class="row">
			<div class="colu-4">
				<img src="images/shoes1.jpg">
				<h4>White Sports Shoes</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
				<p>$1300.00</p>
			</div>
			<div class="colu-4">
				<img src="images/shocks.jpg">
				<h4>Reebok Cotton Shocks</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
				<p>$300.00</p>
			</div>
			<div class="colu-4">
				<img src="images/prod4.jpg">
				<h4>Blue Shoes</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
				<p>$1100.00</p>
			</div>
			<div class="colu-4">
				<img src="images/wat.jpg">
				<h4>Black Watch</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
				<p>$5000.00</p>
			</div>
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

<!--------js for product gallery----------->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }

</script>





</body>

</html>