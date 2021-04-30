    <div class="card">
        <?= $this->session->flashdata('pesan'); ?>
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Klasifikasi Pelanggan</h3>
            <p>Klasifikasi pelanggan ini hanya akan berlaku 1 Tahun, dan harap di sesuaikan sebelum hal tersebut.</p>
        </div>

        <!-- Card body -->
        <div class="card-body">
            <form method="POST" action="<?php echo base_url('add-klasifikasi'); ?>">
                <div class="form-group row">
                    <div class="col-md-3">

                        <select name="pemakaian" id="" class="form-control">
                            <option value=""><?php
                                                if (set_value('kode') == '') {
                                                    echo "Pilih Kode";
                                                } else {
                                                    echo set_value('kode');
                                                } ?>

                            </option>
                            <option value="K1001">K1001</option>
                            <option value="K1002">K1002</option>
                            <option value="K1003">K1003</option>
                            <option value="K1004">K1004</option>
                            <option value="K2001">K2001</option>
                            <option value="K2002">K2002</option>
                            <option value="K2003">K2003</option>
                            <option value="K2004">K2004</option>
                            <option value="K3001">K3001</option>
                            <option value="K3002">K3002</option>
                            <option value="K3003">K3003</option>
                            <option value="K3004">K3004</option>

                        </select>
                        <small class="text text-danger"><?php echo form_error('kode'); ?></small>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="text" value="<?php echo set_value('tahun'); ?>" id="" name="tahun" placeholder="Tahun Berlaku">
                        <small class="text text-danger"><?php echo form_error('tahun'); ?></small>
                    </div>

                    <div class="col-md-3">
                        <input class="form-control" type="text" value="<?php echo set_value('golongan'); ?>" id="" name="golongan" placeholder="Golongan Pemakaian">
                        <small class="text text-danger"><?php echo form_error('golongan'); ?></small>
                    </div>
                    <div class="col-md-3">
                        <select name="pemakaian" id="" class="form-control">
                            <option value="">
                                <?php
                                if (set_value('pemakaian') == '') {
                                    echo "Pilih pemakaian";
                                } else {
                                    echo set_value('pemakaian');
                                } ?>

                            </option>
                            <option value="1 s/d 10 M3">1 s/d 10 M3</option>
                            <option value="11 s/d 20 M3">11 s/d 20 M3</option>
                            <option value="21 s/d 30 M3">21 s/d 30 M3</option>
                            <option value="diatas 31 M3">diatas 31 M3</option>


                        </select>
                        <small class="text text-danger"><?php echo form_error('golongan'); ?></small>
                    </div>
                </div>
                <div class="form-group row">

                    <div class="col-md-3">
                        <input class="form-control" type="text" value="<?php echo set_value('harga'); ?>" id="" name="harga" placeholder="Harga / M3">
                        <small class="text text-danger"><?php echo form_error('harga'); ?></small>
                    </div>
                    <div class="col-md-3">
                        <input class="form-control" type="text" value="0" id="" name="denda" placeholder="Denda">

                    </div>

                    <div class="col-md-3">
                        <button type="submit" class="btn btn-sm btn-primary form-control">Proses</button>
                    </div>
                </div>

            </form>

        </div>


    </div>