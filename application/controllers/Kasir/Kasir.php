<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Menampilkan halaman dashboard kasir
     * 
     * Fitur Kasir : 
     *  -- Bayar Billing 
     *  -- Cetak Rekening
     *  -- Rekapitulasi penjualan harian.
     *  -- Kolekting Pembayaran 
     */
    public function index()
    {
        // listing pelanggan lama 
        $data =
            [
                'konten' => [
                    'isi' => ['kasir/dashboard', 'kasir/detail'],
                ]
            ];
        $this->_css();
        $this->load->view('template/index', $data);
    }








    public function _css()
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
        
    /* End of file  Kasir.php */
