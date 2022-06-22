<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_pengajuan extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('tb_format_surat')->result_array();
    }
    public function tambahpengajuan($data)
    {
        $this->db->insert('tb_pengajuan_surat', $data);

        return $this->db->affected_rows();
    }
    public function updatepengajuan($data, $id)
    {
        $this->db->update('tb_pengajuan_surat', $data, ['id_pengajuan' => $id]);

        return $this->db->affected_rows();
    }
    public function get_id_kk($id)
    {
        $sql = "SELECT *, b.nama as nama_surat,a.status as 'status'
        FROM tb_pengajuan_surat as a, tb_format_surat as b, tb_penduduk as c, tb_keluarga as d, tb_wil_clusterdesa as e
        WHERE b.id = a.id_pengajuan
        AND a.penduduk_id = c.id
        AND c.id_kk = d.id
        AND d.id_cluster = e.id
        AND d.no_kk = '$id'
        
        ORDER BY a.id_pengajuan DESC";

        return $this->db->query($sql)->result_array();
    }
    public function get_id_rt($rt, $rw)
    {
        $sql = "SELECT *, b.nama as nama_surat, a.status as 'status'
        FROM tb_pengajuan_surat as a, tb_format_surat as b, tb_penduduk as c, tb_keluarga as d, tb_wil_clusterdesa as e
        WHERE b.id = a.id_pengajuan
        AND a.penduduk_id = c.id
        AND c.id_kk = d.id
        AND d.id_cluster = e.id
        AND a.rt = '$rt'
        AND a.rw = '$rw'
        
        ORDER BY a.id_pengajuan DESC";

        return $this->db->query($sql)->result_array();
    }
    public function get_id_rw($rw)
    {
        $sql = "SELECT *, b.nama as nama_surat, a.status as 'status'
        FROM tb_pengajuan_surat as a, tb_format_surat as b, tb_penduduk as c, tb_keluarga as d, tb_wil_clusterdesa as e
        WHERE b.id = a.id_pengajuan
        AND a.penduduk_id = c.id
        AND c.id_kk = d.id
        AND d.id_cluster = e.id
        AND a.rw = '$rw'
        
        ORDER BY a.id_pengajuan DESC";

        return $this->db->query($sql)->result_array();
    }
    public function get_id_desa()
    {
        $sql = "SELECT *, b.nama as nama_surat, a.status as 'status'
        FROM tb_pengajuan_surat as a, tb_format_surat as b, tb_penduduk as c, tb_keluarga as d, tb_wil_clusterdesa as e
        WHERE b.id = a.id_pengajuan
        AND a.penduduk_id = c.id
        AND c.id_kk = d.id
        AND d.id_cluster = e.id
        
        ORDER BY a.id_pengajuan DESC";

        return $this->db->query($sql)->result_array();
    }
    public function get_form_id($id)
    {
        $sql = "SELECT *, b.nama as nama_surat, a.status as 'status'
        FROM tb_pengajuan_surat as a, tb_format_surat as b, tb_penduduk as c, tb_keluarga as d, tb_wil_clusterdesa as e
        WHERE b.id = a.id_pengajuan
        AND a.penduduk_id = c.id
        AND c.id_kk = d.id
        AND d.id_cluster = e.id
        AND a.id_pengajuan = '$id'
        
        ORDER BY a.id_pengajuan DESC";

        return $this->db->query($sql)->result_array();
    }

    public function list_format_surat()
    {
        //Main Query
        $sql = "SELECT * FROM tb_format_surat WHERE jenis = 1 ";

        $query = $this->db->query($sql);
        $data = $query->result_array();

        return $data;
    }
}
