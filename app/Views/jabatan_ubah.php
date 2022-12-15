<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Jabatan Pegawai</h3>
        </div>
        <!-- /.card-header -->
        <form action="" method="post" id="form-jabatan">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_jabatan">Nama jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan" value="<?= $jabatan['nama_jabatan'] ?>">
                </div>
                <div class="form-group">
                    <label for="uang_lembur">Uang lembur</label>
                    <input type="text" class="form-control" id="uang_lembur" name="uang_lembur" value="<?= $jabatan['uang_lembur'] ?>">
                </div>
                <div class="form-group">
                    <label for="uang_makan">Uang makan</label>
                    <input type="text" class="form-control" id="uang_makan" name="uang_makan" value="<?= $jabatan['uang_makan'] ?>">
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