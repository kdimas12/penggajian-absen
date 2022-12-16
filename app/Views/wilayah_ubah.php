<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Wilayah Pegawai</h3>
        </div>
        <!-- /.card-header -->
        <form action="" method="post" id="form-wilayah">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_wilayah">Nama Wilayah</label>
                    <input type="text" class="form-control" id="nama_wilayah" name="nama_wilayah" value="<?= $wilayah['nama_wilayah'] ?>">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div><!-- /.container-fluid -->
<?= $this->endSection() ?>