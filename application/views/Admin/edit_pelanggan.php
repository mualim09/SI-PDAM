<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">Detail Pelanggan</h3>
            </div>
            <!-- Card body -->
            <div class="card-body">
                <?php
                print_r($dataPelanggan);
                ?>

                <form>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label"></label>
                        <div class="col-md-2">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['NoRegister']; ?>" id="example-text-input">
                            <small>No. Register</small>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['GolonganPelanggan']; ?>" id="example-text-input">
                            <small>Golongan</small>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['KelompokGolongan']; ?>" id="example-text-input">
                            <small>Kelompok Golongan</small>
                        </div>
                        <div class="col-md-2">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['UkuranMeter']; ?>" id="example-text-input">
                            <small>Ukuran Meter</small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Nama / No KTP</label>
                        <div class="col-md-5">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['NamaPelanggan']; ?>" id="example-text-input">
                        </div>
                        <div class="col-md-5">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['NoIdentitas']; ?>" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Tempat Tanggal Lahir</label>
                        <div class="col-md-5">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['TempatLahir']; ?>" id="example-text-input">
                        </div>
                        <div class="col-md-5">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['TanggalLahir']; ?>" id="example-text-input">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">No Handphone</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['TanggalLahir']; ?>" id="example-text-input">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Agama</label>
                        <div class="col-md-5">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['Agama']; ?>" id="example-text-input">
                        </div>
                        <div class="col-md-5">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['Kelamin']; ?>" id="example-text-input">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Jenis Kelamin</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['Agama']; ?>" id="example-text-input">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Pekerjaan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['Pekerjaan']; ?>" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Alamat</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['Alamat']; ?>" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Provinsi</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['Provinsi']; ?>" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Kabupaten</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['Provinsi']; ?>" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Kecamatan</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['Provinsi']; ?>" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-md-2 col-form-label form-control-label">Desa</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="<?php echo $dataPelanggan['Desa']; ?>" id="example-text-input">
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>