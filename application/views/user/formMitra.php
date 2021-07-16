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
					<h3>Form Daftar Mitra</h3>
					<form class="mb-5" action="<?= base_url("Dashboard/createMitra") ?>" enctype="multipart/form-data" method="post" id="contactForm" name="contactForm">
						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="" class="col-form-label">Nama Perusahaan/Organisasi</label>
								<input type="text" class="form-control" name="nama" placeholder="Nama Perusahaan/Organisasi">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="" class="col-form-label">Logo</label>
								<input type="file" class="form-control" name="logo" placeholder="Logo">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="budget" class="col-form-label">Bidang Usaha</label>
								<select class="form-control" name="bidangUsaha">
									<option value="">Pilih</option>
									<?php foreach ($bidangUsaha as $bidangUsaha) { ?>
										<option value="<?= $bidangUsaha->id ?>"><?= $bidangUsaha->nama ?></option>
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
										<option value="<?= $sektorUsaha->id ?>"><?= $sektorUsaha->nama ?></option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Alamat Kantor</label>
								<textarea class="form-control" name="alamatKantor" cols="30" rows="10" style="height: 174px;" placeholder="Alamat Kantor"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Kontak Person</label>
								<input type="text" class="form-control" name="kontak" placeholder="Kontak Person">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">No HP/Telepon</label>
								<input type="text" class="form-control" name="telpon" placeholder="No HP/Telepon">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Email</label>
								<input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Alamat Web</label>
								<input type="text" class="form-control" name="alamatWeb" placeholder="Alamat Web">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group">
								<input type="submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
								<span class="submitting"></span>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>

</div>
