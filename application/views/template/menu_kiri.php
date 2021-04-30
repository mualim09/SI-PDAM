 <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
   <div class="scrollbar-inner">

     <!-- Brand -->
     <div class="sidenav-header d-flex align-items-center">
       <a class="navbar-brand" href="<?= base_url(); ?>pages/dashboards/dashboard.html">
         <img src="<?= base_url(); ?>/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
       </a>
       <div class="ml-auto">
         <!-- Sidenav toggler -->
         <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
           <div class="sidenav-toggler-inner">
             <i class="sidenav-toggler-line"></i>
             <i class="sidenav-toggler-line"></i>
             <i class="sidenav-toggler-line"></i>
           </div>
         </div>
       </div>
     </div>
     <div class="navbar-inner">
       <!-- Collapse -->
       <!-- <div class="collapse navbar-collapse" id="sidenav-collapse-main"> -->
       <!-- Nav items -->
       <ul class="navbar-nav">
         <li class="nav-item">
           <a class="nav-link active" href="#navbar-dashboards" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-dashboards">
             <i class="ni ni-shop text-primary"></i>
             <span class="nav-link-text">Dashboards</span>
           </a>
           <div class="collapse show" id="navbar-dashboards">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="<?= base_url(); ?>" class="nav-link">Dashboard</a>
               </li>
             </ul>
           </div>
         </li>

         <li class="nav-item">
           <a class="nav-link" href="#navbar-admin" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
             <i class="ni ni-ungroup text-orange"></i>
             <span class="nav-link-text">Administrator</span>
           </a>
           <div class="collapse" id="navbar-admin">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item"> <a href="<?= base_url('add-klasifikasi'); ?>" class="nav-link">Klasifikasi</a> </li>
             </ul>
           </div>
         </li>

         <li class="nav-item">
           <a class="nav-link" href="#navbar-pelanggan_pdam" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
             <i class="ni ni-ungroup text-orange"></i>
             <span class="nav-link-text">Pelanggan</span>
           </a>
           <div class="collapse" id="navbar-pelanggan_pdam">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item"> <a href="" class="nav-link">List Pelanggan</a> </li>
             </ul>
           </div>
         </li>


         <li class="nav-item">
           <a class="nav-link" href="#navbar-pegawai" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
             <i class="ni ni-ungroup text-orange"></i>
             <span class="nav-link-text">Kepegawaian</span>
           </a>
           <div class="collapse" id="navbar-pegawai">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item"> <a href="" class="nav-link">Tambah Karyawan</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">List Karyawan</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Gaji Karyawan</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Tunjungan Karyawan</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Rekap Pembayaran</a> </li>
             </ul>
           </div>
         </li>

         <li class="nav-item">
           <a class="nav-link" href="#navbar-kasir" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
             <i class="ni ni-ungroup text-orange"></i>
             <span class="nav-link-text">Kasir</span>
           </a>
           <div class="collapse" id="navbar-kasir">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item"> <a href="" class="nav-link">Pembayaran</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Cetak Struk</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Riwayat Pembayaran</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Koreksi</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Terima Pembayaran</a> </li>
             </ul>
           </div>
         </li>

         <li class="nav-item">
           <a class="nav-link" href="#navbar-teknis" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
             <i class="ni ni-ungroup text-orange"></i>
             <span class="nav-link-text">Teknisi Lapangan</span>
           </a>
           <div class="collapse" id="navbar-teknis">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item"> <a href="" class="nav-link">List Permasalahan</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">List Barang</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Proses Perbaikan</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Riwayat Perbaikan</a> </li>
             </ul>
           </div>
         </li>

         <li class="nav-item">
           <a class="nav-link" href="#navbar-surve" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
             <i class="ni ni-ungroup text-orange"></i>
             <span class="nav-link-text"> Survey</span>
           </a>
           <div class="collapse" id="navbar-survey">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item"> <a href="" class="nav-link">List Permintaan</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">List Barang</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Proses Survey</a> </li>
               <li class="nav-item"> <a href="" class="nav-link">Riwayat Survey</a> </li>
             </ul>
           </div>
         </li>

         <li class="nav-item">
           <a class="nav-link" href="#navbar-pelanggan" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
             <i class="ni ni-ungroup text-orange"></i>
             <span class="nav-link-text"> Pelanggan</span>
           </a>
           <div class="collapse" id="navbar-pelanggan">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item"> <a href="<?= base_url('pelanggan-lama'); ?>" class="nav-link">Perbaikan Data</a> </li>

             </ul>
           </div>
         </li>



         <li class="nav-item">
           <a class="nav-link" href="#navbar-berita" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
             <i class="ni ni-ungroup text-orange"></i>
             <span class="nav-link-text">Berita</span>
           </a>
           <div class="collapse" id="navbar-berita">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item"> <a href="" class="nav-link">Tambah Berita</a> </li>
               <li class="nav-item">
                 <a href="#" class="nav-link">Tambah Katagori</a>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link">List Berita</a>
               </li>
               <li class="nav-item">
                 <a href="#" class="nav-link">Berita Kiriman</a>
               </li>

             </ul>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
             <i class="ni ni-ungroup text-orange"></i>
             <span class="nav-link-text">Examples</span>
           </a>
           <div class="collapse" id="navbar-examples">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/examples/pricing.html" class="nav-link">Pricing</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/examples/login.html" class="nav-link">Login</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>pages/examples/register.html" class="nav-link">Register</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/examples/lock.html" class="nav-link">Lock</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/examples/timeline.html" class="nav-link">Timeline</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/examples/profile.html" class="nav-link">Profile</a>
               </li>
             </ul>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#navbar-components" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
             <i class="ni ni-ui-04 text-info"></i>
             <span class="nav-link-text">Components</span>
           </a>
           <div class="collapse" id="navbar-components">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/components/buttons.html" class="nav-link">Buttons</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/components/cards.html" class="nav-link">Cards</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/components/grid.html" class="nav-link">Grid</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/components/notifications.html" class="nav-link">Notifications</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/components/icons.html" class="nav-link">Icons</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/components/typography.html" class="nav-link">Typography</a>
               </li>
               <li class="nav-item">
                 <a href="#navbar-multilevel" class="nav-link" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-multilevel">Multi level</a>
                 <div class="collapse show" id="navbar-multilevel" style="">
                   <ul class="nav nav-sm flex-column">
                     <li class="nav-item">
                       <a href="#!" class="nav-link ">Third level menu</a>
                     </li>
                     <li class="nav-item">
                       <a href="#!" class="nav-link ">Just another link</a>
                     </li>
                     <li class="nav-item">
                       <a href="#!" class="nav-link ">One last link</a>
                     </li>
                   </ul>
                 </div>
               </li>
             </ul>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#navbar-forms" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
             <i class="ni ni-single-copy-04 text-pink"></i>
             <span class="nav-link-text">Forms</span>
           </a>
           <div class="collapse" id="navbar-forms">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/forms/elements.html" class="nav-link">Elements</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/forms/components.html" class="nav-link">Components</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/forms/validation.html" class="nav-link">Validation</a>
               </li>
             </ul>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#navbar-tables" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
             <i class="ni ni-align-left-2 text-default"></i>
             <span class="nav-link-text">Tables</span>
           </a>
           <div class="collapse" id="navbar-tables">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/tables/tables.html" class="nav-link">Tables</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/tables/sortable.html" class="nav-link">Sortable</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/tables/datatables.html" class="nav-link">Datatables</a>
               </li>
             </ul>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#navbar-maps" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
             <i class="ni ni-map-big text-primary"></i>
             <span class="nav-link-text">Maps</span>
           </a>
           <div class="collapse" id="navbar-maps">
             <ul class="nav nav-sm flex-column">
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/maps/google.html" class="nav-link">Google</a>
               </li>
               <li class="nav-item">
                 <a href="<?= base_url(); ?>/pages/maps/vector.html" class="nav-link">Vector</a>
               </li>
             </ul>
           </div>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?= base_url(); ?>pages/widgets.html">
             <i class="ni ni-archive-2 text-green"></i>
             <span class="nav-link-text">Widgets</span>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?= base_url(); ?>/pages/charts.html">
             <i class="ni ni-chart-pie-35 text-info"></i>
             <span class="nav-link-text">Charts</span>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?= base_url(); ?>/pages/calendar.html">
             <i class="ni ni-calendar-grid-58 text-red"></i>
             <span class="nav-link-text">Calendar</span>
           </a>
         </li>
       </ul>
       <!-- Divider -->
       <hr class="my-3">
       <!-- Heading -->
       <h6 class="navbar-heading p-0 text-muted">Documentation</h6>
       <!-- Navigation -->
       <ul class="navbar-nav mb-md-3">
         <li class="nav-item">
           <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
             <i class="ni ni-spaceship"></i>
             <span class="nav-link-text">Getting started</span>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
             <i class="ni ni-palette"></i>
             <span class="nav-link-text">Foundation</span>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
             <i class="ni ni-ui-04"></i>
             <span class="nav-link-text">Components</span>
           </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
             <i class="ni ni-chart-pie-35"></i>
             <span class="nav-link-text">Plugins</span>
           </a>
         </li>
       </ul>
     </div>
   </div>
   </div>
 </nav>