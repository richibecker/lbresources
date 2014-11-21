<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/responsiveslides.css" />
<link rel='stylesheet' type='text/css' href='css/video.css' />
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_400.font.js"></script>
<script type="text/javascript" src="js/Swis721_Cn_BT_700.font.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/jcarousellite.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src='js/video.js'></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->


	<script src="js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 960,
			namespace: "centered-btns"
		  });
		});

		$(document).ready(function() {
			$('video').videoPlayer({
				'playerWidth' : 1,
				'videoClass' : 'video'
			});
		});
	</script>

</head>
<body id="<?php
			if(empty($_GET))
			{
				echo 'page1';
			}
			else if(isset($_GET[md5('news')])){
				echo 'page2';
			}
			else if(isset($_GET[md5('services')])){
				echo 'page3';
			}
			else if(isset($_GET[md5('products')])){
				echo 'page4';
			}
			else if(isset($_GET[md5('contacts')])){
				echo 'page5';
			}
			else{
				echo 'page1';
			}
		?>">

	<div class="body1">
		<div class="body2">
			<?php
				if(!empty($_GET)){
					echo '<div class="body5">';
				}
				include("header.php");
				if(!empty($_GET)){
					echo '</div>';
				}
			?>
		</div>
	</div>

	<?php
		if(empty($_GET)){
	?>
	<div class="slideshow" style="margin-top:-30px">
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
	</div>
	<?php
		}
	?>

	<div class="body3">

		<?php
			if(empty($_GET))
			{
				include("content/home.php");
			}
			else if(isset($_GET[md5('news')])){
				include("content/news.php");
			}
			else if(isset($_GET[md5('services')])){
				include("content/services.php");
			}
			else if(isset($_GET[md5('products')])){
				include("content/products.php");
			}
			else if(isset($_GET[md5('contacts')])){
				include("content/contacts.php");
			}
			else{
				include("content/home.php");
			}
		?>
	</div>
	<div class="body4">
		<?php
			include("footer.php");
		?>
	</div>
</body>
</html>