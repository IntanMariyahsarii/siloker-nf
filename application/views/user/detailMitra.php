<div class="main-banner wow fadeIn">
    <div id="services" class="our-services section" style="padding-top: 15px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2 style="font-family: 'Poppins';">Detail <em style="font-family: 'Poppins';">Mitra</em></h2>
                    </div>
                </div>


                <?php foreach ($mitra as $mitra) { ?>
                    <div class="col-lg-12">
                        <div class="service-item wow bounceInUp" id="detail-mitra"  data-wow-duration="1s" data-wow-delay="0.3s" >
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url("upload/") . $mitra->logo ?>" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <div class="right-content" style="padding: 69px;">
                                        <h4 class="h4-detail" id="detail-mitra"><?= character_limiter($mitra->nama, 13) ?></h4>
                                        <p class="p-detail" id="detail-mitra"><?= $mitra->kontak ?> <br> <?= $mitra->telpon ?> <br> <?= $mitra->email ?> </p>
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

<style>
	#mitra-detail{
		padding-top: 0px;
	}
</style>
