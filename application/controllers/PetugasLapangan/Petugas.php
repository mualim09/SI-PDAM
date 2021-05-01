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

        $this->db->select('data_lama_pelanggan.Nama as Nama, 
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

    public function inputMeteran($idpelanggan)
    {
        // wilayah di gunakan untuk mengelompokan pelanggan di wilayah tersebut.


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
