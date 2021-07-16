<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('public/assets/login/fonts/icomoon/style.css') ?>">

    <link rel="stylesheet" href="<?= base_url('public/assets/login/css/owl.carousel.min.css') ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('public/assets/login/css/bootstrap.min.css') ?>">

    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('public/assets/login/css/style.css') ?>">

    <title>Login SILOKER-NF</title>
</head>

<body>

    <div class="content">
        <div class="container">

            <?php if ($this->session->flashdata('gagal')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Gagal! </strong><?php echo $this->session->flashdata('gagal'); ?>
                </div><br><br>
            <?php endif; ?>
			<div class="card scroll" style="box-shadow: 1px 2px 10px #e4e4e4;overflow-x: auto;margin-top: -70px;">
						<div class="card-body">
							<div class="content-card"><br>
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="<?= base_url('public/assets/login/images/icon-login.svg') ?>" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center" style="margin-top: 126px;">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Login <strong>SILOKER-NF</strong></h3>
                            </div>
                            <form action="<?= base_url('dashboard/postLogin') ?>" method="post">
                                <div class="form-group first">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" autocomplete="off">

                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">
                            </form>
                        </div>
                    </div>
				</div>
			</div>
							</div>
                </div>

            </div>
        </div>
    </div>


    <script src="<?= base_url('public/assets/login/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/login/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/login/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('public/assets/login/js/main.js') ?>"></script>
</body>

</html>
