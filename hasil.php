<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"  />
    <meta http-equiv="X-UA-Compitable" content="IE-edge"  />
    <title>Booking</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="../coba/img/logobarber.png">
</head>
<body>
    <div class="bg-loader">
        <div class="loader"></div>
    </div>
    <header>
        <div class="container">
        <h1><a href="index.html">Hair's Studio</a></h1>
        </div>
    </header>
        <?php
            $nama=$_POST['nama'];
            $email=$_POST['email'];
            $kode=$_POST['kode'];
            $nohp=$_POST['nohp'];
            $tgl=$_POST['tanggal'];
            $waktu=$_POST['waktu'];
            
        
        if($kode=="COL") {
            $service = "Coloring";
        } elseif($kode=="CUT") {
            $service = "Haircut";
        } elseif($kode=="SHA") {
            $service = "Shaving";
        } elseif($kode=="COR") {
            $service = "Cornrow";
        } elseif($kode=="DRE") {
            $service = "Dreadlock";
        } else {
            $service = "-";
        }


        ?>

    <section class="about">
        <div class="container">
            <h3>Bukti Booking</h3>
                <p>Nama Pelanggan: <?php echo"$nama<br> "; ?>
                No HP: <?php echo"$nohp <br>"; ?>
                e-mail: <?php echo"$email <br>"; ?>
                Service: <?php echo"$service <br>"; ?>
                Tanggal: <?php echo"$tgl <br>"; ?>
                Waktu: <?php echo"$waktu <br>"; ?>
                <br>
                Silahkan datang ke lokasi sesuai dengan waktu yang telah ditentukan<br>
                jika terlewat 10 menit, harap membuat booking kembali
                <br>
                <br>
                <h3><a href="logout.php"><strong>Logout</strong></a></h3></p>
        </div>
    </section>
                









        <!-- <pre> 
BUKTI PEMBAYARAN TIKET KERETA API
---------------------------------
Nama Customer   : <?php echo"$nama <br>"; ?>

No HP           : <?php echo"$nohp <br>"; ?>

e-mail          : <?php echo"$email <br>"; ?>

Service         : <?php echo"$service <br>"; ?>

tanggal         : <?php echo"$tgl <br>"; ?>

waktu           : <?php echo"$waktu <br>"; ?>
---------------------------------
<a href="booking.html">Input Kembali</a>
    </pre> -->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".bg-loader").hide();
        })
    </script>
</body>
</html>