<?php
session_start();
$nik            = $_POST['nik'];
$nama_lengkap   = $_POST['nama_lengkap'];

if(strlen($nik) !=16){
    echo"<script>
    alert('NIK Kurang Dari 16 digit');
    window.location.assign('register.php')
    </script>";
    die;
}

$format = "$nik|$nama_lengkap";
$file   = file('config.txt', FILE_IGNORE_NEW_LINES);
if(in_array($format, $file)){ //jika data ditemukan
    session_start();
    $_SESSION['nik'] = $nik;
    $_SESSION['nama_lengkap'] = $nama_lengkap;
    // echo $_SESSTION['nama_lengkap'];
    header("Location:dashboard.php");
} else{ //jida data tidak ditemukan ?>
    <script type="text/javascript">window
            alert('Kombinasi NIK dan Nama Lengkap Salah.');
            window.location.assign('index.php');
        </script>
<?php }