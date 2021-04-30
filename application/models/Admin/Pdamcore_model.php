<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdamcore_model extends CI_Model
{

    // input data aturan atau keputusan bupati / wali kota
    public function addKlasifikasiPelanggan($data)
    {
        $this->db->insert('pdam_klasifikasi_pelanggan', $data);
    }

    public function listKlasifikasi()
    {
        return $this->db->get('pdam_klasifikasi_pelanggan')->result_array();
    }

    public function aturan($kode_aturan)
    {
        $this->db->select('id, nomor_keputusan as nomor, tentang, tingkat, tahun');
        $row = $this->db->get_where('pdam_aturan', ['kode_aturan' => $kode_aturan])->row_array();
        return $row;
    }

    public function hapusklasifikasi($id)
    {
        # code...
        $this->db->where('id', $id);
        $this->db->delete('pdam_klasifikasi_pelanggan');
    }
}

/* End of file Pdamcore.php */
