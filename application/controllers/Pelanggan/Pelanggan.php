<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // listing pelanggan lama 
        $data =
            [
                'konten' => [
                    'isi' => ['coba_view'],
                ]
            ];
        $this->_css();


        $this->load->view('welcome_message', $data);
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
        
    /* End of file  Pelanggan.php */
