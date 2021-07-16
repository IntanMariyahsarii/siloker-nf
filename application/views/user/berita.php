<div class="main-banner wow fadeIn">
    <div id="services" class="our-services section" style="padding-top: 15px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>List <em>Berita</em></h2>
                    </div>
                </div>


                <?php foreach ($berita as $berita) { ?>
                    <div class="col-lg-12">
                        <div class="service-item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="<?= base_url("upload/") . $berita->foto ?>" style="width: 200px;">
                                </div>
                                <div class="col-lg-8">
                                    <div class="right-content">
                                        <p><?= $berita->deskripsi ?></p><br>
                                        <p>Tanggal : <?= $berita->tanggal ?></p>
										<a href="<?= base_url("dashboard/detailBerita/") . $berita->id_berita ?>">Lihat Detail</a>
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
