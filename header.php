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
					<li id="nav1" class="<?php if(empty($_GET)) echo 'active'; else echo '';?>"><a  href="index.php">Home<span>Welcome!</span></a></li>

					<li id="nav2" class="<?php if(isset($_GET[md5('profile')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('profile'); ?>">About<span>Get to know us</span></a>
						<ul>
							<li><a href="?<?php echo md5('profile'); ?>" >Profile</a></li>
							<li><a href="?<?php echo md5('news'); ?>">Portfolio</a></li>
							<li><a href="?<?php echo md5('news'); ?>">News</a></li>
						</ul>
                    </li>
					<li id="nav3" class="<?php if(isset($_GET[md5('services')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('services'); ?>">Services<span>for you</span></a>
                        <ul>
							<li><a href="?<?php echo md5('services'); ?>">Shipping</a></li>
							<li><a href="?<?php echo md5('services'); ?>">Coal Mining</a></li>
						</ul>
                    </li>

					<li id="nav4" class="<?php if(isset($_GET[md5('products')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('products'); ?>">Products<span>The best</span></a>
                        <ul>
							<li><a href="?<?php echo md5('products'); ?>">Supplement</a></li>
							<li><a href="?<?php echo md5('products'); ?>">Solar Cell</a></li>
                        </ul>
                    </li>
					<li id="nav5" class="<?php if(isset($_GET[md5('contacts')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('contacts'); ?>">Contacts<span>Our Address</span></a></li>
				</ul>
			</nav>
		</div>

	</header>
<!-- header end-->
</div>

