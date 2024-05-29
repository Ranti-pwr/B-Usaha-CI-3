<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href='<?= base_url(); ?>/assets/img/icon/favicon.ico' rel='shortcut icon'>
    <title>REGISTRASI Buku Usaha</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-8 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">REGISTRASI BUKU USAHA</h1>
                            </div>
                            <form class="user" method="POST" action="<?= base_url() ?>auth/registrasi">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" placeholder="Username" name="username" autocomplete="off" value="<?= set_value('username');  ?>">
                                    <?= form_error('username', '<small class="form-text text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="namaUsaha" placeholder="Nama Usaha" name="namaUsaha" autocomplete="off" value="<?= set_value('namaUsaha');  ?>">
                                    <?= form_error('namaUsaha', '<small class="form-text text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1" autocomplete="off">
                                        <?= form_error('password1', '<small class="form-text text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="password2" placeholder="Konfirmasi Password" name="password2" autocomplete="off">
                                    </div>
                                </div>
                                <button class="btn btn-info btn-user btn-block" type="submit">
                                    SUBMIT
                                </button>
                            </form>
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> -->
                            <div class="text-center">
                                <p class="small">Sudah Punya Akun? Silahkan <a href="<?= base_url('auth') ?>" class="text-decoration-none text-info"><b> Login</b></a></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
