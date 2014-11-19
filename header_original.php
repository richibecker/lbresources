
<div class="main zerogrid">
<!-- header -->
	<header>
		<div class="wrapper row">
			<h1><a href="index.html" id="logo"><img src="images/logo.png" /></a></h1>
			<nav>
				<ul id="menu">
					<li id="nav1" class="<?php if(empty($_GET)) echo 'active'; else echo '';?>"><a href="index.php">Home<span>Welcome!</span></a></li>
					<li id="nav2" class="<?php if(isset($_GET[md5('news')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('news'); ?>">News<span>Fresh</span></a></li>
					<li id="nav3" class="<?php if(isset($_GET[md5('services')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('services'); ?>">Services<span>for you</span></a></li>
					<li id="nav4" class="<?php if(isset($_GET[md5('products')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('products'); ?>">Products<span>The best</span></a></li>
					<li id="nav5" class="<?php if(isset($_GET[md5('contacts')])) echo 'active'; else echo '';?>"><a href="?<?php echo md5('contacts'); ?>">Contacts<span>Our Address</span></a></li>
				</ul>

			</nav>
		</div>
	</header>
<!-- header end-->
</div>
