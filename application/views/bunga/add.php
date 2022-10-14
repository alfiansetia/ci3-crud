<div class="container">
    <h1><?= $title ?></h1>

    <form method="POST" action="<?= base_url('bunga/add') ?>">
        <div class="form-group">
            <label for="nama">Nama Binatang</label>
            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Binatang" value="<?= set_value('nama'); ?>" autofocus required>
            <small class="text-danger">
                <?php echo form_error('nama') ?>
            </small>
        </div>
        <div class="form-group">
            <label for="warna">Kategori Binatang</label>
            <input name="warna" type="text" class="form-control" id="warna" placeholder="Masukkan Kategori Binatang" value="<?= set_value('warna'); ?>" required>
            <small class="text-danger">
                <?php echo form_error('warna') ?>
            </small>
        </div>
        <a href="<?= base_url('bunga') ?>" class="btn btn-secondary mt-2 mb-2">Kembali</a>
        <button type="reset" class="btn btn-warning">Reset</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>