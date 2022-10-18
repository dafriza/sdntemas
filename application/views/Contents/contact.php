<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->load->view('Components/Link', '', TRUE); ?>

	<title>
		<?= $title; ?>
	</title>
</head>

<body>
	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<?= $this->load->view('Components/Navbar', '', TRUE); ?>

	<?= $this->load->view('Components/Bg_Content', array('title' => 'Contact Us'), TRUE); ?>

	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
					<div class="contact-info">
						<div class="address mt-2">
							<i class="icon-room"></i>
							<h4 class="mb-2">Location:</h4>
							<p>
							Jl. Patimura No.23, Temas, Kec. Batu, Kota Batu, Jawa Timur 65315
							</p>
						</div>

						<div class="open-hours mt-4">
							<i class="icon-clock-o"></i>
							<h4 class="mb-2">Open Hours:</h4>
							<p>
								Sunday-Friday:<br />
								11:00 AM - 2300 PM
							</p>
						</div>

						<div class="email mt-4">
							<i class="icon-envelope"></i>
							<h4 class="mb-2">Email:</h4>
							<p>sdntemas1@gmail.com</p>
						</div>

						<div class="phone mt-4">
							<i class="icon-phone"></i>
							<h4 class="mb-2">Call:</h4>
							<p>+1 1234 55488 55</p>
						</div>
					</div>
				</div>
				<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
					<?= form_open(base_url('sendMail')) ;?>
						<div class="row">
							<div class="col-6 mb-3">
								<input type="text" class="form-control" placeholder="Your Name" name="name"/>
							</div>
							<div class="col-6 mb-3">
								<input type="email" class="form-control" placeholder="email@gmail.com" name="email" />
							</div>
							<div class="col-12 mb-3">
								<input type="text" class="form-control" placeholder="Subject" name="subject"/>
							</div>
							<div class="col-12 mb-3">
								<textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
							</div>
							<div class="col-12">
								<input type="submit" value="Send Message" class="btn btn-primary" />
							</div>
						</div>
					</form>
					</div>
			</div>
		</div>
	</div>
	<!-- /.untree_co-section -->

	<?= $this->load->view('Components/Footer', '', TRUE); ?>
	<!-- /.site-footer -->

	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/tiny-slider.js'); ?>"></script>
	<script src="<?= base_url('assets/js/aos.js'); ?>"></script>
	<script src="<?= base_url('assets/js/navbar.js'); ?>"></script>
	<script src="<?= base_url('assets/js/counter.js'); ?>"></script>
	<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
</body>

</html>
