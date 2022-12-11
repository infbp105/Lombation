<?php
 include "library_pdf/vendor/autoload.php";
 $mpdf = new \Mpdf\Mpdf();
?>
<h3>Data Lomba</h3>
<hr>
<table width="100%" border="1">
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

<?php
$html = ob_get_contents();
$mpdf->WriteHTML(utf8_decode($html));
$mpdf->Output("Data Lombation.pdf","I");
exit;
?>