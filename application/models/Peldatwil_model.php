<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peldatwil_model extends CI_Model
{
    public function datawilayah()
    {
        $sql = "SELECT u.*, a.nama AS nama_kadus, a.nik AS nik_kadus,
		(SELECT COUNT(rw.id) FROM tb_wil_clusterdesa rw WHERE dusun = u.dusun AND rw <> '-' AND rt = '-') AS jumlah_rw,
		(SELECT COUNT(v.id) FROM tb_wil_clusterdesa v WHERE dusun = u.dusun AND v.rt <> '0' AND v.rt <> '-') AS jumlah_rt,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = u.dusun) and status_dasar=1) AS jumlah_warga,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = u.dusun) AND p.sex = 1 and status_dasar=1) AS jumlah_warga_l,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = u.dusun) AND p.sex = 2 and status_dasar=1) AS jumlah_warga_p,
        (SELECT COUNT(p.id) FROM tb_keluarga k inner join tb_penduduk p ON k.nik_kepala = p.id  WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = u.dusun) AND p.kk_level = 1 and status_dasar=1) AS jumlah_kk  FROM tb_wil_clusterdesa u LEFT JOIN tb_penduduk a ON u.id_kepala = a.id WHERE u.rt = '0' AND u.rw = '0'";

        $query = $this->db->query($sql);
        $data = $query->result_array();
        return $data;
    }
    public function datawilayah_rw($id = '')
    {
        $temp = $this->datawilayah_id($id);
        $dusun = $temp['dusun'];

        $sql = "SELECT u.*, a.nama AS nama_ketua, a.nik AS nik_ketua,
		(SELECT COUNT(rt.id) FROM tb_wil_clusterdesa rt WHERE dusun = u.dusun AND rw = u.rw AND rt <> '-' AND rt <> '0' ) AS jumlah_rt,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = '$dusun' AND rw = u.rw) AND p.status_dasar=1) AS jumlah_warga,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = '$dusun' AND rw = u.rw) AND p.sex = 1 AND p.status_dasar=1) AS jumlah_warga_l,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = '$dusun' AND rw = u.rw) AND p.sex = 2 AND p.status_dasar=1) AS jumlah_warga_p,
		(SELECT COUNT(p.id) FROM tb_keluarga k inner join tb_penduduk p ON k.nik_kepala=p.id  WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = '$dusun' AND rw = u.rw) AND p.kk_level = 1 AND p.status_dasar=1) AS jumlah_kk
		FROM tb_wil_clusterdesa u LEFT JOIN tb_penduduk a ON u.id_kepala = a.id WHERE u.rt = '0' AND u.rw <> '0' AND u.dusun = '$dusun'";

        $query = $this->db->query($sql);
        $data = $query->result_array();

        //Formating Output
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['no'] = $i + 1;
        }
        return $data;
    }
    public function datawilayah_rt($dusun = '', $rw = '')
    {
        $sql = "SELECT u.*, a.nama AS nama_ketua, a.nik AS nik_ketua,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = '$dusun' AND rw = '$rw' AND rt = u.rt) AND p.status_dasar=1) AS jumlah_warga,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = '$dusun' AND rw = '$rw' AND rt = u.rt) AND p.sex = 1 AND p.status_dasar=1) AS jumlah_warga_l,(
		SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = '$dusun' AND rw = '$rw' AND rt = u.rt) AND p.sex = 2 AND p.status_dasar=1) AS jumlah_warga_p,
		(SELECT COUNT(p.id) FROM tb_keluarga k inner join tb_penduduk p ON k.nik_kepala=p.id  WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE dusun = '$dusun' AND rw = '$rw' AND rt = u.rt) AND p.kk_level = 1) AS jumlah_kk
		FROM tb_wil_clusterdesa u LEFT JOIN tb_penduduk a ON u.id_kepala = a.id WHERE u.rt <> '0' AND u.rw = '$rw' AND u.dusun = '$dusun' AND u.rt <> '-'";

        $query = $this->db->query($sql);
        $data = $query->result_array();
        //Formating Output
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['no'] = $i + 1;
        }
        return $data;
    }
    public function datawilayah_id($id)
    {
        $sql = "SELECT w.*, c.id as id_dusun
			FROM tb_wil_clusterdesa w
			LEFT JOIN tb_wil_clusterdesa c ON w.dusun = c.dusun AND c.rw = 0 AND c.rt = 0
			WHERE w.id = ?";
        $query = $this->db->query($sql, $id);
        return $query->row_array();
    }

    public function get_penduduk($id = 0)
    {
        $sql = "SELECT id,nik,nama FROM tb_penduduk WHERE id = ?";
        $query = $this->db->query($sql, $id);
        $data = $query->row_array();
        return $data;
    }

    public function tambah_dusun($data)
    {

        $this->db->insert('tb_wil_clusterdesa', $data);

        $rw = $data;
        $rw['rw'] = "-";
        $this->db->insert('tb_wil_clusterdesa', $rw);

        $rt = $rw;
        $rt['rt'] = "-";

        $this->db->insert('tb_wil_clusterdesa', $rt);

        return $this->db->affected_rows();
    }
    public function tambah_rw($dusun, $data)
    {

        $temp = $this->datawilayah_id($dusun);
        $data['dusun'] = $temp['dusun'];

        $this->db->insert('tb_wil_clusterdesa', $data);

        $rt = $data;
        $rt['rt'] = "-";
        $this->db->insert('tb_wil_clusterdesa', $rt);

        return $this->db->affected_rows();
    }
    public function tambah_rt($dusun, $rw, $data)
    {

        $temp = $this->datawilayah_id($dusun);
        $data['dusun'] = $temp['dusun'];
        $data['rw'] = $rw;

        $this->db->insert('tb_wil_clusterdesa', $data);

        return $this->db->affected_rows();
    }
    public function list_penduduk()
    {
        $sql = "SELECT id,nik,nama FROM tb_penduduk WHERE status = 1";
        $query = $this->db->query($sql);
        $data = $query->result_array();

        //Formating Output
        for ($i = 0; $i < count($data); $i++) {
            $data[$i]['alamat'] = "Alamat :" . $data[$i]['nama'];
        }
        return $data;
    }
}
