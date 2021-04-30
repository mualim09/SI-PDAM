<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    /**
     * Menampilan data seluruh pelanggan lama agar dapat di perbaiki kelengkapan data di kelompokan berdasarkan 
     * Kecamatan 
     */

    public function listPelangganLama()
    {

        $this->db->select('
        pelanggan.IdPelanggan as idpelanggan,
        pelanggan.NamaPelanggan as namapelanggan,
        pelanggan.TempatLahir as tempatlahir,
        pelanggan.TanggalLahir as tanggallahir,
        pelanggan.Kelamin as kelamin,
        pelanggan.Agama as agama,
        pelanggan.Pekerjaan as pekerjaan,
        pelanggan.Alamat as alamat,
        pelanggan.Jalan as jalan,
        pelanggan.NoRumah as norumah,
        pelanggan.RT as rt,
        pelanggan.RW as rw,
        pelanggan.Telp as telp,
        pelanggan.HP as hp,
        pelanggan.Identitas as typeidentitas,
        pelanggan.NoIdentitas as noidentitas,
        pelanggan.Provinsi as prov,
        pelanggan.Kabupaten as kab,
        pelanggan.Kecamatan as kec,
        pelanggan.Desa as desa,
        pelanggan.Cabang as cabang,
        pelanggan.KelompokGolongan as kelompokgolongan,
        pelanggan.GolonganPelanggan as golpelanggan,
        pelanggan.MerekMeter as merekmeter,
        pelanggan.NoPabrik as nopabrik,
        pelanggan.Digit as digit,
        pelanggan.UkuranMeter as ukuranmeter,
        pelanggan.TanggalRegistrasi as tglregistrasi,
        pelanggan.TanggalPakai as tglpakai,
        pelanggan.Status as statuspelanggan,
        pelanggan.FotoNamePelanggan as foto,
        pelanggan.perbaikan as perbaikan
        ');


        $this->db->order_by('NoRegister', 'ASC');
        // $this->db->where('Desa', $desa);
        $r = $this->db->get('pelanggan')->result_array();
        return $r;
    }
}
                        
/* End of file Pelanggan_model.php */
