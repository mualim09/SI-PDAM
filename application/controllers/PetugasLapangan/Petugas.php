<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(
            ['Petugas_Model' => 'petugasmodel']
        );
    }
    public function index()
    {

        $this->_css();
        $data = [
            'konten' => [
                'isi' => ['Petugas/list_pelanggan'],
                // 'info' => 'page/home'
            ],
        ];
        $this->load->view('welcome_message', $data);
    }


    public function cariIDPelanggan()
    {
        add_css(
            [
                'css/argon.css?v=1.1.0'
            ]
        );

        $id = $this->input->post('idpelanggan', true);

        $this->db->select('
        data_lama_pelanggan.Nama as Nama, 
        data_lama_pelanggan.FotoRumah as fotorumah, 
        data_lama_pelanggan.Alamat as alamatrumah, 
        data_lama_pelanggan.no_input as no_input, 
        data_lama_pelanggan.LokasiRumah as lokasi, 
        data_lama_pelanggan.Golongan as kodeGolongan, 
        data_lama_pelanggan.IDGolongan as idGol, 
        data_lama_pelanggan.idPelanggan as idpelanggan, 
        kec.name as namakecamatan,
        data_cabang.nama_cabang as namacabang
        ');


        // $this->db->limit(1);

        $this->db->join('kec', 'kec.id = data_lama_pelanggan.Kecamatan', 'JOIN');
        $this->db->join('data_cabang', 'data_cabang.id = data_lama_pelanggan.Cabang', 'JOIN');
        // $this->db->join('kec', 'kec.id = data_lama_pelanggan.Kecamatan', 'JOIN');

        $this->db->where('data_lama_pelanggan.idPelanggan', $id);

        $row_data = $this->db->get('data_lama_pelanggan')->row_array();


        // $row_data = $this->db->get_where('data_lama_pelanggan', ['data_lama_pelanggan.idPelanggan' => $id])->row_array();
        // dapatkan detail golongan bangunan atas pelanggan 
        $idGol = $row_data['idGol'];

        $detailGolongan = [];
        if ($idGol > 0) {
            // dapatkan detail golongan jika tidak 0 atua sudah di perbaiki
            $row_gol = $this->db->get_where('data_golongan', ['id' => $idGol])->row_array();
            $detailGolongan = [
                'id' => $row_gol['id'],
                'kode' => $row_gol['kode'],
                'keterangan' => $row_gol['ket_golongan'],
                'nama' => $row_gol['nama_golongan'],
                'statusgol' => $row_gol['status_kelompok'],

            ];
        } else {
            $detailGolongan = [
                'id' => '-',
                'kode' => '-',
                'keterangan' => '-',
                'nama' => '-',
                'statusgol' => '-',
            ];
        }


        if ($row_data) {
            $data = [
                'konten' => [
                    'isi' => ['Petugas/detail_pelanggan'],
                    // 'info' => 'page/home'

                ],
                'datapelanggan' => $row_data,
                'golongan' => $detailGolongan,
            ];
            $this->load->view('welcome_message', $data);
        } else {

            $this->session->set_flashdata('pesan', '<span class="alert alert-danger mb-2">Maaf.. IDPelanggan tidak di temukan</span>');

            redirect(base_url('petugas'), 'refresh');
        }
    }

    public function prosesCatat()
    {
        $idpelanggan = $this->input->post('idpelanggan', true);


        $this->load->library('upload');
        $config['upload_path'] = './assets/img/foto_meteran/'; //path folder
        $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = 0;
        // $config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload

        $new_name = date("Ymd") . "-" . time();
        $config['file_name'] = $new_name;

        $this->upload->initialize($config);
        if (!empty($_FILES['fotometer']['name'])) {

            if ($this->upload->do_upload('fotometer')) {

                $gbr = $this->upload->data();
                //Compress Image

                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/foto_meteran/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '50%';

                $config['width'] = 600;
                $config['height'] = 400;
                $config['new_image'] = './assets/img/foto_meteran/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $gambar = $gbr['file_name'];


                // untuk mendapatkan meteranlalu 
                // $this->db->order_by('Periode', 'DESC');

                $hasil = $this->db->get_where('data_drd', ['IDPelanggan' => $idpelanggan])->result_array();
                $datax =
                    [
                        'Periode' => $hasil[0]['Periode'],
                        'MeterLalu' => $hasil[0]['MeterLalu'],
                        'MeterKini' => $hasil[0]['MeterKini'], // menjadi meteran sekarang
                        'Cabang' => $hasil[0]['Cabang'], // menjadi meteran sekarang
                        'KodeGol' => $hasil[0]['KodeGol'],
                        'IDGol' => $hasil[0]['IDGol'],

                    ];

                $awal = $datax['MeterKini'];
                $akhir = $this->input->post('nomormeteran', true);

                $kubikasi = $akhir - $awal;


                $inputan = [
                    'Invoice' => date("Ym"),
                    'IDPelanggan' => 1,
                    'Cabang' => $datax['Cabang'],
                    'Periode' => date("Ym"),
                    'BulanRekening' => date("F-Y"),
                    'KodeGol' =>  $datax['KodeGol'],
                    'IDGol' => $datax['IDGol'],
                    'MeterLalu' => $datax['MeterLalu'],
                    'MeterKini' => $this->input->post('nomormeteran', true),
                    'Kubikasi' => $kubikasi,
                    'FotoMeteran' => $gambar,
                    'PetugasMeter' => 1, // id session petugas
                    'TanggalCatat' => date("Y-m-d H:i:s"),
                    'images' => $gbr

                ];

                $this->db->insert('data_drd', $inputan);


                echo "<pre>";
                print_r($inputan);
                echo "</pre>";
            } else {
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
            }
        } else {
            echo "Image yang diupload kosong";
        }


        // $config['upload_path'] = './assets/img/foto_meteran/';
        // $config['allowed_types'] = 'jpeg|jpg|png';
        // $config['max_size'] = 30000;
        // $config['max_width'] = 1500;
        // $config['max_height'] = 1500;
        // // $config['encrypt_name'] = TRUE;
        // $new_name = date("Yd") . "-" . time();
        // $config['file_name'] = $new_name;


        // $this->load->library('upload', $config);

        // if (!$this->upload->do_upload('fotometer')) {
        //     $error = array('error' => $this->upload->display_errors());
        //     print_r($error);
        // } else {
        //     $data = array('image_metadata' => $this->upload->data());
        //     echo "<pre>";
        //     print_r($data);
        //     echo "</pre>";

        //     $dataInput = [
        //         'MeteranKini' => $this->input->post('nomormeteran', true),
        //         'FotoMemteran' => $this->upload->data('file_name'),
        //         'Periode' => date("Yd"),
        //         'Bulan' => date("F-d")
        //     ];

        //     print_r($dataInput);
        // }
    }



    public function inputMeteran($idpelanggan)
    {
        $this->_css();
        // DAPATKAN DATA DRD PALING TERAKHIR BERDASARKAN PERIODE 
        $datapelanggan = $this->db->get_where('data_lama_pelanggan', ['idPelanggan' => $idpelanggan])->row_array();

        $periode = date("Ym");

        $this->db->where('Periode', $periode);
        $this->db->where('IDPelanggan', $idpelanggan);
        $dataInputan = $this->db->get('data_drd')->num_rows();


        $data = [
            'konten' => [
                'isi' => ['Petugas/input_meteran'],
                'info' => 'petugas/page'

            ],
            'pelanggan' => $datapelanggan,
            'dataInputan' => $dataInputan
        ];
        $this->load->view('welcome_message', $data);

        // die();
        // $this->db->order_by('Periode', 'DESC');

        // $hasil = $this->db->get_where('data_drd', ['IDPelanggan' => $idpelanggan])->result_array();
        // $datax =
        //     [
        //         'Periode' => $hasil[0]['Periode'],
        //         'MeterLalu' => $hasil[0]['MeterLalu'],
        //         'MeterKini' => $hasil[0]['MeterKini'], // menjadi meteran sekarang

        //         'Kubikasi' => $hasil[0]['Kubikasi'],
        //         'Pajak' => $hasil[0]['Pajak'],
        //         'BiayaAdministrasi' => $hasil[0]['BiayaAdministrasi'],
        //         'IDGol' => $hasil[0]['IDGol']
        //     ];



        // $awal = $datax['MeterKini'];
        // $akhir = 2011;


        // // penjualan 1 = 1 = 10 
        // // penjualan 2 = 11 - 20
        // // penjualan 3 = 21 - 30
        // // penjualan 4 di atas 31

        // $kubikasi = $akhir - $awal;

        // $penjualan_1 = abs($kubikasi);
        // $penjualan_2 = abs(10 - $penjualan_1);
        // $penjualan_3 = abs(10 - $penjualan_2);
        // $penjualan_4 = abs(10 - $penjualan_3);

        // $data = [];

        // if ($penjualan_1 <= 10) {

        //     $data = [
        //         'Informasi' => 'Penjualan 1 - 10',
        //         'penjualan1' => $penjualan_1,
        //         'penjualan2' => 0,
        //         'penjualan3' => 0,
        //         'penjualan4' => 0,
        //     ];
        // } elseif ($penjualan_2 <= 10) {
        //     $data = [
        //         'Informasi' => 'Penjualan 11 - 20',
        //         'penjualan1' => $penjualan_1 - $penjualan_2,
        //         'penjualan2' => $penjualan_2,
        //         'penjualan3' => 0,
        //         'penjualan4' => 0,
        //     ];
        // } elseif ($penjualan_3 <= 10) {
        //     $data = [
        //         'Informasi' => 'Penjualan 21 - 30',
        //         'penjualan1' => $penjualan_1 - $penjualan_2,
        //         'penjualan2' => $penjualan_1 - $penjualan_2,
        //         'penjualan3' => $penjualan_3,
        //         'penjualan4' => 0,
        //     ];
        // } else {
        //     $data = [
        //         'Informasi' => 'Penjualan di atas 30',
        //         'penjualan1' => $penjualan_1 - $penjualan_2,
        //         'penjualan2' => $penjualan_1 - $penjualan_2,
        //         'penjualan3' => $penjualan_1 - $penjualan_2,
        //         'penjualan4' => $penjualan_4,
        //     ];
        // }

        // echo "Meteran Lama : " . $awal . "<br />";
        // echo "Meteran Terkini : " . $akhir . "<br />";
        // echo "Kubikasi : " . $kubikasi;

        // echo "<hr />";
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
    }




    # code...

    private function _css()
    {
        footer_js(
            [
                'js/argon.js?v=1.1.0',
            ]
        );

        add_css(
            [
                'css/argon.css?v=1.1.0'
            ]
        );
    }
}
        
    /* End of file  Petugas.php */
