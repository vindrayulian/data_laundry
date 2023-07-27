<?php
    include "../../../koneksi.php";

        $vid                = $_GET['id'];
        $edit_laundry       = mysqli_query($con, "select * from tb_brg_laundry where id_laundry='$vid'");
        $data               = mysqli_fetch_array($edit_laundry);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data Laundry</title>
</head>
<body>
    <form action="aksieditlaundry.php" method="post">
        <table>
            <tr>
                <td>Nama Laundry</td>
                <td>:</td>
                <td><input type="text" name="nama_laundry" value="<?php echo $data['nama_laundry'] ?>"></td>
            </tr> 
            <tr>
                <td>Tanggal Laundry</td>
                <td>:</td>
                <td><input type="date" name="tanggal_laundry" value="<?php echo $data['tanggal_laundry'] ?>"></td>
            </tr> 
            <tr>
                <td>Berat Laundry</td>
                <td>:</td>
                <td><input type="text" name="berat_laundry" value="<?php echo $data['berat_laundry'] ?>"></td>
            </tr> 
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="hidden" name="id_laundry" value="<?php echo $data['id_laundry'] ?>">
                    <input type="submit" value="Edit">
                    <button><a href="../index.php">Kembali</a></button>
            </td>
            </tr> 
        </table>
        
    </form>
</body>
</html>