<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title mr-2">Data Wilayah</h3>
                    <a href="<?= base_url('admin/wilayah/tambah') ?>" class="btn btn-primary ml-auto"><i class="fas fa-plus"></i> Tambah</a>
                </div>
                <div class="card-body">
                    <table id="wilayah-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Wilayah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
<?= $this->endSection() ?>