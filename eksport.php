<?php include 'fungsi/config.php'; ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Print Data Table</title>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    </head>
    <body>
        <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th>Namaaa</th>
                <th>Email</th>
                <th>Pesanan</th>
                <th>Tanggal Pemesanan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
        <?php $data = tampilLomba(); foreach($data as $row): ?>
                    <tr>
                      <th scope="row"><?= $row['id'] ?></th>
                      <td><?= $row['penyedia'] ?></td>
                      <td><?= $row['judul'] ?></td>
                      <td><?= $row['bidang'] ?></td>
                      <td><?= $row['deadline'] ?></td>
                      <td><?= $row['poster'] ?></td>
                      <td><?= $row['panduan'] ?></td>
                      <td><?= $row['deskripsi'] ?></td>
                    </tr>
                      <?php endforeach ?>
        </tfoot>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });

        });
    </script>














    </body>
</html>