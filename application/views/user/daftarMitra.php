<div class="main-banner wow fadeIn">
	<div id="services" class="our-services section" style="padding-top: 15px;">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-6 offset-lg-3">
					<div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2>Daftar <em>Mitra</em></h2>
					</div>
				</div>

				<div class="col-md-12 form-group">
					<form action="<?= base_url("dashboard/formMitra") ?>" method="get">
						<input type="submit" value="Form Daftar Mitra" class="btn btn-primary rounded-0 py-2 px-4">
						<span class="submitting"></span>
					</form>
				</div><br><br><br>

				<?php $i = 0 ?>
				<?php foreach ($mitra as $mitra) { ?>
					<?php $i++ ?>

					<div class="col-lg-4">
						<div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
							<div class="row">
								<div class="col-lg-4">
									<div class="icon">
										<img src="<?= base_url("upload/") . $mitra->logo ?>" alt="">
									</div>
								</div>
								<div class="col-lg-8">
									<div class="right-content">
										<h4><?= character_limiter($mitra->nama, 13) ?></h4>
										<p><?= $mitra->kontak ?> <br> <?= $mitra->telpon ?> <br> <?= $mitra->email ?> </p>
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
</div>