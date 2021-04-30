<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-0">List Klasifikasi Pemakaian Air</h3>
                        <p> <?= $nomor; ?> </p>
                    </div>

                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>Pemakaian</th>
                            <th>Golongan</th>
                            <th>Kode</th>
                            <th>Harga</th>
                            <th>Denda</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $l) { ?>
                            <tr>

                                <td>
                                    <a href="#!" class="font-weight-bold"><?php echo $l['pemakaian_air']; ?> M3</a>
                                </td>
                                <td> <?php echo $l['Golongan']; ?> </td>
                                <td> <?php echo $l['KeteranganGolongan']; ?> </td>
                                <td> <?php echo $l['Harga']; ?> </td>
                                <td> <?php echo $l['Denda']; ?> </td>

                                <td class="table-actions">
                                    <a href="#!" class="table-action" data-toggle="tooltip" data-original-title="Edit">
                                        <i class="fas fa-user-edit"></i>
                                    </a>
                                    <a href="<?php echo base_url('del-klasifikasi/' . $l['id']); ?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>