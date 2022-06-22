<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Model_penduduk extends CI_Model
{

	public function all()
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
		x.nama AS sex, sd.nama AS pendidikan_sedang, n.nama AS pendidikan, p.nama AS pekerjaan, g.nama AS agama, m.nama AS gol_darah, hub.nama AS hubungan, b.no_kk AS no_rtm, b.id AS id_rtm
	";

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
	WHERE 1 ";
		//Main Query

		$sql = $select_sql . " " . $from_tabel;

		//Ordering SQL
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function list_cacat()
	{
		$sql   = "SELECT * FROM tb_cacat WHERE 1";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
	}

	public function list_golongan_darah()
	{
		$sql = "SELECT * FROM tb_golongan_darah WHERE 1";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
	}

	public function list_status_kawin()
	{
		$sql = "SELECT * FROM tb_penduduk_kawin WHERE 1";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
	}
	public function countpenduduk()
	{
		$query = $this->db->query('SELECT * FROM tb_penduduk');

		return $query->num_rows();
	}
	public function countkeluarga()
	{
		$query = $this->db->query('SELECT * FROM tb_keluarga');

		return $query->num_rows();
	}

	public function list_hubungan($status_kawin_kk = NULL)
	{
		if (empty($status_kawin_kk)) {
			$where = "1";
		} else {
			/***
				Untuk Kepala Keluarga yang belum kawin, hubungan berikut tidak berlaku:
					menantu, cucu, mertua, suami, istri
				Untuk semua Kepala Keluarga, hubungan 'kepala keluarga' tidak berlaku
			 ***/

			$where = ($status_kawin_kk == 1) ? "id NOT IN ('1','2','3','4','5','6','8') " : "id <> 1";
		}
		$sql = "SELECT * FROM tb_penduduk_hubungan WHERE $where";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
	}

	public function list_warganegara()
	{
		$sql = "SELECT * FROM tb_penduduk_warganegara WHERE 1";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
	}

	public function list_dokumen($id = "")
	{
		$sql = "SELECT * FROM tb_dokumen WHERE id_pend = ? ";
		$query = $this->db->query($sql, $id);
		$data = null;
		if ($query)
			$data = $query->result_array();

		for ($i = 0; $i < count($data); $i++) {
			$data[$i]['no'] = $i + 1;
		}
		return $data;
	}
	protected function status_ktp_sql()
	{
		// Filter berdasarkan data eKTP
		$wajib_ktp_sql = " AND ((DATE_FORMAT( FROM_DAYS( TO_DAYS( NOW( ) ) - TO_DAYS( tanggallahir ) ) , '%Y' ) +0)>=17 OR (status_kawin IS NOT NULL AND status_kawin <> 1)) ";
		if (isset($_SESSION['status_ktp'])) {
			$kf = $_SESSION['status_ktp'];
			if ($kf == BELUM_MENGISI)
				$sql = $wajib_ktp_sql . " AND (u.status_rekam IS NULL OR u.status_rekam = '')";
			else {
				if ($kf <> 0) {
					$status_ktp = $this->db->where('id', $kf)->get('tb_status_ktp')->row_array();
					$status_rekam = $status_ktp['status_rekam'];
					$sql = $wajib_ktp_sql . " AND u.status_rekam = $status_rekam";
				} else {
					// TOTAL hanya yang wajib KTP
					$sql = $wajib_ktp_sql;
				}
			}
			return $sql;
		}
	}
	public function get_penduduk($id)
	{
		$sql = "SELECT u.sex as id_sex, u.*, a.dusun, a.rw, a.rt, t.nama AS status, o.nama AS pendidikan_saat, m.nama as golongan_darah, h.nama as hubungan, u.nik, u.nama, u.status_dasar as status_dasar_id, 
			b.nama AS pendidikan_kk, d.no_kk AS no_kk, d.alamat,
			(CASE when u.status_kawin <> 2
				then k.nama
				else
					case when u.akta_perkawinan = ''
						then 'KAWIN TIDAK TERCATAT'
						else 'KAWIN TERCATAT'
					end
				end) as kawin,
			(SELECT DATE_FORMAT(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(`tanggallahir`)), '%Y')+0  FROM tb_penduduk WHERE id = u.id)
			 AS umur, x.nama AS sex, w.nama AS warganegara,
			 p.nama AS pekerjaan, g.nama AS agama, c.nama as cacat,
			 kb.nama as cara_kb, sm.nama as sakit_menahun,
			 sd.nama as status_dasar, u.status_dasar as status_dasar_id, 
			(select tb_penduduk.nama AS nama from tb_penduduk where (tb_penduduk.id = d.nik_kepala)) AS kepala_kk,
			log.no_kk as log_no_kk
		 FROM tb_penduduk u
			LEFT JOIN tb_keluarga d ON u.id_kk = d.id
			LEFT JOIN tb_wil_clusterdesa a ON d.id_cluster = a.id
			LEFT JOIN tb_penduduk_pendidikan o ON u.pendidikan_sedang_id = o.id
			LEFT JOIN tb_penduduk_pendidikan_kk b ON u.pendidikan_kk_id = b.id
			LEFT JOIN tb_penduduk_warganegara w ON u.warganegara_id = w.id
			LEFT JOIN tb_penduduk_status t ON u.status = t.id
			LEFT JOIN tb_penduduk_pekerjaan p ON u.pekerjaan_id = p.id
			LEFT JOIN tb_penduduk_kawin k ON u.status_kawin = k.id
			LEFT JOIN tb_penduduk_sex x ON u.sex = x.id
			LEFT JOIN tb_penduduk_agama g ON u.agama_id = g.id
			LEFT JOIN tb_golongan_darah m ON u.golongan_darah_id = m.id
			LEFT JOIN tb_penduduk_hubungan h on u.kk_level = h.id
			LEFT JOIN tb_cacat c ON u.cacat_id = c.id
			LEFT JOIN tb_sakit_menahun sm ON u.sakit_menahun_id = sm.id
			LEFT JOIN tb_cara_kb kb ON u.cara_kb_id = kb.id
			LEFT JOIN tb_status_dasar sd ON u.status_dasar = sd.id
			LEFT JOIN log_penduduk log ON u.id = log.id_pend
			WHERE u.id=$id";

		$q = $this->db->query($sql);
		return $q->result_array();
	}

	public function list_agama()
	{
		$sql = "SELECT * FROM tb_penduduk_agama WHERE 1";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
	}

	public function list_pendidikan_sedang()
	{
		$sql = "SELECT * FROM tb_penduduk_pendidikan WHERE left(nama, 5) <> 'TAMAT' ";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
	}

	public function list_pekerjaan($case = '')
	{
		$sql = "SELECT * FROM tb_penduduk_pekerjaan WHERE 1";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		if ($case == 'ucwords') {
			for ($i = 0; $i < count($data); $i++) {
				$data[$i]['nama'] = $this->normalkanPekerjaan($data[$i]['nama']);
			}
		}
		return $data;
	}

	public function list_pendidikan_kk()
	{
		$sql = "SELECT * FROM tb_penduduk_pendidikan_kk WHERE 1";
		$query = $this->db->query($sql);
		$data = $query->result_array();
		return $data;
	}

	public function tampilperangkat_id($id_kategori)
	{
		$sql = "SELECT * FROM tb_pengguna as a, tb_kategori_pengguna as b WHERE a.id_kategori = b.id AND a.id_kategori = $id_kategori";
		return $this->db->query($sql)->result_array();
	}
	public function listpenduduk()
	{
		$this->db->select('nik,nama,id_kk');
		$this->db->order_by('nama', 'ASC');
		return $this->db->get('tb_penduduk')->result_array();
	}
	public function getPenduduk_id($id)
	{
		return $this->db->get_where('tb_penduduk', $id)->result_array();
	}
	public function ada($id)
	{
		$q = $this->db->get_where('tb_penduduk', $id);
		$row = $q->num_rows();

		return $row > 0;
	}
	public function update($id, $dt)
	{
		$this->db->update("tb_penduduk", $dt, $id);
	}

	public function get($id)
	{
		$q = $this->db->get_where('tb_penduduk', $id);
		$row = $q->num_rows();

		if ($row > 0) {
			return $q->row();
		} else {
			return null;
		}
	}


	public function insert($id, $dt)
	{
		$this->db->insert("tb_penduduk", $dt, $id);
	}

	public function delete($id)
	{
		$this->db->delete("tb_penduduk", $id);
	}
}
