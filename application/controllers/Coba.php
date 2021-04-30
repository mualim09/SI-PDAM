<?php

defined('BASEPATH') or exit('No direct script access allowed');


use Endroid\QrCode\Writer\SvgWriter;


class Coba extends CI_Controller
{

    public function potong()
    {

        $kalimat = "K1001";
        $sub_kalimat = substr($kalimat, 0, -3);
        echo $sub_kalimat;
        // 456789

        # code...
    }
    public function bayar()
    {
        $idpelanggan = 1;
        $this->db->select('GolonganPelanggan');
        $golPelanggan = $this->db->get_where('pelanggan', ['IdPelanggan' => $idpelanggan])->row_array();

        $tarif = $this->db->get_where('pelanggan_gol_tarif', ['GolonganTarif' => $golPelanggan['GolonganPelanggan']])->result_array();
        echo "<pre>";
        print_r($tarif);
        echo "</pre>";
        // echo $tarif[0]['HargaTarif'];
        // echo "<br />";
        // echo $tarif[1]['HargaTarif'];
        // echo "<br />";
        // echo $tarif[2]['HargaTarif'];
        // echo "<br />";
        // echo $tarif[3]['HargaTarif'];
        // echo "<br />";


        // dump($tarif);


        $awal = 00;
        $akhir = 49;

        echo "Pemakaian Awal : " . $awal . "<br />";
        echo "Pemakaian Akhir : " . $akhir . "<br />";
        echo "Kubikasi : " . ($akhir - $awal);

        // penjualan 1 = 1 = 10 
        // penjualan 2 = 11 - 20
        // penjualan 3 = 21 - 30
        // penjualan 4 di atas 31

        $kubikasi = $akhir - $awal;

        $penjualan_1 = abs($kubikasi);
        $penjualan_2 = abs(10 - $penjualan_1);
        $penjualan_3 = abs(10 - $penjualan_2);
        $penjualan_4 = abs(10 - $penjualan_3);

        $data = [];

        if ($penjualan_1 <= 10) {

            $data = [
                'Informasi' => 'Penjualan 1 - 10',
                'penjualan1' => $penjualan_1 * $tarif[0]['HargaTarif'],
                'penjualan2' => 0,
                'penjualan3' => 0,
                'penjualan4' => 0,
            ];
        } elseif ($penjualan_2 <= 10) {
            $data = [
                'Informasi' => 'Penjualan 11 - 20',
                'penjualan1' => ($penjualan_1 - $penjualan_2) * $tarif[0]['HargaTarif'],
                'penjualan2' => $penjualan_2 * $tarif[1]['HargaTarif'],
                'penjualan3' => 0,
                'penjualan4' => 0,
            ];
        } elseif ($penjualan_3 <= 10) {
            $data = [
                'Informasi' => 'Penjualan 21 - 30',
                'penjualan1' => ($penjualan_1 - $penjualan_2) * $tarif[0]['HargaTarif'],
                'penjualan2' => ($penjualan_1 - $penjualan_2) * $tarif[1]['HargaTarif'],
                'penjualan3' => ($penjualan_1 = $penjualan_3) * $tarif[2]['HargaTarif'],
                'penjualan4' => 0
            ];
        } else {
            $data = [
                'Informasi' => 'Penjualan di atas 30',
                'penjualan1' => ($penjualan_1 - $penjualan_2) * $tarif[0]['HargaTarif'],
                'penjualan2' => ($penjualan_1 - $penjualan_2) * $tarif[1]['HargaTarif'],
                'penjualan3' => ($penjualan_1 - $penjualan_2) * $tarif[2]['HargaTarif'],
                'penjualan4' => $penjualan_4 * $tarif[0]['HargaTarif'],
            ];
        }

        echo "<pre>";
        print_r($data);
    }



    public function pdfcoba()
    {
        $this->load->library('Pdf');
        $this->load->view('coba');
    }
    public function cobahelper()
    {
        // echo coreapps('aktivasi');
        echo coreapps('aktivasi');
    }


    public function home()
    {
        $data = [
            'konten' => [
                'isi' => ['pelanggan/list_pelanggan'],
                'info' => 'pelanggan/info_pelanggan'

            ],
            'infopelanggan' => [
                'totalPerbaikan' => $this->modelpelanggan->perbaikan(0),
                'totalFixPerbaikan' => $this->modelpelanggan->perbaikan(1),
            ],
            'dataPelangganLama' => $this->modelpelanggan->allPelangganLama()

        ];

        add_css([
            'vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
            'vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css',
            'vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css',
            'css/argon.css?v=1.1.0',
        ]);

        footer_js([
            'vendor/datatables.net/js/jquery.dataTables.min.js',
            'vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
            'vendor/datatables.net-buttons/js/dataTables.buttons.min.js',
            'vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js',
            'vendor/datatables.net-buttons/js/buttons.html5.min.js',
            'vendor/datatables.net-buttons/js/buttons.flash.min.js',
            'vendor/datatables.net-buttons/js/buttons.print.min.js',
            'vendor/datatables.net-select/js/dataTables.select.min.js',
            'js/argon.js?v=1.1.0',
            'js/demo.min.js',
        ]);
        $this->load->view('welcome_message', $data);
        # code...
    }
    public function qrcode()
    {
        echo "<img src='https://api.qrserver.com/v1/create-qr-code/?size=400x400&data=CHIPS MD, AREA BATOH KONTAK 085361774210'></img>";
    }

    public function cetak()
    {
        $data = array(
            "dataku" => array(
                "nama" => "Petani Kode",
                "url" => "http://petanikode.com"
            )
        );

        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('coba', $data);
    }
    public function index()
    {
        # code...

        $this->load->view('coba');
    }
    public function register()
    {

        $password = $this->input->post('password', true);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $username = $this->input->post('username');
        $telepon = $this->input->post('telepon');
        $hakakses = $this->input->post('hakakses');

        $statusAkses = "";
        if ($hakakses == 1) {
            $statusAkses = 'Operator';
        } else {
            $statusAkses = "Admin";
        }
        $namapetugas = $this->input->post('namapetugas', true);
        $wilayah = $this->input->post('wil', true);
        // simpan dalam database data_login
        $dataLogin =
            [
                'username' => $username,
                'password' => $password_hash,
                'telepon' => $telepon,
                'hakAkses' => $hakakses,
                'statusAkses' => $statusAkses,
                'namaPetugas' => $namapetugas,
                'wilayah' => $wilayah
            ];

        $this->db->insert('data_login', $dataLogin);

        $this->session->set_flashdata('pesan', '<span class="text text-lg">Akses Login telah di tambahkan pada sistem. </span>');
        redirect('coba/index', 'refresh');
    }
}

/* End of file Coba.php */
