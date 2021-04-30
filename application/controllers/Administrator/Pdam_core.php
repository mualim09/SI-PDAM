<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdam_core extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model([
            'Admin/Pdamcore_model' => 'pdamcoremodel'
        ]);
    }


    public function index()
    {
        // tampilkan listing data yang sudah ada.
    }

    // pdam/Administrator/Pdam_core/addKlasifikasi
    public function addKlasifikasi()
    {
        $data =
            [
                'konten' => [
                    'isi' => ['Admin/add_klasifikasi', 'Admin/list_klasifikasi'],
                ],
                'list' =>  $this->pdamcoremodel->listKlasifikasi(),
                'nomor' => 'Nomor Peraturan ' . $this->pdamcoremodel->aturan('KTAP')['nomor'] . ' Tingkat ' . $this->pdamcoremodel->aturan('KTAP')['tingkat'],
            ];
        $this->_standarcss();
        $this->load->view('template/index', $data);
    }

    /**
     * Hapus data inputan klasifikasi dan di alihkan langsung kembali ke halaman sebelumnya.
     * uri : Administrator/Pdam_core/hapus/$param
     */
    public function hapus($id)
    {
        if ($id == '') {
            echo "Sistem tidak dapat melakukan proses";
        }
        $this->pdamcoremodel->hapusklasifikasi($id);
        $this->session->set_flashdata('pesan', '<span class="alert alert-success">Berhasil Menghapus data</span>');

        redirect(base_url('Administrator/Pdam_core/addKlasifikasi'), 'refresh');
    }

    /**
     * Simpan data Klasifikasi berdasarkan aturan yang berlaku untuk dapat di gunakan pada biling pembayaran.
     * Pada pengaturan ini di bagi kedalam bebeapa kelompok dan untuk kode akan di gunakan K1 dan seterusnya.
     */

    public function prosesKlasifikasi()
    {

        dump($_POST);

        die();
        // ambil keputusan yang ada 
        // notifikasi peringatan masa habis aturan setiap bulan 2
        $this->_ruleklasifikasi();

        $kode = strtoupper($this->input->post('kode', true));
        $tahun  = $this->input->post('tahun', true);
        $golongan = $this->input->post('golongan', true);
        $kodegolongan = $this->input->post('kodegolongan', true);
        $pemakaian = $this->input->post('pemakaian', true);
        $denda = $this->input->post('denda', true);
        $harga = $this->input->post('harga', true);

        if ($this->form_validation->run() == FALSE) {
            // $this->session->set_flashdata('pesan', '<span class="alert alert-danger">Proses Gagal</span>');
            return $this->addKlasifikasi();
        } else {
            dump($_POST);

            $datainput = [
                'kodeKlasifikasi' => $kode,
                'berlaku_tahun' => $tahun,
                'Golongan' => substr($kode, 0, -3),
                'KeteranganGolongan' => $kodegolongan,
                'pemakaian_air' => $pemakaian,
                'Harga' => $harga,
                'keputusan' => $this->pdamcoremodel->aturan('KTAP')['id'],
                'ket' => '-',
                'status_klasifikasi' => 1
            ];
            echo "<hr />";
            dump($datainput);

            // $this->pdamcoremodel->addKlasifikasiPelanggan($datainput);

            // $this->session->set_flashdata('pesan', '<span class="alert alert-success">Proses Berhasil</span>');


            // redirect(base_url('add-klasifikasi'), 'refresh');
        }
    }

    public function _ruleklasifikasi()
    {
        $this->form_validation->set_rules('kode', 'KodeKalsifikasi', 'trim|required|is_unique[pdam_klasifikasi_pelanggan.kodeKlasifikasi]', ['required' => 'Wajib*']);
        $this->form_validation->set_rules('tahun', 'Tahun Berlaku', 'trim|required|min_length[4]', ['required' => 'Wajib', 'min_length' => 'Minimal 4 Digit']);
        $this->form_validation->set_rules('golongan', 'Golongan', 'trim|required', ['required' => 'Wajib',]);
        $this->form_validation->set_rules('harga', 'Harga Pemakaian', 'trim|required', ['required' => 'Wajib']);
    }


    public function _standarcss()
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

/* End of file Pdam_core.php */
