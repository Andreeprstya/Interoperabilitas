<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/extensions/sweetalert2/sweetalert2.min.css">
    
<link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
<?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {?>
        <?php    
        } elseif ($_GET['pesan'] == "login") {
            echo "Anda telah berhasil login";
            header("location:data_diri_pasien.php");
            exit();
        } elseif ($_GET['pesan'] == "belum login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['nik']==""){
		header("location:index.php?pesan=gagal");
	}
 
	?>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li
                
                class="sidebar-item  ">
                <a href="data_diri_pasien.php" class='sidebar-link'>
                    
                    <span>Data Diri</span>
                </a>
            </li>
             <li
                class="sidebar-item  ">
                <a href="cetak_antrean.php" class='sidebar-link'>
                    
                    <span>Cetak No Antrean</span>
                </a>
            </li>
             <li
                class="sidebar-item active ">
                <a href="surat_sehat.php" class='sidebar-link'>
                    
                    <span>Surat Keterangan Sehat</span>
                </a>
            </li>
            <li
                class="sidebar-item  ">
                <a href="logout.php" class='sidebar-link'>
                    
                    <span>Kembali</span>
                </a>
            </li>
            
            
           
            
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <h3>Surat Keterangan Sehat</h3>
    Silahkan unduh file surat sehat anda!
</div>


	<div class="page-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Unduh Surat Sehat</h4>
                TerimaKasih telah mempercayai rumah sakit-sakitan untuk mengecek kesehatan anda
                <br>
                Silakan unduh surat sakit anda disini. 
            </div>
            <form method="post" action="cek_surat.php">
                        <?php
                            include 'koneksi.php';
                            $nik = $_SESSION['nik'];
                            $query = "SELECT * FROM tb_ktp where nik = $nik";
                            $data = mysqli_query($koneksi, $query);
                            while ($d = mysqli_fetch_array($data)) {
                        ?>
                <input type="hidden" value="<?php echo $d['nik']; ?>" name="nik">
            <div class="card-body">
                    <a href="cek_surat.php">
                        <button class="btn icon icon-left btn-success" data-bs-toggle="modal" data-bs-target="#info">
                            <svg class="bi" width="1em" height="1em" fill="currentColor">
                                <use xlink:href="assets/images/bootstrap-icons.svg#printer"></use>
                            </svg>Cetak
                        </button>
                    </a>
            </div>
            </form>
        </div>
    </section>
</div>
<?php
    }
?>
            
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
<!-- Need: Apexcharts -->
<script src="assets/extensions/jquery/jquery.min.js"></script>
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>
<script src="assets/extensions/sweetalert2/sweetalert2.min.js"></script>>
<script src="assets/js/pages/sweetalert3.js"></script>>
<script>
        var pesan = "<?=$_GET['pesan']?>";

        if(pesan == "gagal") {
            // console.log(pesan);
           var gagal =  Swal.fire({
            icon: 'error',
            title: 'Oops... Surat Tidak Ditemukan',
            text: 'Anda Belum Melakukan Pemeriksaan!',
            footer: '<a href="cetak_antrean.php">Ingin Melakukan Pemeriksaan?</a>'
            })
        
            $('#gagal').html(gagal)
        }
       
    </script>
</body>

</html>
