$(document).ready(function () {
	$('#tabel-pengguna').DataTable();
	$('#tabel-artikel').DataTable();
	$('#tabelpenduduk').DataTable();
	$('#tabel-pengajuan').DataTable();

	$('#gantiprovinsi').select2({
		placeholder: "Pilih Provinsi",
		allowClear: true,
		theme: 'bootstrap'
	});
	$('#nikaparat').select2({
		placeholder: "Cari NIK/Nama Penduduk",
		allowClear: true,
		theme: 'bootstrap'
	});
	$('#nikpengguna').select2({
		placeholder: "Cari NIK/Nama Penduduk",
		allowClear: true,
		width: '100%',
		theme: 'bootstrap',
		dropdownParent: $("#ModalPenggunaTambah")
	});
	$('#listartikel').select2({
		placeholder: "List Judul Artikel",
		allowClear: true,
		width: '100%',
		theme: 'bootstrap',
		dropdownParent: $("#ModalSettingHeadline")
	});

	const flashData = $('.flash-data').data('flashdata');

	if (flashData == 'berhasil') {
		Swal.fire({
			title: 'Sukses',
			text: 'Data Berhasil disimpan',
			type: 'success'
		});
	} else if (flashData == 'gagal') {
		Swal.fire({
			title: 'Gagal',
			text: 'Data Gagal disimpan',
			type: 'error'
		});
	} else if (flashData == 'rubah') {
		Swal.fire({
			title: 'Sukses',
			text: 'Data Berhasil dirubah',
			type: 'success'
		});
	} else if (flashData == 'delete') {
		Swal.fire({
			title: 'Sukses',
			text: 'Data Berhasil dihapus',
			type: 'success'
		});
	} else if (flashData == 'eror') {
		Swal.fire({
			title: 'Gagal',
			text: 'Maaf, Anda tidak bisa melakukan perintah ini.',
			type: 'error'
		});
	} else if (flashData == 'konfirmasi') {
		Swal.fire({
			title: 'Sukses',
			text: 'Anda telah menyetujui pengajuan pemohon.',
			type: 'success'
		});
	}
	$(document).on('click', '.btn_struktur_cek', function () {
		var id = $("#struktur_form_cek").serialize();
		console.log(id);
		$.ajax({
			url: "http://momomimo.id/desakita/admin/struktur/getPenduduk",
			type: "GET",
			data: $("#struktur_form_cek").serialize(),
			dataType: "JSON",
			success: function (data) {
				console.log(data['getpenduduk'][0]);
				$.each(data['getpenduduk'], function (i, field) {
					var nik = field.nik;
					var nama = field.nama;
					var tempatl = field.tempatlahir;
					var tgll = field.tanggallahir;
					$('[id="nike"]').val(nik);
					$('[id="namae"]').val(nama);
					$('[id="tempatle"]').val(tempatl);
					$('[id="tglle"]').val(tgll);
				});
			},
			error: function (xhr, Status, err) {
				$("Data Kurang Lengkap : " + Status);
			}
		});
		return false;
	});
});

function newFunction() {
	return !important;
}
