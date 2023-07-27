<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data Laundry</title>
</head>
<body>
    <form action="aksitambahlaundry.php" method="post">
        <table>
            <tr>
                <td>Nama Laundry</td>
                <td>:</td>
                <td><input type="text" name="nama_laundry"></td>
            </tr> 
            <tr>
                <td>Tanggal Laundry</td>
                <td>:</td>
                <td><input type="date" name="tanggal_laundry"></td>
            </tr> 
            <tr>
                <td>Berat Laundry</td>
                <td>:</td>
                <td><input type="text" name="berat_laundry"></td>
            </tr> 
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="reset" value="Reset">
                    <input type="submit" value="Submit">
            </td>
            </tr> 
        </table>
        
    </form>
</body>
</html>