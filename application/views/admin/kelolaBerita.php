<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<div class="main-banner wow fadeIn">
	<div id="services" class="our-services section" style="padding-top: 15px;">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-6 offset-lg-3">
					<div class="section-heading wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2>Kelola <em>Berita</em></h2>
					</div>
				</div>

				<div class="col-md-6">
					<a href="<?= base_url("dashboard/formKelolaBerita") ?>" class="btn btn-primary">Tambah Berita</a>
				</div><br><br><br>

				<div style="overflow-x:auto;">
					<table id="example" class="table" style="width:100%">
						<thead>
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Judul Berita</th>
								<th>Deskripsi</th>
								<th>Foto</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($berita as $berita) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $berita->tanggal ?></td>
									<td><?= $berita->judul ?></td>
									<td><?= character_limiter($berita->deskripsi, 20) ?></td>
									<td>
										<img src="<?= base_url("upload/") . $berita->foto ?>" class="img-fluid" alt="" style="width: 150px; height: 100px;">
									</td>
									<td>
										<a href="<?= base_url("dashboard/detailKelolaBerita/") . $berita->id_berita ?>" class="btn btn-primary px-3"><i class="fas fa-eye"></i></a>
										<a href="<?= base_url("dashboard/editKelolaBerita/") . $berita->id_berita ?>" class="btn btn-warning px-3"><i class="fas fa-pencil-alt"></i></a>
										<a href="<?= base_url("dashboard/deleteKelolaBerita/") . $berita->id_berita ?>" class="btn btn-danger px-3"><i class="fas fa-trash"></i></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
						<tfoot>
							<tr>
								<th>No</th>
								<th>Tanggal</th>
								<th>Foto</th>
								<th>Deskripsi</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>


				</div>
			</div>
		</div>
	</div>
