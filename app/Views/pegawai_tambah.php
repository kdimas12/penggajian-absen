<?= $this->extend('layout/index') ?>

<?= $this->section('content') ?>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Pegawai</h3>
        </div>
        <!-- /.card-header -->
        <form action="" method="post" id="form-pegawai">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_pegawai">Nama Pegawai</label>
                    <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Ketikkan nama pegawai">
                </div>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="number" class="form-control" id="nip" name="nip" placeholder="Ketikkan nomor NIP">
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <select class="custom-select" id="jabatan" name="jabatan">
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <select class="custom-select" id="wilayah" name="wilayah">
                        <option>Value 1</option>
                        <option>Value 2</option>
                        <option>Value 3</option>
                    </select>
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