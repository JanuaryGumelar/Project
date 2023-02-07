<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    </link>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
    </link>
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet">
    </link>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
    <?php

include "config.php";
include "akses.php";

if(isset($_POST['daftar'])){

    $janji = $_POST['janji'];
    $no2 = $_POST['no'];
    $no = $_POST['no_antri'];
    $nama = $_POST['nama'];
    $keperluan = $_POST['keperluan'];
    $nama_d = $_POST['nama_d'];
    $bertemu = $_POST['bertemu'];
    $nope = $_POST['no_tlp'];
    $nik = $_POST['no_nik'];
    date_default_timezone_set('Asia/Jakarta');
    $tanggal = date("Y-m-d H:i:s");
    $date = date("Y-m-d H:i:s");
    $day = date('d');

        $nama_image = $_FILES['foto']['name'];
        $ukuran_file = $_FILES['foto']['size'];
        $tipe_file = $_FILES['foto']['type'];
        $tmp_file = $_FILES['foto']['tmp_name'];
 
        {
            $query = "UPDATE tamu 
                SET nama = '$nama' , no_nik= '$nik' , keperluan = '$keperluan' , bertemu = '$bertemu' , no_tlp = '$nope' , janji = '$janji', image = '$nama_image'
                WHERE no ='$no2' ";
            $sql = mysqli_query($connect, $query);
            echo '<script>
                swal({
                title: "Edit Data Tamu Berhasil !",
                text: "data tamu berhasil di edit",
                type: "success"
                }).then(function() {
                window.location = "view-tamu.php";
                });
                </script>';
        }
    }else{
    echo '<script>
        swal({
            title: "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG",
            text: "",
            type: "warning"
        }).then(function() {
            window.location = "view-tamu.php";
        });
    </script>';
}


?>
</body>

</html>