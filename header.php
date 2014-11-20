<link rel="stylesheet" type="text/css" href="css/menu.css" />
<link rel="stylesheet" href="font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic" />

<div class="main zerogrid">
<!-- header -->
	<header>
		<div class="wrapper row">
			<h1><a href="index.html" id="logo"><img src="images/logo.png" /></a></h1>
    	<nav id="colorNav" >
				<ul>
					<li id="nav1" class="<?php if(empty($_GET)) echo 'active'; else echo '';?>"><a  href="index.php">Home<span>Welcome!</span></a>                    </li>

					<li id="nav2" class="<?php if(isset($_GET[md5('news')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('news'); ?>">About<span>Get to know us</span></a>
<<<<<<< HEAD
                                        
                    <ul>
						<li><a href="?<?php echo md5('news'); ?>">Profile</a></li>
						<li><a href="?<?php echo md5('news'); ?>">Portfolio</a></li>
						<li><a href="?<?php echo md5('news'); ?>">Certificate</a></li>
                        <li><a href="?<?php echo md5('news'); ?>">News</a></li>
					</ul>
=======
						<ul>
							<li><a href="#">Profile</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Certificate</a></li>
							<li><a href="#">News</a></li>
						</ul>
>>>>>>> origin/master
                    </li>
					<li id="nav3" class="<?php if(isset($_GET[md5('services')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('services'); ?>">Services<span>for you</span></a>

                        <ul>
<<<<<<< HEAD
						<li><a href="?<?php echo md5('services'); ?>">Shipping</a></li>
						<li><a href="?<?php echo md5('services'); ?>">Coal Mining</a></li>
=======
							<li><a href="#">Shipping</a></li>
							<li><a href="#">Coal Mining</a></li>
>>>>>>> origin/master
                        </ul>
					</li>
					<li id="nav4" class="<?php if(isset($_GET[md5('products')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('products'); ?>">Products<span>The best</span></a>
                        <ul>
<<<<<<< HEAD
						<li><a href="?<?php echo md5('products'); ?>">Supplement</a></li>
						<li><a href="?<?php echo md5('products'); ?>">Solar Cell</a></li>
=======
							<li><a href="#">Supplement</a></li>
							<li><a href="#">Solar Cell</a></li>
>>>>>>> origin/master
                        </ul>

                    </li>
					<li id="nav5" class="<?php if(isset($_GET[md5('contacts')]) or isset($_GET[md5('location')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('contacts'); ?>">Contacts<span>Our Address</span></a>
						<ul>
							<li><a href="?<?php echo md5('location'); ?>">Our Location</a></li>
							<li><a href="?<?php echo md5('contacts'); ?>">Contact Us</a></li>
                        </ul>
					</li>
				</ul>
		</nav>
		</div>

	</header>
<!-- header end-->
</div>

