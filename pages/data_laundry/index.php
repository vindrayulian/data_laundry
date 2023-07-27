<?php
    include "../../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Laundry Vindra</title>
</head>
<body>
    <h3>Data laundry</h3>
    <button style="margin-bottom:10px;"><a href="tambah_data/tambah_data_laundry.php">Tambah data</a></button>
    <table border="1" cellpadding="5">
        <thead>
            <th>No</th>
            <th>Nama Laundry</th>
            <th>Tanggal Laundry</th>
            <th>Berat Laundry</th>
            <th>Aksi</th>
        </thead>
        <?php
           $laundry = mysqli_query($con, "select * from tb_brg_laundry");
           $no=1;
           while($data=mysqli_fetch_array($laundry)){
            echo("
                <tr>
                    <td>$no</td>
                    <td>$data[nama_laundry]</td>
                    <td>$data[tanggal_laundry]</td>
                    <td>$data[berat_laundry]</td>
                    <td>
                        <a href='edit_data/editdatalaundry.php?id=$data[id_laundry]'>Edit</a> 
                        | 
                        <a href='hapus_data/aksihapuslaundry.php?id=$data[id_laundry]'>Delete</a>
                    </td>
                </tr>
            ");
            $no++;
           }
        ?>
    </table>
    <br>
    <button><a href="../../index.php">Kembali Ke Dashboard</a></button>
</body>
</html>