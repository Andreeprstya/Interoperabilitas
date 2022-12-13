<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/extensions/sweetalert2/sweetalert2.min.css">
</head>

<body>
    <div id="auth">
        

    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "NIK Salah";
        } elseif ($_GET['pesan'] == "login") {
            echo "Anda telah berhasil login";
            header("location:data_diri_pasien.php");
            exit();
        } elseif ($_GET['pesan'] == "belum login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>

<section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Sweet Alert</h4>
                        <p class="text-muted">SweetAlert automatically centers itself on the page and looks great no
                            matter if you're using a desktop computer, mobile or tablet. It's even highly customizable,
                            as you can see below!</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <button id="basic" class="btn btn-outline-primary btn-lg btn-block">Basic
                                    Example</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="title" class="btn btn-outline-primary btn-lg btn-block">A title with a text
                                    under</button>
                            </div>
                            <div class="col-md-4 col-12">
                                <button id="footer" class="btn btn-outline-primary btn-lg btn-block">With
                                    Footer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
        <div class="auth-logo">
        <h1 class="auth-title"><font size="7">Rumah Sakit-sakitan</font></h1>
            </div>
            <h1 class="auth-title"><font size="6">Pasien</font></h1>
            <p class="auth-subtitle mb-5"><font size="5">Silahkan input NIK sesuai dengan KTP</font></p>

            
               <form method="post" action="cek_login.php">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="NIK" name="nik">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
               
                
                <button class="btn btn-primary btn-block btn-lg shadow-lg ">CEK</button>
            </form>
            
            
            <div class="mt-4 text-lg fs-4">
                <font size="4"><p class="text-gray-600">Apakah anda dokter? <a href="form_login_dokter.php" class="font-bold">Ya</a></p>
                </font>
            </div> 
            
            
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
            
        </div>
    </div>
</div>

    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>>
<script src="assets/js/pages/sweetalert2.js"></script>>
</body>

</html>
