<?php

$title = 'Contact';

include 'required/header.php';
?>

  		<!-- Intro Section -->
 <section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
      	<div class="title_row">
      		<h1 data-title="Contact"><span>Contactez-nous</span></h1>
      		
      	</div>
        
      </div>
    </div>
  </section>
 <!-- Intro Section End-->
  
			<!-- CONTENT -->
		
			<!-- Contact Section -->
			<section class="padding pt-xs-40">
				<div class="container">

					<div class="row">

						<div class="col-md-8 col-lg-8">

							<div class="headeing pb-30">
								<h2>Envoyez nous vos péocupations</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<!-- Contact FORM -->
							<form class="contact-form " id="contact">
								<!-- IF MAIL SENT SUCCESSFULLY -->
								<div id="success">
									<div role="alert" class="alert alert-success">
										<strong>Merci</strong> votre message à bien été envoyé.
									</div>
								</div>
								<!-- END IF MAIL SENT SUCCESSFULLY -->
								<div class="row">
									<div class="col-md-6 col-lg-6">
										<div class="form-field">
											<input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Nom">
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" >
										</div>
										<div class="form-field">
											<input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Objet">
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-field">
											<textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Votre message" ></textarea>
										</div>
									</div>
									<div class="col-md-12 col-lg-12 mt-30">
										<button class="btn-text" type="button" id="submit" name="button">
											Envoyer
										</button>
									</div>
								</div>
							</form>
							<!-- END Contact FORM -->
						</div>

						<div class="col-md-4 col-lg-4 contact mt-xs-30">
							<div class="headeing pb-20">
								<h2>Info</h2>
								<span class="b-line l-left line-h"></span>
							</div>
							<div class="contact-info">

								<ul class="info">
									<li>
										<div class="icon ion-ios-location"></div>
										<div class="content">
											<p>
												COTE D'IVOIRE
											</p>
											<p>
												Abijan, Yopougon complex immeuble ORABANK
											</p>
										</div>
									</li>

									<li>
										<div class="icon ion-android-call"></div>
										<div class="content">
											<p>
												+225 21 23 40 77 90
											</p>
											<p>
												+225 07 88 77 07 06
											</p>
										</div>
									</li>
									<li>
										<div class="icon ion-ios-email"></div>
										<div class="content">
											<p>
												icfsarl@gmail.com
											</p>
											<p>
												contact@icf.com
											</p>
										</div>
									</li>
								</ul>
								<ul class="event-social">
									<li>
										<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									</li>
							</div>
						</div>

					</div>
				</div>
				<!-- Map Section -->

			</section>
			<!-- Map -->
			<section class="map-box">
				<div class="map">
					<div id="map"></div>
				</div>
			</section>
			<!-- Contact Section -->
			<!--End Contact-->
			
		<!-- Footer -->

		<?php include 'required/footer.php'; ?>
		
		<!-- End_Footer -->

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="assets/js/tether.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
							<!-- masonry,isotope Effect Js -->
		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
		<script type="text/javascript" src="../../../../maps.google.com/maps/api/jse8d0?sensor=false&amp;.js"></script> 
<!-- Mail Function Js --> 
<script src="assets/js/validation.js" type="text/javascript"></script> 
		
		<!-- Compiled and minified JavaScript -->
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
		<script src="assets/js/custom.js" type="text/javascript"></script>

	</body>

<!-- contact117:44 GMT -->
</html>