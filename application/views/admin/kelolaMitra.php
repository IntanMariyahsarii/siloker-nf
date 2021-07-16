<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<div class="main-banner wow fadeIn">
    <div id="services" class="our-services section" style="padding-top: 15px;">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2>Kelola <em>Mitra</em></h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kontak Person</th>
                                    <th>Email</th>
                                    <th>Telpon</th>
                                    <th>Alamat Web</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($mitra as $mitra) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $mitra->nama ?></td>
                                        <td><?= $mitra->kontak ?></td>
                                        <td><?= $mitra->email ?></td>
                                        <td><?= $mitra->telpon ?></td>
                                        <td><?= $mitra->web?></td>
                                        <td>
                                            <a href="<?= base_url("dashboard/detailKelolaMitra/") . $mitra->id ?>" class="btn btn-primary px-3"><i class="fas fa-eye"></i></a>
                                            <a href="<?= base_url("dashboard/editKelolaMitra/") . $mitra->id ?>" class="btn btn-warning px-3"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="<?= base_url("dashboard/deleteKelolaMitra/") . $mitra->id ?>" class="btn btn-danger px-3"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kontak Person</th>
                                    <th>Email</th>
                                    <th>Telpon</th>
                                    <th>Alamat Web</th>
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