<link rel="stylesheet" type="text/css" href="css/profile-sertif.css" />
<link rel="stylesheet" type="text/css" href="css/profile-history.css" />

<script src="js/jquery-1.7.js"></script>
<script src="js/profile.js"></script>
<script src="js/jquery.timelinr-0.9.54.js"></script>
<script type="text/javascript" src="js/jquery.gallery.js"></script>
<script src="js/responsiveslides.js"></script>
<script>
		$(function(){
			$().timelinr({
				autoPlay: 'true',
				autoPlayDirection: 'forward'
			})
		});
		$(function() {
			$('#dg-container').gallery();
			});
			$("#slideshow > div:gt(0)").hide();

		setInterval(function() {
		  $('#slideshow2 > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow2');
		},  3000);

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
</script>

<div class="main zerogrid">
	<article id="content">
		<h2 class="under">Profile</h2>
		<section id="profile-section" >
			<div id="slideshow2">
			   <div>
					<img id="profile-img" src="images/profile/h-1.jpg" alt="iPhone"  />
			   </div>
			   <div>
					<img id="profile-img" src="images/profile/ruko.jpg" alt="iPhone"  />
			   </div>
			</div>

			<div class="copy-container">
				<pre>
					Lbresouces merupakan perusahaan yang bergerak di bidang jasa dan produk. sadsadas asdasdas dasdasdasd sadasdsa sadasd asdasd
					sadsadsad asdsad sadasdsa asdasd sadasdas as asd aasda  sadsadasdasdas
					Lbresouces merupakan perusahaan yang bergerak di bidang jasa dan produk. sadsadas asdasdas dasdasdasd sadasdsa sadasd asdasd
					sadsadsad asdsad sadasdsa asdasd sadasdas as asd aasda  sadsadasdasdas
				</pre>
			</div>
		</section>
		<h2 class="under">LB Resources Officers Directory</h2>
		<section>
			<div class="slideshow" style="margin-top:-30px">
				<div class="wrapper row">
					<div class="slider">
						<div class="rslides_container">
							<ul class="rslides" id="slider">
								<li><img class="img-slide" src="images/profile/h-1.jpg" alt="" style="width:940px; height:423px"></li>
								<li><img class="img-slide" src="images/profile/ruko.jpg" alt="" style="width:940px; height:423px"></li>
								<li><img class="img-slide" src="images/profile/h-1.jpg" alt="" style="width:940px; height:423px"></li>
								<li><img class="img-slide" src="images/profile/ruko.jpg" alt="" style="width:940px; height:423px"></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="wrapper row" style="margin-top:20px">
				<div class="profile">
					<div class="under profile-title">BOARD OF DIRECTOR</div>
					<p>
						Director
						<br/>
						<b>Uray Iwan</b>
					</p>
					<p>
						Vice Director of Operation Management
						<br/>
						<b>Justian Edesius, SE., S.Kom.</b>
					</p>
					<p>
						Vice Director of Finance
						<br/>
						<b>Justian Edesius, SE., S.Kom.</b>
					</p>
					<p>
						Vice Director of Infrastructure and Support
						<br/>
						<b>Justian Edesius, SE., S.Kom.</b>
					</p>
				</div>
			</div>
		</section>
	</article>
</div>
