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

	<?= $this->load->view('Components/Bg_Content',array('title' => 'News'),TRUE);?>

	<div class="section section-properties">
		<div class="container">
			<div class="row">
				<?php foreach ($news as $key => $val) : ?>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
						<div class="property-item mb-30">
							<a href="property-single.html" class="img">
								<img src="<?= $val['news_image']; ?>" alt="Image" class="img-fluid" />
							</a>
							<div class="property-content">
								<div>
									<span class="d-block mb-2 text-black-50"><?= date('d-M-Y', strtotime($val['created_at'])) ?></span>
									<span class="city d-block mb-3"><?= $val['news_title']; ?></span>
									<div class="specs d-flex mb-4">
										<span class="d-block d-flex align-items-center me-3">
											<span class="icon-user me-2"></span>
											<span class="caption">Writer by <?= $val['news_writer']; ?></span>
										</span>
									</div>
									<a href="<?= base_url('news/detail/' . $val['id']); ?>" class="btn btn-primary py-2 px-3">See details</a>
								</div>
							</div>
						</div>
						<!-- .item -->
					</div>
				<?php endforeach; ?>
			</div>
			<div class="row align-items-center py-5">
				<!-- <div class="col-lg-3">Pagination (<?= $this->uri->segment(2) ?? 1; ?> of <?= $total_data; ?>)</div> -->
				<div class="col-lg-3"></div>
				<div class="col-lg-6 text-center">
					<!-- <?php echo $this->pagination->create_links();; ?> -->
					<div class="custom-pagination">
						<?php 
						for($i = 1;$i <= $total_data; $i++): ?>
						<a href="<?php echo base_url('news?per_page='.$i);?>"><?= $i;?></a>
						<?php endfor;?>
					</div>
				</div>
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
