<?php

	function get_skype_status($username, $image = false, $icon = false ){
		//creating url
		//if you need small icon
		if($image && $icon)
		{
		/***************************************
			Possible types of images:

			* balloon            - Balloon style
			* bigclassic        - Big Classic Style
			* smallclassic        - Small Classic Style
			* smallicon        - Small Icon (transparent background)
			* mediumicon        - Medium Icon
			* dropdown-white    - Dropdown White Background
			* dropdown-trans    - Dropdown Transparent Background
			****************************************/
			return "http://mystatus.skype.com/smallicon/".$username;
		}
		//if you need image
		else if($image)
		{
			return "http://mystatus.skype.com/".$username;
		}
		//or just text
		else
		{
		/***************************************
			Possible status  values:
			 NUM        TEXT                DESCRIPTION
			* 0     UNKNOWN             Not opted in or no data available.
			* 1     OFFLINE                 The user is Offline
			* 2     ONLINE                  The user is Online
			* 3     AWAY                    The user is Away
			* 4     NOT AVAILABLE       The user is Not Available
			* 5     DO NOT DISTURB  The user is Do Not Disturb (DND)
			* 6     INVISIBLE               The user is Invisible or appears Offline
			* 7     SKYPE ME                The user is in Skype Me mode
			****************************************/
			$url = "http://mystatus.skype.com/".$username.".xml";
			//getting contents
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$data = curl_exec($curl);
			curl_close($curl);

			$pattern = '/xml:lang="en">(.*)</';
			preg_match($pattern,$data, $match);

			return $match[1];
		}
	}
?>

<div class="main zerogrid">
<!-- content -->
	<article id="content">
		<div class="wrapper row">
			<section class="col-3-4">
			<div class="wrap-col">
				<h2 class="under">Contact form</h2>
				<form id="ContactForm" method="post">
				<div>
					<div  class="wrapper">
						<span>Your Name:</span>
						<input type="text" class="input" >
					</div>
					<div  class="wrapper">
						<span>Your City:</span>
						<input type="text" class="input" >
					</div>
					<div  class="wrapper">
						<span>Your E-mail:</span>
						<input type="text" class="input" >
					</div>
					<div  class="textarea_box">
						<span>Your Message:</span>
						<textarea name="textarea" cols="1" rows="1"></textarea>
					</div>
					<a href="#" onClick="document.getElementById('ContactForm').submit()">Send</a>
					<a href="#" onClick="document.getElementById('ContactForm').reset()">Clear</a>
				</div>
				</form>
			</div>
			</section>

			<section class="col-1-4">
				<div class="wrap-col">
					<div class="wrap-col">
						<h2 class="under">Skype</h2>
							<?php
								//getting skype status image
								$username = "justian.edesius";
								$image = get_skype_status($username, true);
								echo "<p>Skype ID: ".$username." </p>";
								echo "<p><img src='".$image."'/></p>";

							?>
					</div>
				</div>
			</section>
		</div>

		<div class="wrapper row">
			<section class="col-full">
				<div class="wrap-col">
					<h2 class="under">Our Location</h2>
					<!--<div id="googleMap" style="width:100%;height:380px;"></div>-->
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.2184039860103!2d106.658712!3d-6.234916!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbc482f2655b%3A0xf59f08152dcbe5b1!2sRuko+Alam+Sutera!5e0!3m2!1sen!2s!4v1417427115482" width="100%" height="450" frameborder="0" style="border:0"></iframe>
				</div>
			</section>
		</div>

		<div class="wrapper row">
			<h2 class="under">Address</h2>
			<section class="col-1-2">
				<div class="wrap-col">
					<h6>L.B. RESOURCES LTD.</h6>
					<div>
						<div  class="wrapper">
							<br/>
							<span><b>Registered & Mailing Address :</b></span><br/>
							Suite 1104, 11/F, Crawford House,
							70 Queen's Road Central,<br/>
							HONG KONG<br/><br/>
						</div>
						<div id="address" class="wrapper">
							<span>
								Tel:<br/>
									<br/>
								Fax:<br/>
								Skype:<br/>
								Website:<br/>
							</span>
								(825) 9495 2786<br/>
								(825) 9495 2786<br/>
								(825) 3480 7007<br/>
								lbresources<br/>
								<a href="http://lbresources.com" target="blank">www.lbresources.com</a><br/>
						</div>
					</div>
				</div>
			</section>

			<section class="col-1-2" >
				<div class="wrap-col">
					<h6>PT. LARAS BUMI RESOURCES</h6>
					<div>
						<div  class="wrapper">
							<br/>
							<span><b>Marketing Office: </b></span><br/>
							Ruko Prominence,
							Jalur Sutera 38F/1,
							Alam Sutera, Tangerang,<br/>
							Banten - Indonesia<br/><br/>

						</div>
						<div id="address" class="wrapper">
							<span>
								Tel:<br/>
								Fax:<br/>
								Website:<br/>
							</span>
								(62) 21 3003 2291 <br/>
								(62) 21 3003 2293<br/>
								<a href="http://lbresources.co.id" target="blank">www.lbresources.co.id</a><br/>
						</div>
					</div>
				</div>
			</section>
		</div>
	</article>
</div>