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

	<?= $this->load->view('Components/Bg_Content', array('title' => 'Achievement'), TRUE); ?>

	<div class="section section-properties">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="text-center fw-bold" style="color:#595959;"><?= $detail[0]['achievement_name']; ?> <span class="<?= $detail[0]['achievement_icon'] ?>"></h2>
							<img src="<?= $detail[0]['achievement_image']; ?>" class="img-fluid mx-auto d-block" alt="<?= $detail[0]['achievement_name'];?>">
							<div class="row justify-content-between mt-4">
								<div class="col text-start">
									<?= $detail[0]['achievement_name'] ?> <span class="<?= $detail[0]['achievement_icon'] ?>" style="font-size:1rem"></span>
								</div>
								<div class="col text-end">
									<p>Dibaca normal 2 menit</p>
								</div>
							</div>
							<div class="row">
								<div class="col-12" style="color:black;">
									<?= $detail[0]['achievement_contents']; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="container">
			<div class="row d-flex justify-content-center">
				<?php foreach ($achieve as $key => $val) : ?>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 mb-4">
						<div class="card col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
							<img src="<?= $val['achieve_img']; ?>" alt="<?= $val['achieve_name'];?>">
							<div class="card-body">
								<?= $val['achieve_name']; ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

	<?= $this->load->view('Components/Footer', '', TRUE); ?>
	<!-- /.site-footer -->

	<!-- Preloader -->
	<div id=" overlayer">
	</div>
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
