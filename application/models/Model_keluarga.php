<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Model_keluarga extends CI_Model
{

	public function all()
	{
		$sql = "SELECT k.id,k.no_kk,p.nama,p.nik, (x.nama) as jenis_kelamin, p.alamat_sekarang, c.dusun, c.rw, c.rt,(SELECT COUNT(id) FROM tb_penduduk WHERE id_kk = k.id) as jumlah_anggota FROM tb_keluarga as k, tb_penduduk as p, tb_penduduk_sex as x, tb_wil_clusterdesa as c WHERE p.id = k.nik_kepala AND p.sex = x.id AND p.id_cluster = c.id";
		$q = $this->db->query($sql);
		return $q->result();
	}
	public function all_by_kk($nokk)
	{
		$select_sql = "SELECT DISTINCT u.id, u.nik, u.tanggallahir, u.tempatlahir, u.status, u.status_dasar, u.id_kk, u.nama, u.nama_ayah, u.nama_ibu, a.dusun, a.rw, a.rt, d.alamat, d.no_kk AS no_kk, u.foto,a.rt,a.rw,
		(CASE when u.status_kawin <> 2
			then k.nama
			else
				case when u.akta_perkawinan = ''
					then 'KAWIN TIDAK TERCATAT'
					else 'KAWIN TERCATAT'
				end
			end) as kawin,
		(SELECT DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(`tanggallahir`)), '%Y')+0 FROM tb_penduduk WHERE id = u.id) AS umur, 
		x.nama AS sex, sd.nama AS pendidikan_sedang, n.nama AS pendidikan, p.nama AS pekerjaan, g.nama AS agama, m.nama AS gol_darah, hub.nama AS hubungan, b.no_kk AS no_rtm, b.id AS id_rtm, v.nama AS kewarganegaraan
	, (SELECT COUNT(id) FROM tb_penduduk WHERE id_kk = d.id) as jumlah_anggota";

		$from_tabel = "
	FROM tb_penduduk u
	LEFT JOIN tb_keluarga d ON u.id_kk = d.id
	LEFT JOIN tb_rtm b ON u.id_rtm = b.id
	LEFT JOIN tb_wil_clusterdesa a ON d.id_cluster = a.id
	LEFT JOIN tb_penduduk_pendidikan_kk n ON u.pendidikan_kk_id = n.id
	LEFT JOIN tb_penduduk_pendidikan sd ON u.pendidikan_sedang_id = sd.id
	LEFT JOIN tb_penduduk_pekerjaan p ON u.pekerjaan_id = p.id
	LEFT JOIN tb_penduduk_kawin k ON u.status_kawin = k.id
	LEFT JOIN tb_penduduk_sex x ON u.sex = x.id
	LEFT JOIN tb_penduduk_agama g ON u.agama_id = g.id
	LEFT JOIN tb_penduduk_warganegara v ON u.warganegara_id = v.id
	LEFT JOIN tb_golongan_darah m ON u.golongan_darah_id = m.id
	LEFT JOIN tb_cacat f ON u.cacat_id = f.id
	LEFT JOIN tb_penduduk_hubungan hub ON u.kk_level = hub.id
	WHERE d.no_kk = $nokk";
		//Main Query

		$sql = $select_sql . " " . $from_tabel;

		//Ordering SQL
		$q = $this->db->query($sql);
		return $q->result_array();
	}

	public function kk_by_id($id)
	{
		$select_sql = "SELECT DISTINCT u.id, u.nik, u.tanggallahir, u.tempatlahir, u.status, u.status_dasar, u.id_kk, u.nama, u.nama_ayah, u.nama_ibu, a.dusun, a.rw, a.rt, d.alamat, d.no_kk AS no_kk, u.foto,
		(CASE when u.status_kawin <> 2
			then k.nama
			else
				case when u.akta_perkawinan = ''
					then 'KAWIN TIDAK TERCATAT'
					else 'KAWIN TERCATAT'
				end
			end) as kawin,
		(SELECT DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(`tanggallahir`)), '%Y')+0 FROM tb_penduduk WHERE id = u.id) AS umur, 
		x.nama AS sex, sd.nama AS pendidikan_sedang, n.nama AS pendidikan, p.nama AS pekerjaan, g.nama AS agama, m.nama AS gol_darah, hub.nama AS hubungan, b.no_kk AS no_rtm, b.id AS id_rtm, v.nama AS kewarganegaraan
	, (SELECT COUNT(id) FROM tb_penduduk WHERE id_kk = d.id) as jumlah_anggota";

		$from_tabel = "
	FROM tb_penduduk u
	LEFT JOIN tb_keluarga d ON u.id_kk = d.id
	LEFT JOIN tb_rtm b ON u.id_rtm = b.id
	LEFT JOIN tb_wil_clusterdesa a ON d.id_cluster = a.id
	LEFT JOIN tb_penduduk_pendidikan_kk n ON u.pendidikan_kk_id = n.id
	LEFT JOIN tb_penduduk_pendidikan sd ON u.pendidikan_sedang_id = sd.id
	LEFT JOIN tb_penduduk_pekerjaan p ON u.pekerjaan_id = p.id
	LEFT JOIN tb_penduduk_kawin k ON u.status_kawin = k.id
	LEFT JOIN tb_penduduk_sex x ON u.sex = x.id
	LEFT JOIN tb_penduduk_agama g ON u.agama_id = g.id
	LEFT JOIN tb_penduduk_warganegara v ON u.warganegara_id = v.id
	LEFT JOIN tb_golongan_darah m ON u.golongan_darah_id = m.id
	LEFT JOIN tb_cacat f ON u.cacat_id = f.id
	LEFT JOIN tb_penduduk_hubungan hub ON u.kk_level = hub.id
	WHERE d.id = $id";
		//Main Query

		$sql = $select_sql . " " . $from_tabel;

		//Ordering SQL
		$q = $this->db->query($sql);
		return $q->result_array();
	}
	public function kepala_kk_id($id)
	{
		$select_sql = "SELECT DISTINCT u.id, u.nik, u.tanggallahir, u.tempatlahir, u.status, u.status_dasar, u.id_kk, u.nama, u.nama_ayah, u.nama_ibu, a.dusun, a.rw, a.rt, d.alamat, d.no_kk AS no_kk, u.foto,
		(CASE when u.status_kawin <> 2
			then k.nama
			else
				case when u.akta_perkawinan = ''
					then 'KAWIN TIDAK TERCATAT'
					else 'KAWIN TERCATAT'
				end
			end) as kawin,
		(SELECT DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(`tanggallahir`)), '%Y')+0 FROM tb_penduduk WHERE id = u.id) AS umur, 
		x.nama AS sex, sd.nama AS pendidikan_sedang, n.nama AS pendidikan, p.nama AS pekerjaan, g.nama AS agama, m.nama AS gol_darah, hub.nama AS hubungan, b.no_kk AS no_rtm, b.id AS id_rtm, v.nama AS kewarganegaraan
	, (SELECT COUNT(id) FROM tb_penduduk WHERE id_kk = d.id) as jumlah_anggota";

		$from_tabel = "
	FROM tb_penduduk u
	LEFT JOIN tb_keluarga d ON u.id_kk = d.id
	LEFT JOIN tb_rtm b ON u.id_rtm = b.id
	LEFT JOIN tb_wil_clusterdesa a ON d.id_cluster = a.id
	LEFT JOIN tb_penduduk_pendidikan_kk n ON u.pendidikan_kk_id = n.id
	LEFT JOIN tb_penduduk_pendidikan sd ON u.pendidikan_sedang_id = sd.id
	LEFT JOIN tb_penduduk_pekerjaan p ON u.pekerjaan_id = p.id
	LEFT JOIN tb_penduduk_kawin k ON u.status_kawin = k.id
	LEFT JOIN tb_penduduk_sex x ON u.sex = x.id
	LEFT JOIN tb_penduduk_agama g ON u.agama_id = g.id
	LEFT JOIN tb_penduduk_warganegara v ON u.warganegara_id = v.id
	LEFT JOIN tb_golongan_darah m ON u.golongan_darah_id = m.id
	LEFT JOIN tb_cacat f ON u.cacat_id = f.id
	LEFT JOIN tb_penduduk_hubungan hub ON u.kk_level = hub.id
	WHERE u.nik = $id";
		//Main Query

		$sql = $select_sql . " " . $from_tabel;

		//Ordering SQL
		$q = $this->db->query($sql);
		return $q->result_array();
	}
	public function penduduk_id($id)
	{
		$select_sql = "SELECT DISTINCT u.id, u.nik, u.tanggallahir, u.tempatlahir, u.status, u.status_dasar, u.id_kk, u.nama, u.nama_ayah, u.nama_ibu, a.dusun, a.rw, a.rt, d.alamat, d.no_kk AS no_kk, u.foto,
		(CASE when u.status_kawin <> 2
			then k.nama
			else
				case when u.akta_perkawinan = ''
					then 'KAWIN TIDAK TERCATAT'
					else 'KAWIN TERCATAT'
				end
			end) as kawin,
		(SELECT DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(`tanggallahir`)), '%Y')+0 FROM tb_penduduk WHERE id = u.id) AS umur, 
		x.nama AS sex, sd.nama AS pendidikan_sedang, n.nama AS pendidikan, p.nama AS pekerjaan, g.nama AS agama, m.nama AS gol_darah, hub.nama AS hubungan, b.no_kk AS no_rtm, b.id AS id_rtm, v.nama AS kewarganegaraan
	, (SELECT COUNT(id) FROM tb_penduduk WHERE id_kk = d.id) as jumlah_anggota";

		$from_tabel = "
	FROM tb_penduduk u
	LEFT JOIN tb_keluarga d ON u.id_kk = d.id
	LEFT JOIN tb_rtm b ON u.id_rtm = b.id
	LEFT JOIN tb_wil_clusterdesa a ON d.id_cluster = a.id
	LEFT JOIN tb_penduduk_pendidikan_kk n ON u.pendidikan_kk_id = n.id
	LEFT JOIN tb_penduduk_pendidikan sd ON u.pendidikan_sedang_id = sd.id
	LEFT JOIN tb_penduduk_pekerjaan p ON u.pekerjaan_id = p.id
	LEFT JOIN tb_penduduk_kawin k ON u.status_kawin = k.id
	LEFT JOIN tb_penduduk_sex x ON u.sex = x.id
	LEFT JOIN tb_penduduk_agama g ON u.agama_id = g.id
	LEFT JOIN tb_penduduk_warganegara v ON u.warganegara_id = v.id
	LEFT JOIN tb_golongan_darah m ON u.golongan_darah_id = m.id
	LEFT JOIN tb_cacat f ON u.cacat_id = f.id
	LEFT JOIN tb_penduduk_hubungan hub ON u.kk_level = hub.id
	WHERE u.id = $id";
		//Main Query

		$sql = $select_sql . " " . $from_tabel;

		//Ordering SQL
		$q = $this->db->query($sql);
		return $q->result_array();
	}
	public function cetak_by_id($id)
	{
		$select_sql = "SELECT DISTINCT u.id, u.nik, u.tanggallahir, u.tempatlahir, u.status, u.status_dasar, u.id_kk, u.nama, u.nama_ayah, u.nama_ibu, a.dusun, a.rw, a.rt, d.alamat, d.no_kk AS no_kk, u.foto,
		(CASE when u.status_kawin <> 2
			then k.nama
			else
				case when u.akta_perkawinan = ''
					then 'KAWIN TIDAK TERCATAT'
					else 'KAWIN TERCATAT'
				end
			end) as kawin,
		(SELECT DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(`tanggallahir`)), '%Y')+0 FROM tb_penduduk WHERE id = u.id) AS umur, 
		x.nama AS sex, sd.nama AS pendidikan_sedang, n.nama AS pendidikan, p.nama AS pekerjaan, g.nama AS agama, m.nama AS gol_darah, hub.nama AS hubungan, b.no_kk AS no_rtm, b.id AS id_rtm, v.nama AS kewarganegaraan
	, (SELECT COUNT(id) FROM tb_penduduk WHERE id_kk = d.id) as jumlah_anggota";

		$from_tabel = "
	FROM tb_penduduk u
	LEFT JOIN tb_keluarga d ON u.id_kk = d.id
	LEFT JOIN tb_rtm b ON u.id_rtm = b.id
	LEFT JOIN tb_wil_clusterdesa a ON d.id_cluster = a.id
	LEFT JOIN tb_penduduk_pendidikan_kk n ON u.pendidikan_kk_id = n.id
	LEFT JOIN tb_penduduk_pendidikan sd ON u.pendidikan_sedang_id = sd.id
	LEFT JOIN tb_penduduk_pekerjaan p ON u.pekerjaan_id = p.id
	LEFT JOIN tb_penduduk_kawin k ON u.status_kawin = k.id
	LEFT JOIN tb_penduduk_sex x ON u.sex = x.id
	LEFT JOIN tb_penduduk_agama g ON u.agama_id = g.id
	LEFT JOIN tb_penduduk_warganegara v ON u.warganegara_id = v.id
	LEFT JOIN tb_golongan_darah m ON u.golongan_darah_id = m.id
	LEFT JOIN tb_cacat f ON u.cacat_id = f.id
	LEFT JOIN tb_penduduk_hubungan hub ON u.kk_level = hub.id
	WHERE d.id = $id";
		//Main Query

		$sql = $select_sql . " " . $from_tabel;

		//Ordering SQL
		$q = $this->db->query($sql);
		return $q->result_array();
	}

	public function tambah($data)
	{
		$select_sql = "SELECT DISTINCT u.id, u.nik, u.tanggallahir, u.tempatlahir, u.status, u.status_dasar, u.id_kk, u.nama, u.nama_ayah, u.nama_ibu, a.dusun, a.rw, a.rt, d.alamat, d.no_kk AS no_kk, u.foto,
		(CASE when u.status_kawin <> 2
			then k.nama
			else
				case when u.akta_perkawinan = ''
					then 'KAWIN TIDAK TERCATAT'
					else 'KAWIN TERCATAT'
				end
			end) as kawin,
		(SELECT DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(`tanggallahir`)), '%Y')+0 FROM tb_penduduk WHERE id = u.id) AS umur, 
		x.nama AS sex, sd.nama AS pendidikan_sedang, n.nama AS pendidikan, p.nama AS pekerjaan, g.nama AS agama, m.nama AS gol_darah, hub.nama AS hubungan, b.no_kk AS no_rtm, b.id AS id_rtm, v.nama AS kewarganegaraan
	, (SELECT COUNT(id) FROM tb_penduduk WHERE id_kk = d.id) as jumlah_anggota";

		$from_tabel = "
	FROM tb_penduduk u
	LEFT JOIN tb_keluarga d ON u.id_kk = d.id
	LEFT JOIN tb_rtm b ON u.id_rtm = b.id
	LEFT JOIN tb_wil_clusterdesa a ON d.id_cluster = a.id
	LEFT JOIN tb_penduduk_pendidikan_kk n ON u.pendidikan_kk_id = n.id
	LEFT JOIN tb_penduduk_pendidikan sd ON u.pendidikan_sedang_id = sd.id
	LEFT JOIN tb_penduduk_pekerjaan p ON u.pekerjaan_id = p.id
	LEFT JOIN tb_penduduk_kawin k ON u.status_kawin = k.id
	LEFT JOIN tb_penduduk_sex x ON u.sex = x.id
	LEFT JOIN tb_penduduk_agama g ON u.agama_id = g.id
	LEFT JOIN tb_penduduk_warganegara v ON u.warganegara_id = v.id
	LEFT JOIN tb_golongan_darah m ON u.golongan_darah_id = m.id
	LEFT JOIN tb_cacat f ON u.cacat_id = f.id
	LEFT JOIN tb_penduduk_hubungan hub ON u.kk_level = hub.id
	WHERE d.id = $data";
		//Main Query

		$sql = $select_sql . " " . $from_tabel;

		//Ordering SQL
		$q = $this->db->query($sql);
		return $q->result_array();
	}

	public function listkeluarga()
	{
		$sql = "SELECT k.id, k.no_kk as kk, p.nama FROM tb_keluarga as k, tb_penduduk as p WHERE p.id = k.nik_kepala";
		return $this->db->query($sql)->result_array();
	}
	public function ada($id)
	{
		$q = $this->db->get_where('tb_keluarga', $id);
		$row = $q->num_rows();

		return $row > 0;
	}
	public function update($id, $dt)
	{
		$this->db->update("tb_keluarga", $dt, $id);
	}

	public function get($id)
	{
		$q = $this->db->get_where('tb_keluarga', $id);
		$row = $q->num_rows();

		if ($row > 0) {
			return $q->row();
		} else {
			return null;
		}
	}
	public function listrw()
	{

		$sql = "SELECT u.*, a.nama AS nama_ketua, a.nik AS nik_ketua,
		(SELECT COUNT(rt.id) FROM tb_wil_clusterdesa rt WHERE dusun = u.dusun AND rw = u.rw AND rt <> '-' AND rt <> '0' ) AS jumlah_rt,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE rw = u.rw) AND p.status_dasar=1) AS jumlah_warga,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE rw = u.rw) AND p.sex = 1 AND p.status_dasar=1) AS jumlah_warga_l,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE rw = u.rw) AND p.sex = 2 AND p.status_dasar=1) AS jumlah_warga_p,
		(SELECT COUNT(p.id) FROM tb_keluarga k inner join tb_penduduk p ON k.nik_kepala=p.id  WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE rw = u.rw) AND p.kk_level = 1 AND p.status_dasar=1) AS jumlah_kk
		FROM tb_wil_clusterdesa u LEFT JOIN tb_penduduk a ON u.id_kepala = a.id WHERE u.rt = '0' AND u.rw <> '0'";

		$query = $this->db->query($sql);
		$data = $query->result_array();

		//Formating Output
		for ($i = 0; $i < count($data); $i++) {
			$data[$i]['no'] = $i + 1;
		}
		return $data;
	}
	public function listrt()
	{

		$sql = "SELECT u.*, a.nama AS nama_ketua, a.nik AS nik_ketua, u.rt,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE rt = u.rt) AND p.status_dasar=1) AS jumlah_warga,
		(SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE rt = u.rt) AND p.sex = 1 AND p.status_dasar=1) AS jumlah_warga_l,(
		SELECT COUNT(p.id) FROM tb_penduduk p WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE rt = u.rt) AND p.sex = 2 AND p.status_dasar=1) AS jumlah_warga_p,
		(SELECT COUNT(p.id) FROM tb_keluarga k inner join tb_penduduk p ON k.nik_kepala=p.id  WHERE p.id_cluster IN(SELECT id FROM tb_wil_clusterdesa WHERE rt = u.rt) AND p.kk_level = 1) AS jumlah_kk
		FROM tb_wil_clusterdesa u LEFT JOIN tb_penduduk a ON u.id_kepala = a.id WHERE u.rt <> '0' AND u.rt <> '-'";

		$query = $this->db->query($sql);
		$data = $query->result_array();
		//Formating Output
		for ($i = 0; $i < count($data); $i++) {
			$data[$i]['no'] = $i + 1;
		}
		return $data;
	}
	public function get_kepala_a($id)
	{
		$sql = "SELECT u.*, c.*, k.no_kk, k.alamat
			FROM tb_penduduk u
			LEFT JOIN tb_keluarga k ON k.id = ?
			LEFT JOIN tb_wil_clusterdesa c ON u.id_cluster = c.id WHERE u.id = (SELECT nik_kepala FROM tb_keluarga WHERE id = ?) ";
		$query = $this->db->query($sql, array($id, $id));
		return $query->row_array();
	}

	public function insert($id, $dt)
	{
		$post = $this->input->post();
		$this->id_kk = uniqid();
		$this->kepala_keluarga = kepala_keluarga();
		$this->nik = nik();
		$this->jml_anggota = jml_anggota();
		$this->jenis_kelamin = jenis_kelamin();
		$this->alamat = alamat();
		$this->dusun = dusun();
		$this->rw = rw();
		$this->rt = rt();
		$this->tgl_terdaftar = tgl_terdaftar();

		$this->db->insert("tb_keluarga", $this);
	}

	public function delete($id)
	{

		$this->db->delete("tb_keluarga", $id);
	}
}
