<?php
    include "../../../koneksi.php";

        $vid            = $_POST['id_laundry'];
        $vnamalaundry   = $_POST['nama_laundry'];
        $vtanggal       = $_POST['tanggal_laundry'];
        $vberat         = $_POST['berat_laundry'];
    
        $edit_laundry = mysqli_query($con, "update tb_brg_laundry set nama_laundry = '$vnamalaundry', tanggal_laundry = '$vtanggal', berat_laundry = '$vberat' where id_laundry = '$vid'");

        echo"<meta http-equiv=refresh content=0;url=../index.php>";
?>
