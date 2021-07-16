<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<div class="main-banner wow fadeIn">
    <div id="services" class="our-services section" style="padding-top: 15px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>Kelola <em>Loker</em></h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Kontak Person</th>
                                    <th>Email</th>
                                    <th>Deskripsi Lowongan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($loker as $loker) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $loker->tanggal_akhir ?></td>
                                        <td><?= $loker->kontak ?></td>
                                        <td><?= $loker->email ?></td>
                                        <td><?= character_limiter($loker->deskripsi_pekerjaan, 20) ?></td>
                                        <td>
                                            <a href="<?= base_url("dashboard/detailKelolaLoker/") . $loker->loker_id ?>" class="btn btn-primary px-3"><i class="fas fa-eye"></i></a>
                                            <a href="<?= base_url("dashboard/editKelolaLoker/") . $loker->loker_id ?>" class="btn btn-warning px-3"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="<?= base_url("dashboard/deleteKelolaLoker/") . $loker->loker_id ?>" class="btn btn-danger px-3"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Kontak Person</th>
                                    <th>Email</th>
                                    <th>Deskripsi Lowongan</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>