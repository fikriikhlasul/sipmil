<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Detail <?= $title; ?></h1>

   <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= validation_errors(); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif; ?>

            

        <div class="data-table-container">   
            <table class="table table-striped table-bordered data-table border-left-info" id="reqtransport">
               <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Nama</th>
                        <th scope="col" style="text-align: center;">Jenis Trans</th>
                        <th scope="col" style="text-align: center;">Tujuan</th>
                        <th scope="col" style="text-align: center;">Keperluan</th>
                        <th scope="col" style="text-align: center;">Dari</th>
                        <th scope="col" style="text-align: center;">Ke</th>
                      <!--   <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Jam Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Jam Kembali</th> -->
                        <th scope="col" style="text-align: center;">Kode Proyek</th>
                        <th scope="col" style="text-align: center;">Status</th>
                        <th scope="col" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                                       <?php foreach ($detailreq as $r) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td style="text-align: center;"><?= $r['nama_req']; ?></td>
                        <td style="text-align: center;"><?= $r['jenis_trans']; ?></td>
                        <td style="text-align: center;"><?= $r['tujuan_trans']; ?></td>
                        <td style="text-align: center;"><?= $r['keperluan_trans']; ?></td>
                        <td style="text-align: center;"><?= $r['req_dari']; ?></td>
                        <td style="text-align: center;"><?= $r['req_ke']; ?></td>
                        <td style="text-align: center;"><?= $r['kode_proyek']; ?></td>
                        <td style="text-align: center;"><font color=<?= $r['color']; ?>><?= $r['status_req']; ?></color></td></font>
                        
                        <td style="text-align: center;">
                            <a href="<?= base_url('kordinator/accreq/') . $r['id']; ?>" class="badge badge-success">Accept</a>
                            <a href="<?= base_url('kordinator/rejectreq/') . $r['id']; ?>" class="badge badge-danger tombol-reject">Reject</a>
                        </td>
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

