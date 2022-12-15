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
                        <?php foreach ($jabatan as $jab) : ?>
                            <option value="<?= $jab['id_jabatan'] ?>"><?= $jab['nama_jabatan'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="wilayah">Wilayah</label>
                    <select class="custom-select" id="wilayah" name="wilayah">
                        <?php foreach ($wilayah as $wil) : ?>
                            <option value="<?= $wil['id_wilayah'] ?>"><?= $wil['nama_wilayah'] ?></option>
                        <?php endforeach ?>
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