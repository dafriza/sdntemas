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

	<?= $this->load->view('Components/Bg_Content',array('title' => 'Extra'),TRUE);?>
	
	<div class="section section-properties">
		<div class="container">
			<div class="row">
				<?php foreach ($extra as $key => $val) : ?>
					<div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
						<div class="box-feature">
							<span class="<?= $val['extra_icon']; ?>" style="font-size:4rem; color:#00204a"></span>
							<h3 class="mb-3"><?= $val['extra_name']; ?></h3>
							<p>
								<?= $val['extra_caption']; ?>
							</p>
							<p><a href="<?= base_url('extra/detail/' . $val['id']); ?>" class="learn-more">Learn More</a></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

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
