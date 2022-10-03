<?php 
$active = 4;
include 'header.php'; 
?>
			<div role="main" class="main">
				<div class="container">
					<div class="row pt-xl">
						<div class="col-md-7">
							<h1 class="mt-xl mb-none">Bize Ulaşın</h1>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>
							<p class="lead mb-xl mt-lg">Bize Ulaşmak için Aşağıda yer alan iletişim formunu eksiksiz doldurarak gönderebilirsiniz..</p>

							<div class="alert alert-success hidden mt-lg" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-danger hidden mt-lg" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
								<span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
							</div>

							<form id="contactForm" action="php/contact-form.php" method="POST">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control input-lg" name="name" id="name" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control input-lg" name="email" id="email" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control input-lg" name="subject" id="subject" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control input-lg" name="message" id="message" required></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
						<div class="col-md-4 col-md-offset-1">

							<h4 class="mt-xl mb-none">Ares & İletişim</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

							<ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
								<li><i class="fa fa-map-marker"></i> <strong>Address:</strong><?php echo $ayarcek['ayar_adres']; ?><br><?php echo $ayarcek['ayar_il']; ?></li>
								<li><i class="fa fa-phone"></i> <strong>Telefon:</strong><?php echo $ayarcek['ayar_tel']; ?></li>
								<li><i class="fa fa-envelope"></i> <strong>Mail Adresi:</strong> <a href="mailto:mail@example.com"><?php echo $ayarcek['ayar_mail']; ?></a></li>
							</ul>

							<h4 class="pt-xl mb-none">Çalışma Saatleri</h4>
							<div class="divider divider-primary divider-small mb-xl">
								<hr>
							</div>

								<p><?php echo $ayarcek['ayar_mesai']; ?></p>


						</div>
					</div>
				</div>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map google-map-footer">
					<iframe 
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.5246626880808!2d28.898101314892198!3d40.21963537938852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca119b862db27f%3A0x2af468c4f222ebb5!2sArena+Avm!5e0!3m2!1str!2str!4v1547819569843" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
<?php include 'footer.php'; ?>
