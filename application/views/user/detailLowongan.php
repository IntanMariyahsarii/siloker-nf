<div class="main-banner wow fadeIn">
	<div id="services" class="our-services section" style="padding-top: 15px;">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-6">
					<div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2 id="judul-loker">Detail <em class="loker1">Lowongan Kerja</em></h2>
					</div>
				</div>
				
				<div id="text-dtlLoker">
					<div class="dtlLoker">
						<?php foreach ($loker as $loker) { ?>
							<p style="font-size: 22px;">Lowongan <?= $loker->nama ?></p>
							<p><?= $loker->deskripsi_pekerjaan ?></p>
							<span style="color: black;">Berminat silahkan email kami di: <?= $loker->email ?></span><br>
							<span><?= $loker->tanggal_akhir ?></span>
						<?php } ?>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
						<img class="detail-loker" src="<?= base_url("public/assets/images/icon-detail1.svg") ?>" alt="">
						<!-- <img src="<?= base_url("upload/") . $loker->logo ?>" alt=""> -->
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
