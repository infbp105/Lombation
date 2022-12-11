<?php
    // convert file ke bentuk excel
    header("Content-type:application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Lombation.xls");
?>

<h3>Data Lomba</h3>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Penyedia</th>
        <th>Judul</th>
        <th>Deadline</th>
        <th>Poster</th>
        <th>Panduan</th>
        <th>Bidang</th>
        <th>Deskripsi</th>
        
    </tr>
    <?php
     $conn = mysqli_connect("localhost", "root", "", "lombati1_lombation");
     $data = mysqli_query($conn, "SELECT * FROM lomba");
     while($dt = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $dt['id'] ?></td>
        <td><?php echo $dt['penyedia'] ?></td>
        <td><?php echo $dt['judul'] ?></td>
        <td><?php echo $dt['deadline'] ?></td>
        <td><?php echo $dt['poster'] ?></td>
        <td><?php echo $dt['panduan'] ?></td>
        <td><?php echo $dt['bidang'] ?></td>
        <td><?php echo $dt['deskripsi'] ?></td>
    </tr>
    <?php
        }
    ?>
</table>
