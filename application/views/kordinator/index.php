<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



   <div class="row">
        <div class="col-lg">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('flash'); ?>

            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= validation_errors(); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php endif; ?>

            <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newReqModal">Add New Request</a>

            <table class="table table-striped table-bordered data">
               <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Bagian</th>
                        <th scope="col">Email</th>
                        <th scope="col">Bergabung Sejak</th>
                       <!--  <th scope="col">Dari</th>
                        <th scope="col">Ke</th> -->
                      <!--   <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Jam Pinjam</th>
                        <th scope="col">Tanggal Kembali</th>
                        <th scope="col">Jam Kembali</th> -->
                       <!--  <th scope="col">Kode Proyek</th>
                        <th scope="col">Status</th> -->
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                                       <?php foreach ($user as $r) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $r['name']; ?></td>
                        <td><?= $r['email']; ?></td>
                        <td><?= $r['bagian']; ?></td>
                        <td><?= $r['date_created']; ?></td>
                       
                        
                        <td>
                            <a href="<?= base_url('kordinator/accreq/') . $r['id']; ?>" class="badge badge-success">acc</a>
                            <a href="<?= base_url('kordinator/detailreq/') . $r['id']; ?>" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody> 
            </table>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="newReqModal" tabindex="-1" role="dialog" aria-labelledby="newReqModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newReqModalLabel">Add New Transportation Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user/reqtransport'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group" style="display: none;">
                        <input type="text" class="form-control" id="user_email" name="user_email" value="<?=$user['email'] ?>" >
                    </div>
                    <label><strong>Nama</strong></label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_req" name="nama_req" value="<?=$user['name'] ?>" readonly >
                        <?= form_error('nama_req', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <label><strong>Jenis Transportasi</strong></label>
                    <div class="form-group">
                        <select name="jenis_trans" id="jenis_trans" class="form-control">
                            <option value="">Select Menu</option>
                            <option value="Mobil">Mobil</option>
                            <option value="Bus">Kendaraan Dinas</option>
                            <option value="Dalam Kota">Dalam Kota</option>
                            <option value="Taksi">Taksi</option>
                            <option value="Kendaraan Lain">Kendaraan Lain</option>
                            <option value="Luar Kota">Luar Kota</option>

                        </select>
                        <?= form_error('jenis_trans', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <label><strong>Input Tujuan Transportasi</strong></label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="tujuan_trans" name="tujuan_trans" placeholder="Tujuan Transportasi">
                        <?= form_error('tujuan_trans', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <label><strong>Input Keperluan Transportasi</strong></label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="keperluan_trans" name="keperluan_trans" placeholder="Keperluan Transportasi">
                        <?= form_error('keperluan_trans', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <label><strong>Rute Transportasi</strong></label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="req_dari" name="req_dari" placeholder="Dari">
                        <?= form_error('req_dari', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="req_ke" name="req_ke" placeholder="Ke">
                        <?= form_error('req_ke', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <label><strong>Input Waktu Peminjaman</strong></label>
                    <div class="form-group">
                        <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" placeholder="Tanggal Pinjam">
                        <?= form_error('tanggal_pinjam', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="time" class="form-control" id="jam_pinjam" name="jam_pinjam" placeholder="Jam Pinjam">
                        <?= form_error('jam_pinjam', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <label><strong>Input Waktu Pengembalian</strong></label>
                    <div class="form-group">
                        <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" placeholder="Tanggal Kembali">
                        <?= form_error('tanggal_kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="time" class="form-control" id="jam_kembali" name="jam_kembali" placeholder="Jam Kembali">
                        <?= form_error('jam_kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <label><strong>Input Kode Proyek</strong></label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kode_proyek" name="kode_proyek" placeholder="Kode Proyek">
                    <?= form_error('kode_proyek', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Add</button>
                </div>
            </form>
        </div>
    </div>
</div> 