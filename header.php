
<div class="main zerogrid">
<!-- header -->
	<header>
		<div class="wrapper row">
		<h1><a href="index.html" id="logo"><img src="images/logo.png" /></a></h1>
		<nav>
			<ul id="menu">
				<li id="nav1" class="active"><a href="index.php">Home<span>Welcome!</span></a></li>
				<li id="nav2"><a href="index.php?<?php echo md5('news'); ?>">News<span>Fresh</span></a></li>
				<li id="nav3"><a href="index.php?services">Services<span>for you</span></a></li>
				<li id="nav4"><a href="index.php?products">Products<span>The best</span></a></li>
				<li id="nav5"><a href="index.php?contacts">Contacts<span>Our Address</span></a></li>
			</ul>

		</nav>
		</div>
		<?php
			//if(isset($_GET['home']))
		?>
		<div class="wrapper row">
			<div class="slider">
				<div class="rslides_container">
					<ul class="rslides" id="slider">
						<li><img src="images/img1.jpg" alt=""></li>
						<li><img src="images/img2.jpg" alt=""></li>
						<li><img src="images/img3.jpg" alt=""></li>
						<li><img src="images/img4.jpg" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
<!-- header end-->
</div>