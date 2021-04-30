 <div class="card">
     <!-- Card header -->
     <div class="card-header">
         <h3 class="mb-0">Tambah Data Karyawan </h3>
     </div>
     <!-- Card body -->

     <!-- NIK
     nip
     Nama
     nomorTelepon
     Jabatan
     Golongan
     KetGolongan
     TempatTugas
     StatusKepegawaian
     MulaiKerja
     Pensiun
     fotoKaryawan
     keterangan -->


     <div class="card-body">
         <form>
             <!-- Input groups with icon -->
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-user"></i></span>
                             </div>
                             <input class="form-control" placeholder="Nama Lengkap Karyawan" type="text">
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                             </div>
                             <input class="form-control" placeholder="Nomor KTP" type="text">
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <input class="form-control" placeholder="Alamat" type="text">
                             <div class="input-group-append">
                                 <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <input class="form-control" placeholder="Kabupaten" readonly type="text" value="PIDIE JAYA">
                             <div class="input-group-append">
                                 <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <select name="kecamatan" id="" class="form-control" data-toggle="select">
                                 <option value="">Kecamatan</option>
                                 <?php foreach ($kecamatan as $kec) { ?>
                                     <option value="<?php echo $kec['IdKecamatan']; ?>">
                                         <?php echo $kec['NamaKecamatan']; ?>
                                     </option>
                                 <?php } ?>
                             </select>

                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <select name="desa" id="" class="form-control" data-toggle="select">
                                 <option value="">Desa / Gampong</option>
                                 <?php foreach ($desa as $d) { ?>
                                     <option value="<?php echo $d['IdDesa']; ?>">
                                         <?php echo $d['NamaDesa']; ?>
                                     </option>
                                 <?php } ?>
                             </select>



                         </div>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <select name="StatusKawin" id="" class="form-control">
                                 <option value="1">Status Perkawinan</option>
                                 <option value="1">Kawin</option>
                                 <option value="2">Belum Kawin</option>
                                 <option value="3">Janda / Duda</option>


                             </select>
                             <div class="input-group-append">
                                 <span class="input-group-text"><i class="fas fa-map-marker"></i></span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <select name="GolonganDarah" id="" class="form-control">
                                 <option value="">Golongan Darah</option>
                                 <option value="A">A</option>
                                 <option value="B">B</option>
                                 <option value="AB">AB</option>
                                 <option value="O">O</option>
                             </select>
                             <div class="input-group-append">
                                 <span class="input-group-text"><i class="fas fa-eye"></i></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Input groups with icon -->
             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <select name="Agama" id="" class="form-control">
                                 <option value="">Agama</option>
                                 <?php foreach ($agama as $a) { ?>
                                     <option value="<?php echo $a['IdAgama']; ?>"><?php echo $a['NamaAgama']; ?></option>
                                 <?php } ?>
                             </select>
                             <div class="input-group-append">
                                 <span class="input-group-text"><i class="fas fa-eye"></i></span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                             </div>
                             <input class="form-control" placeholder="Phone number" type="text">
                             <div class="input-group-append">
                                 <span class="input-group-text"><i class="fas fa-phone"></i></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <div class="row">
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                             </div>
                             <input class="form-control" name="TmpLahir" placeholder="Tempat Lahir" type="text">
                             <div class="input-group-append">
                                 <span class="input-group-text"><i class="fas fa-phone"></i></span>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="form-group">
                         <div class="input-group input-group-merge">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                             </div>
                             <input name="TglLahir" class="form-control" placeholder="Tanggal Lahir" type="date">
                             <div class="input-group-append">
                                 <span class="input-group-text"><i class="fas fa-calendar-o"></i></span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </form>
     </div>
 </div>

 <div class="card">
     <!-- Card header -->
     <div class="card-header">
         <h3 class="mb-0">Dropdowns</h3>
     </div>
     <!-- Card body -->
     <div class="card-body">
         <form>
             <select class="form-control" data-toggle="select">
                 <option>Alerts</option>
                 <option>Badges</option>
                 <option>Buttons</option>
                 <option>Cards</option>
                 <option>Forms</option>
                 <option>Modals</option>
             </select>
         </form>
     </div>
 </div>