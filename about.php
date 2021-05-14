<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About Us</title>
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
    <section id="About">
        <div class=" About container">
            <div id="section-1">
                <h1 style="color: teal">About Us<span></span></h1><br>
                <p>
                    This Website "Online Silver Creek" is an online shopping store for "Trending sportswear", Gym equipment’s for Iron benders, Notable high-protein diets and effective products against COVID-19. 
                    It contains protien products, gym equipment’s for gym people, new styles of sportwears which are in current trend and many other effective products which are useful during this COVID-19 pandemic for selling.
                      
                </p>
                <div class="colu-2">
			<img src="images/bg.jpg" height="500px" width="1300px">
				
	</div>
    
                </div>
               
        
            </div>
        </div>
    </div>
    </div>
    </section>
    
				
		
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