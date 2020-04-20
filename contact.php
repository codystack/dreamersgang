<?php require("./components/header1.php");?>

		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="current_page">Contact us</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="contact_map_background">

			<!-- Contact Map -->
			<div class="contact_map">

				<!-- Google Map -->
				<div class="map">
					<div id="google_map" class="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact_form_container">
						<div class="contact_form_title">Get in touch</div>
						<form action="#" class="contact_form" id="contact_form">
							<input type="text" class="contact_input" placeholder="Name" required="required">
							<input type="email" class="contact_input" placeholder="E-mail" required="required">
							<input type="text" class="contact_input" placeholder="Subject" required="required">
							<textarea name="contact_textarea" id="contact_textarea" class="contact_textarea contact_input" placeholder="Message" required="required"></textarea>
							<button class="button contact_button"><span>Send Message</span></button>
						</form>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="contact_info_container">
						<div>
							<a href="#">
								<div class="logo_container d-flex flex-row align-items-start justify-content-start">
									<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
									<div class="logo_content">
										<div id="logo_text" class="logo_text logo_text_not_ie">Dreamers Gang</div>
										<!--<div class="logo_sub">August 25, 2018 - Miami Marina Bay</div>-->
									</div>
								</div>
							</a>	
						</div>
						<div class="contact_info_list_container">
							<ul class="contact_info_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div class="contact_info_icon text-center"><img src="images/contact_1.png" alt=""></div></div>
									<div class="contact_info_text">Nigeria</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div class="contact_info_icon text-center"><img src="images/contact_2.png" alt=""></div></div>
									<div class="contact_info_text">08136403606</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div class="contact_info_icon text-center"><img src="images/contact_3.png" alt=""></div></div>
									<div class="contact_info_text">info@dreamersgang.com</div>
								</li>
							</ul>
						</div>
						<div class="contact_info_pin"><div></div></div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php require_once("./components/footer.php");?>