<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-5 mb-2">

                <tr>
                    <td>Nama Pelanggan</td>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                    <td>
                        <span class="heading text-warning">
                            <?= $datapelanggan['Nama']; ?>
                        </span>
                    </td>
                </tr>
                <br>
                <tr>
                    <td>IDPelanggan</td>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                    <td>

                        <span class="heading text-warning">
                            <?= $datapelanggan['idpelanggan']; ?>
                        </span>


                    </td>
                </tr>
                <br>
                <tr>
                    <td>Alamat Pelanggan</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                    <td><?= $datapelanggan['alamatrumah']; ?></td>
                </tr>
                <br>
                <tr>
                    <td>Kecamatan</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                    <td><?= $datapelanggan['namakecamatan']; ?></td>
                </tr>
                <br>
                <tr>
                    <td>Cabang</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                    <td><?= $datapelanggan['namacabang']; ?></td>
                </tr>
                <br>
                <tr>
                    <td>Detail Pelanggan</td>
                    <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</td>
                    <td>
                        <ul style="list-style: none;">
                            <li> Kode &nbsp;&nbsp;: <?= $golongan['kode']; ?>
                            <li> Jenis &nbsp;&nbsp;&nbsp;: <?= $golongan['nama']; ?>
                            </li>
                        </ul>

                    </td>
                </tr>

            </div>


            <div class="col-lg-7 text text-center">
                <?php

                if ($datapelanggan['fotorumah'] == null) { ?>
                    <img src="<?= base_url('assets/img/noimg.png'); ?>" alt="" class="card img-top" style="width: 50%;">
                <?php } else { ?>
                    <img src="<?= base_url('assets/img/foto_rumah/' . $datapelanggan['fotorumah']); ?>" alt="" class="card img-top" style="width: 50%;">
                <?php }

                ?>


                <div class="d-inline float-left">
                    <a href="#" class="btn btn-sm btn-primary">Catat Meteran</a>
                    <a href="<?= base_url('petugas'); ?>" class="btn btn-sm btn-danger">Batal</a>
                </div>
            </div>
        </div>
    </div>
</div>