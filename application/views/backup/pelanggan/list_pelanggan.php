    <div class="card">
        <!-- Card header -->
        <?php echo $this->session->flashdata('pesan'); ?>

        <div class="card-header">
            <h3 class="mb-0">Listing Data Pelanggan Lama</h3>
            <p class="text-sm mb-0">
                Listing data Karyawan PDAM
            </p>
        </div>
        <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>No Register</th>
                        <th>Nama</th>
                        <th>Gol Pel</th>
                        <th>Cabang</th>
                        <th>Desa</th>
                        <th>

                        </th>

                    </tr>
                </thead>

                <tbody>
                    <?php $nomor = 1;
                    foreach ($dataPelangganLama as $key) { ?>
                        <tr>
                            <td><?php echo $nomor++; ?></td>
                            <td><?php echo $key['NoRegister']; ?></td>
                            <td><?php echo $key['NamaPelanggan']; ?></td>
                            <td><?php echo $key['GolonganPelanggan']; ?></td>
                            <td><?php echo $key['Cabang']; ?></td>
                            <td><?php echo $key['Desa']; ?></td>
                            <td>
                                <a href="<?php echo base_url('detailpelangganlama/') . $key['IdPelanggan']; ?>" class="btn btn-sm btn-primary" rel="noopener noreferrer"><i class="fa fa-eye"></i> Detail</a>

                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>