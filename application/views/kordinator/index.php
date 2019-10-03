<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



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


          <div class="data-table-container" style="width: 100%">   
            <table class="table table-striped table-bordered data-table border-left-info" id="menutbl">
               <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Nama</th>
                        <th scope="col" style="text-align: center;">Bagian</th>
                        <th scope="col" style="text-align: center;">Email</th>
                        <th scope="col" style="text-align: center;">Bergabung Sejak</th>
                       <!--  <th scope="col">Dari</th>
                        <th scope="col">Ke</th> -->
                      <!--   <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Jam Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Jam Kembali</th> -->
                       <!--  <th scope="col">Kode Proyek</th>
                        <th scope="col">Status</th> -->
                        <th scope="col" style="text-align: center;">Lihat Request</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                                       <?php foreach ($userkor as $r) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $r['name']; ?></td>
                        <td><?= $r['bagian']; ?></td>
                        <td><?= $r['email']; ?></td>
                        <td><?= date('d F Y', $user['date_created']); ?></td>
                       
                        
                        <td>
                         
                         <center> <a href="<?= base_url('kordinator/detailreq/') . $r['id']; ?>" class="badge badge-info">detail</a></center>  
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
