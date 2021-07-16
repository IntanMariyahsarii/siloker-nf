<div class="main-banner wow fadeIn">
    <div id="services" class="our-services section" style="padding-top: 15px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>Detail <em>Loker</em></h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <?php foreach($loker as $loker) { ?>
                            <p>Lowongan <?= $loker->nama ?></p>
                            <p><?= $loker->deskripsi_pekerjaan ?></p>
                            <span>Berminat silahkan email kami di: <?= $loker->email ?></span><br>
                            <span><?= $loker->tanggal_akhir ?></span>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>