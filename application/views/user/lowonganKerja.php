<div class="main-banner wow fadeIn">
	<div id="services" class="our-services section" style="padding-top: 20px;">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-6 offset-lg-3">
					<div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2>Lowongan <em>Kerja</em></h2>
					</div>
				</div>

				<?php $i = 0 ?>
				<?php foreach ($lowongan as $lowongan) { ?>
					<?php $i++ ?>

					<div class="col-lg-4">
						<div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
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
</div>
