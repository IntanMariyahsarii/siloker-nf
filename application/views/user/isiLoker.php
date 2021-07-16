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
					<h3>Form Isi Loker</h3>
					<form class="mb-5" action="<?= base_url("Dashboard/createLoker") ?>" method="post">

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="" class="col-form-label">Nama Perusahaan/Organisasi</label>
								<select class="form-control" name="mitra">
									<option value="">Pilih</option>
									<?php foreach ($mitra as $mitra) { ?>
										<option value="<?= $mitra->id ?>"><?= $mitra->nama ?></option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Deskripsi Lowongan</label>
								<textarea class="form-control" name="deskripsi" id="message" cols="30" rows="4" placeholder="Deskripsi Lowongan"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Kategori Lowongan</label><br>
								<?php foreach ($keahlian as $keahlian) { ?>
									<input type="checkbox" name="kategori[]" value="<?= $keahlian->id ?>"> <label><?= $keahlian->nama ?></label>&emsp;&emsp;
								<?php } ?>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Tanggal Dateline</label>&emsp;&emsp;
								<input type="date" class="form-control" name="tanggal">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Email</label>
								<input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group">
								<input type="submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
								<span class="submitting"></span>
							</div>
						</div>
					</form>

					<div id="form-message-warning mt-4"></div>
					<div id="form-message-success">
						Your message was sent, thank you!
					</div>

				</div>
			</div>
		</div>
	</div>

</div>
