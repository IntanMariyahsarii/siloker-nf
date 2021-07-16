<div class="main-banner wow fadeIn">
    <div id="services" class="our-services section" style="padding-top: 15px;">
        <div class="container-fluid">
            <div class="row">

			<div class="col-lg-6">
					<div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2 style="margin-left: -117px;font-family: 'Poppins';">Detail <em style="font-family: 'Poppins';">Lowongan Kerja</em></h2>
					</div>
				</div>
				<div style="width: 500px;margin-top: 143px;margin-left: -549px;">
					<!-- <div class="card scroll" style="box-shadow: -1px 2px 12px #d6cfcf; overflow-x: auto; margin-top: -70px;">
						<div class="card-body">
							<div class="content-card"> -->
					<div>
						<?php foreach ($loker as $loker) { ?>
							<p style="font-size: 22px;">Lowongan <?= $loker->nama ?></p>
							<p><?= $loker->deskripsi_pekerjaan ?></p>
							<span style="color: black;">Berminat silahkan email kami di: <?= $loker->email ?></span><br>
							<span><?= $loker->tanggal_akhir ?></span>
						<?php } ?>
					</div>
				<!-- </div>
			</div>
		</div> -->
	</div>

	<div class="col-lg-6">
		<div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
			<img src="<?= base_url("public/assets/images/icon-detail1.svg") ?>" alt="" id="icon-dpn">
			<!-- <img src="<?= base_url("upload/") . $loker->logo ?>" alt=""> -->
		</div>
	</div>

            </div>
        </div>
    </div>
</div>
