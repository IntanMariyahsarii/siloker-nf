<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
	<div class="preloader-inner">
		<span class="dot"></span>
		<div class="dots">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
</div>
<!-- ***** Preloader End ***** -->



<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="row" style="margin-top: -66px;">
					<div class="col-lg-6 align-self-center">
						<div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
							<div class="row">
								<div class="col-lg-6">
									<div class="info-stat">
										<h3 style="font-size: 21px; font-weight:200; font-family: 'Poppins', sans-serif; ">Sistem Lowongan Kerja</h3>
									</div>
								</div>

								<div class="col-lg-12">
									<h2 id="font-dpn">STT Nurul Fikri</h2>
								</div>
								<div class="col-lg-12">
									<div class="main-green-button scroll-to-section">
										<a href="<?= base_url("dashboard/about") ?>">Tentang SILOKER</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
							<img src="<?= base_url("public/assets/images/icon-home.svg") ?>" alt="" id="icon-dpn">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="services" class="our-services section" style="margin-top: -146px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
					<h2 style="font-family: 'Poppins';">Lowongan <em style="font-family: 'Poppins';">Kerja</em></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">

			<?php $i = 0 ?>
			<?php foreach ($lowongan as $lowongan) { ?>
				<?php $i++ ?>

				<div class="col-lg-4">
					<div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s" style="box-shadow:'0px 1px 2px #dcdcdc';">
						<div class="row">
							<div class="col-lg-4">
								<div class="icon">
									<img src="<?= base_url("upload/") . $lowongan->logo ?>" alt="">
								</div>
							</div>
							<div class="col-lg-8">
								<div class="right-content">
									<h4><?= character_limiter($lowongan->nama, 13) ?></h4>
									<p><?= character_limiter($lowongan->deskripsi_pekerjaan, 20) ?></p>
									<p><?= $lowongan->tanggal_akhir ?>, <a href="<?= base_url("dashboard/detailLowongan/") . $lowongan->id_lowongan ?>">Lihat Detail</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php if ($i == 3) {
					break;
				} ?>

			<?php } ?>

		</div>
	</div>
</div>


<div id="portfolio" class="our-portfolio section">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
					<h2 style="font-family: 'Poppins';">Daftar <em>Mitra</em></h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
		<div class="row">
			<div class="col-lg-12">
				<div class="loop owl-carousel">

					<?php foreach ($mitra as $mitra) { ?>
						<div class="item">
							<div class="portfolio-item">

								<div class="thumb">
									<img src="<?= base_url("upload/") . $mitra->logo ?>" alt="" style="width: 200px;">
									<div class="hover-content">
										<div class="inner-content">
											<a href="#">
												<h4><?= $mitra->nama ?></h4>
											</a>
										</div>
									</div>
								</div>

							</div>
						</div>
					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</div>
<style>
	#icon-dpn {
		margin-top: 45px;
		width: 724px;
		margin-left: -61px;
	}

	#font-dpn {
		font-size: 50px;
		font-family: 'Poppins', sans-serif;
	}
</style>
