<!-- Begin Page Content -->
<div class="container-fluid">

    <head>
  <title>Laporan Harian</title>
  <style type="text/css">
   .upper { text-transform: uppercase; }
   .lower { text-transform: lowercase; }
   .cap   { text-transform: capitalize; }
   .small { font-variant:   small-caps; }
</style>
<script type="text/javascript">
  window.print();
</script>
</head>
<body bgcolor="white">
  <form>

            
 <div style="overflow-x:auto;">  
            <table border="1">
               <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Tanggal Request</th>
                        <th scope="col" style="text-align: center;">Nama</th>
                        <th scope="col" style="text-align: center;">Jenis Trans</th>
                        <th scope="col" style="text-align: center;">Tujuan</th>
                        <th scope="col" style="text-align: center;">Keperluan</th>
                        <th scope="col" style="text-align: center;">Dari</th>
                        <th scope="col" style="text-align: center;">Ke</th>
                        <th scope="col" style="text-align: center;">Tanggal Pinjam</th>
                        <th scope="col" style="text-align: center;">Jam Pinjam</th>
                        <th scope="col" style="text-align: center;">Tanggal Kembali</th>
                        <th scope="col" style="text-align: center;">Jam Kembali</th>
                        <th scope="col" style="text-align: center;">Kode Proyek</th>
                        <th scope="col" style="text-align: center;">Status</th>
                        <!-- <th scope="col" style="text-align: center;">Action</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                                       <?php foreach ($data as $r) : ?>
                    <tr>
                        <th scope="row" style="text-align: center;"><?= $i; ?></th>
                         <td style="text-align: center;"><?= date('d F Y', $r['date_created']); ?></td>
                        <td style="text-align: center;"><?= $r['nama_req']; ?></td>
                        <td style="text-align: center;"><?= $r['jenis_trans']; ?></td>
                        <td style="text-align: center;"><?= $r['tujuan_trans']; ?></td>
                        <td style="text-align: center;"><?= $r['keperluan_trans']; ?></td>
                        <td style="text-align: center;"><?= $r['req_dari']; ?></td>
                        <td style="text-align: center;"><?= $r['req_ke']; ?></td>
                        <td style="text-align: center;"><?= $r['tanggal_pinjam']; ?></td>
                        <td style="text-align: center;"><?= $r['jam_pinjam']; ?></td>
                        <td style="text-align: center;"><?= $r['tanggal_kembali']; ?></td>
                        <td style="text-align: center;"><?= $r['jam_kembali']; ?></td>
                        <td style="text-align: center;"><?= $r['kode_proyek']; ?></td>
                        <td style="text-align: center;"><font color=<?= $r['color']; ?>><?= $r['status_req']; ?></font></color></td>
                        
                        <!-- <td style="text-align: center;">
                            <a href="<?= base_url('user/editreq/') . $r['id']; ?>" class="badge badge-success">edit</a>
                            <a href="<?= base_url('user/deletereq/') . $r['id']; ?>" class="badge badge-danger tombol-hapusreq">delete</a>
                        </td> -->
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody> 
            </table>
        </div>

        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
