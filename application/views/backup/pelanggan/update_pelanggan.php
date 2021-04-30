<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <?php
                echo "<pre>";
                print_r($dataPelanggan);
                echo "</pre>";
                ?>

                <form action="" method="post">
                    <div class="row">
                        <div class="col-3">
                            <label for="">ID Pelanggan</label>
                            <input type="text" name="idpelanggan" class="form-control" id="" value="<?php echo $dataPelanggan['IdPelanggan']; ?>">
                        </div>
                        <div class="col-3">
                            <label for="">Golongan Pelanggan</label>
                            <input type="text" name="idpelanggan" class="form-control" id="" value="<?php echo $dataPelanggan['GolonganPelanggan']; ?>">
                        </div>
                        <div class="col-6">
                            <label for="">Nama Pelanggan</label>
                            <input type="text" name="idpelanggan" class="form-control" id="" value="<?php echo $dataPelanggan['NamaPelanggan']; ?>">
                        </div>

                        <div class="col-3">
                            <label for="">Tempat Lahir</label>
                            <input type="text" name="idpelanggan" class="form-control" id="" value="<?php echo $dataPelanggan['Alamat']; ?>">
                        </div>
                        <div class="col-3">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="idpelanggan" class="form-control" id="" value="<?php echo $dataPelanggan['Jalan']; ?>">
                        </div>
                        <div class="col-3">

                            <label for="">Pekerjaan</label>
                            <select name="pekerjaan" id="" class="form-control">
                                <option value="">Pilih Pekerjaan</option>

                                <?php foreach ($dataPekerjaan as $row) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['namaPekerjaan']; ?></option>

                                <?php } ?>
                            </select>

                        </div>
                        <div class="col-3">
                            <label for="">Agama</label>
                            <select name="agama" id="" class="form-control">
                                <option value="">Pilih Agama</option>
                                <?php foreach ($dataAgama as $rowx) { ?>
                                    <option value="<?php echo $rowx['IdAgama']; ?>"><?php echo $rowx['NamaAgama']; ?></option>

                                <?php } ?>

                            </select>
                        </div>


                        <div class="col-3">
                            <label for="">Type Identitas</label>
                            <select name="typeindentitas" id="" class="form-control">
                                <option value="">Type Identitas</option>
                                <?php foreach ($dataIdentitas as $key) { ?>
                                    <option value="<?php echo $key['IdIdentitas']; ?>"><?php echo $key['NamaIdentitas']; ?></option>

                                <?php } ?>


                            </select>

                        </div>
                        <div class="col-3">
                            <label for="">No Identitas</label>
                            <input type="text" name="idpelanggan" class="form-control" id="" value="<?php echo $dataPelanggan['NoIdentitas']; ?>">
                        </div>

                        <div class="col-3">
                            <label for="">No. KK</label>
                            <input type="text" name="idpelanggan" class="form-control" id="" value="<?php echo $dataPelanggan['MerekMeter']; ?>">
                        </div>
                        <div class="col-3">
                            <label for="">Kelamin</label>
                            <select name="jeniskelamin" class="form-control" id="">
                                <option value="">Jenis Kelamin</option>
                                <option value="1">Laki Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>


                        <div class="col-3">
                            <label for="">Foto Rumah</label>
                            <input type="file" name="idpelanggan" class="form-control">
                        </div>

                        <div class="col-3">
                            <label for="">Foto Penghuni</label>
                            <input type="file" name="idpelanggan" class="form-control">
                        </div>


                        <div class="col-3">
                            <label for="">Foto Meteran</label>
                            <input type="file" name="idpelanggan" class="form-control" id="" value="<?php echo $dataPelanggan['NoIdentitas']; ?>">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>