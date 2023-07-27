<?php
    include "../../../koneksi.php";

    if($_POST['nama_laundry']!=NULL){
        $vnamalaundry    = $_POST['nama_laundry'];
        $vtanggal        = $_POST['tanggal_laundry'];
        $vberat          = $_POST['berat_laundry'];
    
        $laundry = mysqli_query($con, "insert into tb_brg_laundry 
        values('','$vnamalaundry','$vtanggal','$vberat')");
    }

        echo"<meta http-equiv=refresh content=0;url=../index.php>";
?>
