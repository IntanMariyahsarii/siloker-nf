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
					<h3>Form Tambah Berita</h3>
					<form class="mb-5" action="<?= base_url("Dashboard/createKelolaBerita") ?>" enctype="multipart/form-data" method="post" id="contactForm" name="contactForm">

					<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Judul Berita</label>
								<textarea class="form-control" name="judul" id="message" cols="30" rows="4" placeholder="Judul Berita" required></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="" class="col-form-label">Foto</label>
								<input type="file" class="form-control" name="foto" placeholder="Foto" required>
							</div>
						</div>

                        <div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Deskripsi</label>
								<textarea class="form-control" name="deskripsi" id="message" cols="30" rows="4" placeholder="Deskripsi" required></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 form-group mb-3">
								<label for="message" class="col-form-label">Tanggal</label>&emsp;&emsp;
								<input type="date" class="form-control" name="tanggal" required>
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
