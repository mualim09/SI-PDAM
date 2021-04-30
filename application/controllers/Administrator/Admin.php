<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model(
            ['Pelanggan_model' => 'mpelanggan']
        );
    }

    public function index()
    {
    }

    public function listPelangganLama()
    {
        // Administrator/Admin/listPelangganLama
        $this->db->select('IdPelanggan, NamaPelanggan, Desa');
        $dataPelangganLama = $this->db->get('pelanggan')->result_array();


        $data = [
            'konten' => [
                'isi' => ['Admin/list_pelanggan'],
            ],
            'dataPelangganLama' => $dataPelangganLama
        ];

        $this->_csstabel();
        $this->load->view('template/index', $data);

        // untuk mencari data pelanggan lama yang akan di perbaiki 
        // $pelanggan = $this->mpelanggan->listPelangganLama();
        // dump($pelanggan);
    }



    public function editPelanggan($idpelanggan)
    {
        $dataPelanggan = $this->db->get_where('pelanggan', ['IdPelanggan' => $idpelanggan])->row_array();
        $data = [
            'konten' => [
                'isi' => ['Admin/edit_pelanggan'],
            ],
            'dataPelanggan' => $dataPelanggan
        ];

        $this->_cssjs();

        $this->load->view('template/index', $data);
    }



    public function _cssjs()
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

    public function _csstabel()
    {
        footer_js(
            [
                'vendor/datatables.net/js/jquery.dataTables.min.js',
                'vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                'vendor/datatables.net-buttons/js/dataTables.buttons.min.js',
                'vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js',
                'vendor/datatables.net-buttons/js/buttons.html5.min.js',
                'vendor/datatables.net-buttons/js/buttons.flash.min.js',
                'vendor/datatables.net-buttons/js/buttons.print.min.js',
                'vendor/datatables.net-select/js/dataTables.select.min.js',
                'js/argon.js?v=1.1.0',
            ]
        );


        add_css(
            [
                'vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
                'vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css',
                'vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css',
                'css/argon.css?v=1.1.0" type="text/css',
            ]
        );
    }
}
/* End of file  Admin.php */
