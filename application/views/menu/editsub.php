<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('flash'); ?>

           <form action="" method="post">
                <input type="hidden" name="id" value="<?= $submenu['id']; ?>">
                <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
                          <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                          <?= form_error('menu_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url" value="<?= $submenu['url']; ?>">
                          <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon" value="<?= $submenu['icon']; ?>">
                          <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                            <select name="is_active" id="is_active" class="form-control">
                            <option value="">Select Menu</option>
                            
                            <option value="Active">Active</option>
                            <option value="Nonactive">Nonactive</option>
                        </select>
                        <?= form_error('is_active', '<small class="text-danger pl-3">', '</small>'); ?>
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

<!-- Modal -->

