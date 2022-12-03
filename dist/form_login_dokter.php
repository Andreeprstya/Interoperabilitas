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
</head>

<body>
    <div id="auth">
        
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Username atau Password Salah";
        } elseif ($_GET['pesan'] == "login") {
            echo "Anda telah berhasil login";
            header("location:dokter_index.php");
            exit();
        } elseif ($_GET['pesan'] == "belum login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>

<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            
            <h1 class="auth-title">Rumah Sakit-sakitan</h1>
            <p class="auth-subtitle mb-5">Silahkan input Username dn Password</p>

            
               <form method="post" action="cek_login_dokter.php">
               <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username" name='username'>
                    
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password" name='username'>
                    
                </div>
               
                
                <button class="btn btn-primary btn-block btn-lg shadow-lg ">Log in</button>
            </form>
            
            
            <div class="mt-4 text-lg fs-4">
                <p class="text-gray-600">Apakah anda pasien? <a href="form_login.php" class="font-bold">Ya</a></p>
                
            </div> 
            
            
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">
            
        </div>
    </div>
</div>

    </div>
</body>

</html>
