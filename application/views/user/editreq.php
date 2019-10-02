<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('flash'); ?>
            <form action="" method="post">
            	<input type="hidden" name="id" value="<?= $editreq['id']; ?>">
                <div class="form-group">
                    <label for="jenis_trans"><strong>Jenis Transportasi</strong></label>
                     <div class="form-group">
                        <select name="jenis_trans" id="jenis_trans" class="form-control">
                            <option value="">Pilih Jenis Transportasi</option>
                            <option value="Mobil">Mobil</option>
                            <option value="Bus">Kendaraan Dinas</option>
                            <option value="Dalam Kota">Dalam Kota</option>
                            <option value="Taksi">Taksi</option>
                            <option value="Kendaraan Lain">Kendaraan Lain</option>
                            <option value="Luar Kota">Luar Kota</option>

                        </select>
                        <?= form_error('jenis_trans', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                 <div class="form-group">
                    <label for="tujuan_trans"><strong>Tujuan Transportasi</strong></label>
                    <input type="text" class="form-control" id="tujuan_trans" name="tujuan_trans" value="<?= $editreq['tujuan_trans']; ?>">
                    <?= form_error('tujuan_trans', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                 <div class="form-group">
                    <label for="keperluan_trans"><strong>Keperluan Transportasi</strong></label>
                    <input type="text" class="form-control" id="keperluan_trans" name="keperluan_trans" value="<?= $editreq['keperluan_trans']; ?>">
                    <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                 <div class="form-group">
                    <label for="req_dari"><strong>Dari</strong></label>
                    <input type="text" class="form-control" id="req_dari" name="req_dari" value="<?= $editreq['req_dari']; ?>">
                    <?= form_error('req_dari', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                 <div class="form-group">
                    <label for="req_ke"><strong>Ke</strong></label>
                    <input type="text" class="form-control" id="req_ke" name="req_ke" value="<?= $editreq['req_ke']; ?>">
                    <?= form_error('req_ke', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                 <div class="form-group">
                    <label for="tanggal_pinjam"><strong>Tanggal Pinjam</strong></label>
                    <input type="text" class="form-control" id="menu" name="tanggal_pinjam" value="<?= $editreq['tanggal_pinjam']; ?>">
                    <?= form_error('tanggal_pinjam', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                 <div class="form-group">
                    <label for="jam_pinjam"><strong>Jam Pinjam</strong></label>
                    <input type="text" class="form-control" id="jam_pinjam" name="jam_pinjam" value="<?= $editreq['jam_pinjam']; ?>">
                    <?= form_error('jam_pinjam', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                 <div class="form-group">
                    <label for="tanggal_kembali"><strong>Tanggal Kembali</strong></label>
                    <input type="text" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="<?= $editreq['tanggal_kembali']; ?>">
                    <?= form_error('tanggal_kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                 <div class="form-group">
                    <label for="jam_kembali"><strong>Jam Kembali</strong></label>
                    <input type="text" class="form-control" id="jam_kembali" name="jam_kembali" value="<?= $editreq['jam_kembali']; ?>">
                    <?= form_error('jam_kembali', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                 <div class="form-group">
                    <label for="kode_proyek"><strong>Kode Proyek</strong></label>
                    <input type="text" class="form-control" id="kode_proyek" name="kode_proyek" value="<?= $editreq['kode_proyek']; ?>">
                    <?= form_error('kode_proyek', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Change</button>
                </div>
            </form>

        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 