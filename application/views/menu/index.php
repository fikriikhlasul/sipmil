<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

         <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
            <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>

            <div class="data-table-container" style="width: 200%">   
            <table class="table table-striped table-bordered data-table border-left-info" id="menutbl">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Menu</th>
                        <th scope="col" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                    <tr>
                        <th scope="row" style="text-align: center;"><?= $i; ?></th>
                        <td style="text-align: center;"><?= $m['menu']; ?></td>
                        <td style="text-align: center;">
                            <a href="<?= base_url('menu/editmenu/') . $m['id']; ?>" class="badge badge-success">edit</a>
                            <a href="<?= base_url('menu/deletemenu/') . $m['id']; ?>" class="badge badge-danger tombol-hapusmenu">delete</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table></div>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
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