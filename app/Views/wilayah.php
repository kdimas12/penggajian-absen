<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Wilayah</h3>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('admin/wilayah/tambah') ?>" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah</a>
                    <table id="wilayah-table" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Wilayah</th>
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