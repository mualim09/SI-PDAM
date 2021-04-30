<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        /**
         * Jika user sudah login, maka akan di arahkan sesuai dengan lokasi login nya.
         * jika user belum login maka halaman login akan di tawarkan.
         */
        $this->load->view('login');
    }


    public function prosesLogin()
    {

        /**
         * 01. Super Administrator
         * 02. Administrator
         * 03. Direktur
         * 04. Keuangan
         * 05. Kasir Cabang
         * 06. Kasir Unit
         * 07. Teknisi dan Survey
         * 08. Keuangan
         * 09. Kepegawaian
         * 10. Konsument
         */
    }
}

/* End of file Login.php */
