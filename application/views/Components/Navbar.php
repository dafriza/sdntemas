<nav class="site-nav">
	<div class="container">
		<div class="menu-bg-wrap">
			<div class="site-navigation">
				<a class="navbar-brand noscroll" href="/">
					<!-- <a href="index.html" class="logo m-0 float-start">ESTESA</a> -->
					<a href="<?= base_url('/'); ?>" class="logo m-0 float-start">
						<img class="img-responsive align-middle" src="<?= base_url('assets/favicon.png'); ?>" alt="SDN Temas 1" style="max-width:100%;width:20%">
						<span>SDN TEMAS 1</span>
					</a>
				</a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end" style="margin-top:1.9%">
					<li><a href="<?= base_url('/'); ?>">Home</a></li>
					<li class="has-children">
						<a href="#">Menu</a>
						<ul class="dropdown">
							<li><a href="<?= base_url('news?per_page=1'); ?>">News</a></li>
							<li><a href="<?= base_url('extra'); ?>">Ekstrakurikuler</a></li>
							<li><a href="<?= base_url('achievement'); ?>">Prestasi</a></li>
						</ul>
					</li>
					<li><a href="<?= base_url('about'); ?>">About</a></li>
					<li><a href="<?= base_url('contact'); ?>">Contact Us</a></li>
				</ul>

				<a href="#" class="burger light me-auto float-end mt-5 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>
			</div>
		</div>
	</div>
</nav>
