<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">
        <div class="col-lg-6">
           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $accreq['id']; ?>">
                 <div class="form-group">
                    <label for="no_polisi"><strong>No Polisi</strong></label>
                    <input type="text" class="form-control" id="no_polisi" name="no_polisi" placeholder="No Polisi">
                    <?= form_error('no_polisi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                 <div class="form-group">
                    <label for="nama_supir"><strong>Nama Supir</strong></label>
                    <input type="text" class="form-control" id="nama_supir" name="nama_supir" placeholder="Nama Supir">
                    <?= form_error('nama_supir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Accept Request</button>
                </div>
            </form>

        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 