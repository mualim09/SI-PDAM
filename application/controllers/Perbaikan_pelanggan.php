<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perbaikan_pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model([
            'Pelanggan_model' => 'pm'
        ]);
    }

    public function index()
    {
        $this->load->library('image_lib');
        $config['image_library'] = 'gd2';
        $config['source_image'] = base_url() . '/assets/img/noimage.png';
        $config['wm_text'] = 'Copyright 2006 - John Doe';
        $config['wm_type'] = 'text';
        $config['wm_font_path'] = '';
        $config['wm_font_size'] = '16';
        $config['wm_font_color'] = '#000000';
        $config['wm_vrt_alignment'] = 'bottom';
        $config['wm_hor_alignment'] = 'center';
        $config['wm_padding'] = '20';

        $this->image_lib->initialize($config);

        $this->image_lib->watermark();
        $this->image_lib->display_errors('<p>', '</p>');
        /** 
         * menampilkan data pelanggan awal di ambil dari data pelanggan 
         * data pelanggan yang sudah tervalidasi akan masuk ke data pelanggan baru data_pelanggan
         */
        // echo baca_anggak(20000);
        // $r = $this->pm->listPelangganLama('MNS LHOK');
        // dump($r);

        // $dataPelangganLama = $this->db->get('pelanggan')->result_array();
    }
}

/* End of file Perbaikan_pelanggan.php */
