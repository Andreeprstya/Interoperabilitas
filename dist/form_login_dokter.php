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
        
<<<<<<< HEAD
<<<<<<< HEAD
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
=======
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "NIK Salah";
        } elseif ($_GET['pesan'] == "login") {
            echo "Anda telah berhasil login";
            header("location:data_diri_pasien.php");
=======
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Username atau Password Salah";
        } elseif ($_GET['pesan'] == "login") {
            echo "Anda telah berhasil login";
            header("location:dokter_index.php");
>>>>>>> d399f7b56a31d53473ba65b595e3346c9b07d494
            exit();
        } elseif ($_GET['pesan'] == "belum login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
<<<<<<< HEAD
>>>>>>> 046fbdbba5c7f1e4f0f22c7b3b26b7da01f19300
=======
>>>>>>> d399f7b56a31d53473ba65b595e3346c9b07d494

<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            
            <h1 class="auth-title">Rumah Sakit-sakitan</h1>
<<<<<<< HEAD
            <p class="auth-subtitle mb-5">Silahkan input Username dan Password</p>

            
               <form method="post" action="cek_login.php">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left mt-4">
                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
               
                
                <button class="btn btn-primary btn-block btn-lg shadow-lg ">CEK</button>
            </form>

            <div class="mt-4">
                <font size="4"><p class="text-gray-600">Apakah anda pasien? <a href="form_login.php" class="font-bold">Ya</a></p>
                </font><br>
             </div> 
                
=======
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
>>>>>>> d399f7b56a31d53473ba65b595e3346c9b07d494
            
            
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
