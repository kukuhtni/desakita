<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_login extends CI_Model
{

	public function cekAdmin($username, $password)
	{
		$nama_user = $this->db->escape($username);
		$password = $this->db->escape($password);

		$result = $this->db->query("SELECT * FROM tb_user WHERE nama_user = $nama_user AND password = $password");

		if ($result->num_rows() == 0) {
			return false;
		} else {
			$result = $result->row();
			$this->session->set_userdata('logged_in', $result);
			return true;
		}
	}
	public function cekLogin($username, $password)
	{
		$no_kk = $this->db->escape($username);
		$password = $this->db->escape($password);

		$sql = "SELECT a.password, d.nama as nama, c.nama_kategori as 'role', d.foto, b.no_kk
		FROM tb_pengguna as a, tb_keluarga as b, tb_kategori_pengguna as c, tb_penduduk as d
		WHERE a.id_kk = b.id 
		AND b.no_kk = $no_kk 
		AND a.password = $password
		AND c.id = a.id_kategori
		AND b.nik_kepala = d.id";
		$result = $this->db->query($sql);

		if ($result->num_rows() == 0) {
			return false;
		} else {
			$result = $result->row();
			$this->session->set_userdata('logged_in', $result);
			return true;
		}
	}
	public function cekLoginAparatur($username, $password)
	{
		$no_kk = $this->db->escape($username);
		$password = $this->db->escape($password);

		$sql = "SELECT a.password, d.nama as nama, c.nama_kategori as 'role', d.foto, b.no_kk, d.nik
		FROM tb_pengguna as a, tb_kategori_pengguna as c,  tb_penduduk d LEFT JOIN tb_keluarga as b ON b.id = d.id_kk
		WHERE a.id_kk = d.nik 
		AND b.no_kk = $no_kk 
		AND a.password = $password
		AND c.id = a.id_kategori";
		$result = $this->db->query($sql);

		if ($result->num_rows() == 0) {
			return false;
		} else {
			$result = $result->row();
			$this->session->set_userdata('logged_in', $result);
			return true;
		}
	}
}
