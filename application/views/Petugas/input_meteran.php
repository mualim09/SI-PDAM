        <?php
        if ($dataInputan == 0) { ?>
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url('PetugasLapangan/petugas/prosesCatat'); ?>" method="post" enctype="multipart/form-data">
                        <label for="">Nama Pelanggan</label>
                        <input type="text" name="namapelanggan" id="" class="form-control" value="<?= $pelanggan['Nama']; ?>" readonly>

                        <br>

                        <label for="">IDPelanggan </label>
                        <input type="text" name="idpelanggan" class="form-control" value="<?php echo $pelanggan['idPelanggan']; ?>" readonly>
                        <br>
                        <label for="">Foto Meteran</label>
                        <input type="file" name="fotometer" id="fotometer" placeholder="Foto Meteran" autofocus class="form-control">

                        <br />

                        <label for="">Meteran Pelanggan</label>
                        <input type="text" name="nomormeteran" id="nomormeteran" placeholder="Nomor Meteran" class="form-control">

                        <button type="submit" class="btn btn-primary btn-sm form-control mt-2">Simpan</button>
                    </form>
                </div>
            </div>

        <?php } else { ?>
            <div class="card">
                <div class="card-body">
                    Maaf Pelanggan yang anda maksud sudah tercatat silahkan lakukan edit data pelanggan atau konfirmasi kembali
                    <br />
                    <a href="#" class="btn btn-primary btn-md form-control mt-4">Check Listing Pencatatan</a>
                    <a href="<?php echo base_url('petugas'); ?>" title="Kembali Kehalaman Pencarian" class="btn btn-danger btn-md form-control mt-2">Kembali</a>
                </div>
            </div>
        <?php }
