<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">

    <div class="container">

        <?php if ($this->session->flashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Berhasil! </strong><?php echo $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>

        <div class="row align-items-stretch no-gutters contact-wrap">

            <div class="col-md-12">

                <div class="form h-100">
                    <h3>Form Edit Berita</h3>
                    <form class="mb-5" action="<?= base_url("Dashboard/updateKelolaBerita") ?>" enctype="multipart/form-data" method="post" id="contactForm" name="contactForm">

                        <?php foreach ($berita as $berita) { ?>

                            <input type="text" name="beritaId" value="<?= $berita->id_berita ?>" hidden>

                            <div class="row">
							<div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="message" class="col-form-label">Judul Berita</label>
                                    <input type="text" class="form-control" name="judul" autocomplete="off" value="<?= $berita->judul ?>">
                                </div>
                            </div>

                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Foto</label><br>
                                    <img src="<?= base_url("upload/") . $berita->foto ?>" class="img-fluid" alt="" style="width: 300px; height: 200px;"><br><br>
                                    <input type="file" class="form-control" name="foto" placeholder="Foto">
                                    <input type="text" class="form-control" name="fotoLama" value="<?= $berita->foto ?>" hidden>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="message" class="col-form-label">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi" id="message" placeholder="Deskripsi"><?= $berita->deskripsi ?></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="message" class="col-form-label">Tanggal</label>&emsp;&emsp;
                                    <input type="date" class="form-control" name="tanggal" value="<?= $berita->tanggal ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                                    <span class="submitting"></span>
                                </div>
                            </div>

                        <?php } ?>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
