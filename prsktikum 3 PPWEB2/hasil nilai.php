<?php
if(!isset ($_POST['nama'])){
   echo '<script>alert("anda harus mengisi form terlebih dahulu!)</script>
<meta http-equiv="refresh" content="0; formnilai.php">';
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil nilai mahasiswa</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?=$_POST['nama']?></td>
        </tr>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><?=$_POST['nim']?></td>
        </tr>
        <tr>
            <td>Rombel</td>
            <td>:</td>
            <td><?=$_POST['rombel']?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><?=$_POST['matkul']?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><?=$_POST['tugas']?></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><?=$_POST['uts']?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><?=$_POST['uas']?></td>
        </tr>
        <tr>
            <td>Predikat</td>
            <td>:</td>
            <td>
                <?php
                $tugas = $_POST['tugas'] * (35/100);
                $uts = $_POST['uts'] * (30/100);
                $uas = $_POST['uas'] * (35/100);
                $total = $tugas + $uts + $uas;
                if ($total <= 35) {
                    echo "E";
                }
                elseif ($total <= 55) {
                    echo "D";
                }
                elseif ($total <= 65) {
                    echo "C";
                }
                elseif ($total <= 75) {
                    echo "B";
                }
                elseif ($total <= 85) {
                    echo "A";
                }else {
                    echo "tidak diketahui";
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>
