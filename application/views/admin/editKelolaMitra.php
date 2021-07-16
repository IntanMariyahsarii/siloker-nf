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
                    <h3>Form Edit Mitra</h3>
                    <form class="mb-5" action="<?= base_url("Dashboard/updateKelolaMitra") ?>" enctype="multipart/form-data" method="post" id="contactForm" name="contactForm">

                        <?php foreach ($mitra as $mitra) { ?>

                            <input type="text" name="mitraId" value="<?= $mitra->id ?>" hidden>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Nama Perusahaan/Organisasi</label>
                                    <input type="text" class="form-control" name="nama" value="<?= $mitra->nama ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Logo</label><br>
                                    <img src="<?= base_url("upload/") . $mitra->logo ?>" class="img-fluid" alt="" style="width: 200px; height: 150px;"><br><br>
                                    <input type="file" class="form-control" name="logo" placeholder="Logo">
                                    <input type="text" name="logoLama" value="<?= $mitra->logo ?>" hidden>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="budget" class="col-form-label">Bidang Usaha</label>
                                    <select class="form-control" name="bidangUsaha">
                                        <option value="">Pilih</option>
                                        <?php foreach ($bidangUsaha as $bidangUsaha) { ?>
                                            <option value="<?= $bidangUsaha->id ?>" <?= $mitra->bidang_usaha_id == $bidangUsaha->id ? "selected" : "" ?>><?= $bidangUsaha->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="budget" class="col-form-label">Sektor Usaha</label>
                                    <select class="form-control" name="sektorUsaha">
                                        <option value="">Pilih</option>
                                        <?php foreach ($sektorUsaha as $sektorUsaha) { ?>
                                            <option value="<?= $sektorUsaha->id ?>" <?= $mitra->sektor_usaha_id == $sektorUsaha->id ? "selected" : "" ?>><?= $sektorUsaha->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="message" class="col-form-label">Alamat Kantor</label>
                                    <textarea class="form-control" name="alamatKantor" cols="30" rows="4" placeholder="Alamat Kantor"><?= $mitra->alamat ?></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="message" class="col-form-label">Kontak Person</label>
                                    <input type="text" class="form-control" name="kontak" value="<?= $mitra->kontak ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="message" class="col-form-label">No HP/Telepon</label>
                                    <input type="text" class="form-control" name="telpon" value="<?= $mitra->telpon ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="message" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" name="email" value="<?= $mitra->email ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-3">
                                    <label for="message" class="col-form-label">Alamat Web</label>
                                    <input type="text" class="form-control" name="alamatWeb" value="<?= $mitra->web ?>">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        <?php  } ?>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>