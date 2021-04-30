<div class="row">
    <div class="col">

        <div class="card">
            <!-- Card header -->
            <div class="card-header">
                <h3 class="mb-0">Data Pelanggan PDAM</h3>
                <p class="text-sm mb-0">
                    Listing data pelanggan PDAM yang belum di lengkapi atau belum di selesaikan.
                </p>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th>No.</th>
                            <th>Nama Pelanggan</th>
                            <th>ID Pelanggan</th>
                            <th>Desa</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;

                        foreach ($dataPelangganLama as $key) { ?>
                            <tr>
                                <td><?php echo $nomor++; ?></td>
                                <td><?php echo $key['NamaPelanggan']; ?></td>
                                <td><?php echo $key['IdPelanggan']; ?></td>
                                <td><?php echo $key['Desa']; ?></td>
                                <td>
                                    <a href="<?php echo base_url('Administrator/Admin/editPelanggan/' . $key['IdPelanggan']); ?>" class="btn btn-sm btn-primary" rel="noopener noreferrer">Detail</a>
                                    <a href="#" class="btn btn-sm btn-warning" rel="noopener noreferrer">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger" rel="noopener noreferrer">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>