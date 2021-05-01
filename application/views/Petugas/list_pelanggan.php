<div class="card">
    <?php echo
    $this->session->flashdata('pesan');
    ?>
    <div class="card-body">
        <h2 class="text text-mute">
            Cari Pelanggan
        </h2>
        <p>Silahkan Masukan IDPelanggan untuk memulai pencatatan meteran</p>
        <form action="<?= base_url('caripelanggan'); ?>" method="post" class="form">
            <label for="" class="form-control-label">IDPelanggan</label>
            <input type="number" maxlength="5" autofocus autocomplete="off" name="idpelanggan" class="form-control form-control-lg" placeholder="IDPelanggan" id="">
            <button type="submit" class="btn btn-primary btn-lg mt-2 form-control">Proses Cari</button>
        </form>
    </div>
</div>