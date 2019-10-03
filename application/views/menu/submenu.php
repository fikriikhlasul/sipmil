<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="row">
        <div class="col-lg">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>
            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>

            <?php $this->session->flashdata('flash'); ?>

            <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>

           <div class="data-table-container" style="width: 100%">   
            <table class="table table-striped table-bordered data-table border-left-info" id="menutbl">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">No</th>
                        <th scope="col" style="text-align: center;">Title</th>
                        <th scope="col" style="text-align: center;">Menu</th>
                        <th scope="col" style="text-align: center;">Url</th>
                        <th scope="col" style="text-align: center;">Icon</th>
                        <th scope="col" style="text-align: center;">Status</th>
                        <th scope="col" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($subMenu as $sm) : ?>
                    <tr>
                        <th scope="row" style="text-align: center;"><?= $i; ?></th>
                        <td style="text-align: center;"><?= $sm['title']; ?></td>
                        <td style="text-align: center;"><?= $sm['menu']; ?></td>
                        <td style="text-align: center;"><?= $sm['url']; ?></td>
                        <td style="text-align: center;"><?= $sm['icon']; ?></td>
                        <td style="text-align: center;"><?= $sm['is_active']; ?></td>
                        <td style="text-align: center;">
                            <a href="<?= base_url('menu/editsub/') . $sm['id']; ?>" class="badge badge-success">edit</a>
                            <a href="<?= base_url('menu/deletesub/') . $sm['id']; ?>" class="badge badge-danger tombol-hapussub">delete</a>
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
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                    </div>
                      <div class="form-group">
                            <select name="is_active" id="is_active" class="form-control">
                            <option value="">Select Menu</option>
                            
                            <option value="Active">Active</option>
                            <option value="Nonactive">Nonactive</option>
                        </select>
                        <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
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