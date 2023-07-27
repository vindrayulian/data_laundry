<?php
    include "../../../koneksi.php";

        $vid        = $_GET['id'];
    
        $hapusbrg = mysqli_query($con, "delete from tb_brg_laundry 
        where id_laundry = '$vid'");

        echo"<meta http-equiv=refresh content=0;url=../index.php>";
?>
