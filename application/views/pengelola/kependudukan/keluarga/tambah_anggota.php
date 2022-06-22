<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/vendor/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/octopus/assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#simpan").click(function() {
            var id = $('#id_pen').val();
            var no_kk = $('#no_kk').val();
            var string = $('#my-form').serialize();

            if (id_pen.length == 0) {
                alert('Maaf, ID tidak boleh kosong');
                $('id_pen').focus();
                return false;
            }

            if (no_kk.length == 0) {
                alert('Maaf, Nomor kk tidak boleh kosong');
                $('no_kk').focus();
                return false;
            }

            $.ajax({
                type: 'POST',
                url: '<?php echo site_url(); ?>pengelola/bansos/simpan',
                data: string,
                cache: false,
                success: function(data) {
                    alert("Data Sukses Di Disimpan");
                    location.reload();
                }
            });

        });
        $("#tambah").click(function() {
            $('#id_pen').val('');
            $('#no_kk').val('');
            $('#n_kpl_keluarga').val('');

            $('#nama').val('');

            $('#raskin').val('');

            $('#jamkesmas').val('');
            $('#pkh').val('');
            $('#s_ekonomi').val('');


        });
    });

    function editData(id) {

        $.ajax({
            type: 'GET',
            url: '<?php echo site_url(); ?>pengelola/bansos/cari/' + id,
            dataType: "json",
            success: function(data) {

                $('#id_pen').val(data.id_pen);

                $('#no_kk').val(data.no_kk);
                $('#n_kpl_keluarga').val(data.n_kpl_keluarga);

                $('#nama').val(data.nama);

                $('#jamkesmas').val(data.jamkesmas);

                $('#pkh').val(data.pkh);

                $('#s_ekonomi').val(data.s_ekonomi);
                $('$id_pen').attr('readonly', 'true');
            }
        });

    }
</script>

<section role="main" class="content-body">
    <header class="page-header">
        <h2><?php echo $judul; ?></h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="<?php echo base_url(); ?>">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span><?php echo $judul; ?></span></li>
                <?php
				if (!empty($subjudul)) { ?>
                <li><span><?php echo $subjudul; ?></span></li>
                <?php

			}
			?>
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- Start: page -->
    <a href="<?php echo base_url(); ?>pengelola/keluarga" class="mb-xs mt-xs mr-xs  btn btn-info"  title="Kembali Ke Daftar Keluarga">
							<i class="fa fa-arrow-circle-left "></i>Kembali Ke Daftar Keluarga
						</a>
    <?php $this->load->view('pengelola/sub_menu/upload_foto'); ?>
    <div class="col-md-8">
    <section class="panel panel-danger">
        <header class="panel-heading">

        <h2 class="panel-title ">Biodata Anggota Keluarga</h2>
        </header>
        <div class="panel-body">
        <div class='col-sm-4'>
                      <div class='form-group'>
                        <label >No. KK </label>
                        <input class="form-control input-sm" type="text" value="" disabled>
                        <input name="id_kk" type="hidden" value="">
                        <input name="kk_level" type="hidden" value="0">
                        <input name="id_cluster" type="hidden" value="">
                      </div>
                    </div>
                    <div class='col-sm-8'>
                      <div class='form-group'>
                        <label>Kepala KK</label>
                        <input class="form-control input-sm" type="text" value="" disabled>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class='form-group'>
                        <label>Alamat </label>
                        <input class="form-control input-sm" type="text" value="" disabled>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class="form-group subtitle_head">
                        <label class="text-right"><strong>DATA ANGGOTA :</strong></label>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="nik">NIK </label>
                        <input id="nik"  name="nik" class="form-control input-sm required" type="text" placeholder="Nomor NIK" value="">
                        <input name="nik_lama" type="hidden" value=""/>
                      </div>
                    </div>
                    <div class='col-sm-8'>
                      <div class='form-group'>
                        <label for="nama">Nama Lengkap <code> (Tanpa Gelar )</code> </label>
                        <input id="nama" name="nama" class="form-control input-sm required" type="text" placeholder="Nama Lengkap" value="">
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class='form-group'>
                        <label for="nama">Status Kepemilikan KTP</label>
                        <div class="table-responsive">
                          <table id="tabel4" class="table table-bordered table-hover">
                            <thead class="bg-gray disabled color-palette">
                              <tr>
                                <th width='50%'>Wajib KTP</th>
                                <th>KTP Elektrtonik</th>
                                <th>Status Rekam</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td></td>
                                <td>
                                  <select name="ktp_el" class="form-control input-sm">
                                  <option value="">Pilih KTP-EL</option>
                              
                                    <option value=""selected></option>
                             
                                  </select>
                                </td>
                                <td>
                                  <select name="status_rekam" class="form-control input-sm">
                                  <option value="">Pilih Status Rekam</option>
                                  
                                    <option value=""> selected</option>
                        
                                  </select>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="no_kk_sebelumnya">Nomor KK Sebelumnya</label>
                        <input id="no_kk_sebelumnya" name="no_kk_sebelumnya" class="form-control input-sm" type="text" placeholder="No KK Sebelumnya" value="">
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="kk_level">Hubungan Dalam Keluarga</label>
                        <select class="form-control input-sm required" name="kk_level">
                          <option value="">Pilih Hubungan Keluarga</option>
                            <option value=""></option>
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="sex">Jenis Kelamin </label>
                        <select class="form-control input-sm required" name="sex">
                          <option value="">Jenis Kelamin</option>
                          <option value="1" >Laki-Laki</option>
                          <option value="2"  >Perempuan</option>
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-7'>
                      <div class='form-group'>
                        <label for="agama_id">Agama</label>
                        <select class="form-control input-sm required" name="agama_id">
                          <option value="">Pilih Agama</option>
                            <option value="" ></option>
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-5'>
                      <div class='form-group'>
                        <label for="status">Status Penduduk </label>
                        <select class="form-control input-sm required" name="status">
                          <option value="1" >Tetap</option>
                          <option value="2" >Tidak Tetap</option>
                          <option value="3" >Pendatang</option>
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class="form-group subtitle_head">
                        <label class="text-right"><strong>DATA KELAHIRAN :</strong></label>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="akta_lahir">Nomor Akta Kelahiran </label>
                        <input id="akta_lahir" name="akta_lahir" class="form-control input-sm" type="text" placeholder="Nomor Akta Kelahiran" value="">
                      </div>
                    </div>
                    <div class='col-sm-8'>
                      <div class='form-group'>
                        <label for="tempatlahir">Tempat Lahir</label>
                        <input id="tempatlahir" name="tempatlahir" class="form-control input-sm" type="text" placeholder="Tempat Lahir" value="">
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="tanggallahir">Tanggal Lahir</label>
                        <div class="input-group input-group-sm date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input class="form-control input-sm pull-right" id="tgl_1" name="tanggallahir" type="text" value="">
                        </div>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="waktulahir">Waktu Kelahiran </label>
                        <div class="input-group input-group-sm date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input class="form-control input-sm pull-right" id="jammenit_1" name="waktu_lahir" type="text" value="">
                        </div>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="tempat_dilahirkan">Tempat Dilahirkan</label>
                        <select class="form-control input-sm" name="tempat_dilahirkan">
                          <option value="">Pilih Tempat Dilahirkan</option>
                          
                            <option value=""selected></option>
                   
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-12'>
					            <div class='row'>
                        <div class='col-sm-4'>
                          <div class='form-group'>
                            <label for="jenis_kelahiran">Jenis Kelahiran</label>
                            <select class="form-control input-sm" name="jenis_kelahiran">
                              <option value="">Pilih Jenis Kelahiran</option>
                             
                                <option value="" ></option>
                          
                            </select>
                          </div>
                        </div>
                        <div class='col-sm-4'>
                          <div class='form-group'>
                            <label for="kelahiran_anak_ke">Anak Ke <code>Isi dengan angka</code></label>
                            <input id="kelahiran_anak_ke" name="kelahiran_anak_ke" class="form-control input-sm" type="text" placeholder="Anak Ke" value=""></input>
                          </div>
                        </div>
                        <div class='col-sm-4'>
                          <div class='form-group'>
                            <label for="penolong_kelahiran">Penolong Kelahiran</label>
                            <select class="form-control input-sm" name="penolong_kelahiran">
                              <option value="">Pilih Penolong Kelahiran</option>
                             
                                <option value="" ></option>
                          
                            </select>
                          </div>
                        </div>
                      </div>
				            </div>
                    <div class='col-sm-12'>
                      <div class='row'>
                        <div class='col-sm-4'>
                          <div class='form-group'>
                            <label for="berat_lahir">Berat Lahir <code>( Kg )</code></label>
                            <input id="berat_lahir" name="berat_lahir" class="form-control input-sm" type="text" placeholder="Berat Lahir" value=""></input>
                          </div>
                        </div>
                        <div class='col-sm-4'>
                          <div class='form-group'>
                            <label for="panjang_lahir">Panjang Lahir <code>( cm )</code></label>
                            <input id="panjang_lahir" name="panjang_lahir" class="form-control input-sm" type="text" placeholder="Panjang Lahir" value=""></input>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class="form-group subtitle_head">
                        <label class="text-right"><strong>PENDIDIKAN DAN PEKERJAAN :</strong></label>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="pendidikan_kk_id">Pendidikan Dalam KK </label>
                        <select class="form-control input-sm" name="pendidikan_kk_id">
                          <option value="">Pilih Pendidikan (Dalam KK) </option>
                        
                            <option value=""selected></option>
                  
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="pendidikan_sedang_id">Pendidikan Sedang Ditempuh </label>
                        <select class="form-control input-sm" name="pendidikan_sedang_id" >
                          <option value="">Pilih Pendidikan</option>
                          
                            <option value=""></option>
                      
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="pekerjaan_id">Pekerjaaan</label>
                        <select class="form-control input-sm required" name="pekerjaan_id">
                          <option value="">Pilih Pekerjaan</option>
                         
                            <option value="" ></option>
           
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class="form-group subtitle_head">
                        <label class="text-right"><strong>DATA KEWARGANEGARAAN :</strong></label>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="warganegara_id">Status Warga Negara</label>
                        <select class="form-control input-sm required" name="warganegara_id">
                          <option value="">Pilih Warga Negara</option>
             
                            <option value="" ></option>
                       
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-8'>
                      <div class='form-group'>
                        <label for="dokumen_pasport">Nomor Paspor </label>
                        <input id="dokumen_pasport"  name="dokumen_pasport" class="form-control input-sm" type="text" placeholder="Nomor Paspor" value=""></input>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="tanggalpasport">Tgl Berakhir Paspor</label>
                        <div class="input-group input-group-sm date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input class="form-control input-sm pull-right" id="tgl_2" name="dokumen_pasport" type="text" value="">
                        </div>
                      </div>
                    </div>
                    <div class='col-sm-8'>
                      <div class='form-group'>
                        <label for="dokumen_kitas">Nomor KITAS/KITAP </label>
                        <input id="dokumen_kitas"  name="dokumen_kitas" class="form-control input-sm" type="text" placeholder="Nomor KITAS/KITAP" value="""></input>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class="form-group subtitle_head">
                        <label class="text-right"><strong>DATA ORANG TUA :</strong></label>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="ayah_nik"> NIK Ayah </label>
                        <input id="ayah_nik"  name="ayah_nik"  class="form-control input-sm" type="text" placeholder="Nomor NIK Ayah"  value=">"></input>
                      </div>
                    </div>
                    <div class='col-sm-8'>
                      <div class='form-group'>
                        <label for="nama_ayah">Nama Ayah </label>
                        <input id="nama_ayah" name="nama_ayah" class="form-control input-sm" type="text" placeholder="Nama Ayah" value=""></input>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="ibu_nik"> NIK Ibu </label>
                        <input id="ibu_nik"  name="ibu_nik"  class="form-control input-sm" type="text" placeholder="Nomor NIK Ibu" value=""></input>
                      </div>
                    </div>
                    <div class='col-sm-8'>
                      <div class='form-group'>
                        <label for="nama_ibu">Nama Ibu </label>
                        <input id="nama_ibu" name="nama_ibu" class="form-control input-sm" type="text" placeholder="Nama Ibu"  value=""></input>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class="form-group subtitle_head">
                        <label class="text-right"><strong>ALAMAT :</strong></label>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="lokasi">Lokasi Tempat Tinggal </label>
                        <a href="" title="Lokasi " data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Lokasi " class="btn btn-social btn-flat bg-navy btn-sm"><i class='fa fa-map-marker'></i> Cari Lokasi Tempat Tinggal</a>

                      </div>
                    </div>
                    <div class='col-sm-8'>
                      <div class='form-group'>
                        <label for="telepon"> Nomor Telepon </label>
                        <input id="telepon"  name="telepon"  class="form-control input-sm" type="text" placeholder="Nomor Telepon"  value=""></input>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class='form-group'>
                        <label for="alamat_sebelumnya">Alamat Sebelumnya </label>
                        <input id="alamat_sebelumnya" name="alamat_sebelumnya" class="form-control input-sm" type="text" placeholder="Alamat Sebelumnya" value=""></input>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class='form-group'>
                        <label for="alamat_sekarang">Alamat Sekarang </label>
                        <input id="alamat_sekarang" name="alamat_sekarang" class="form-control input-sm" type="text" placeholder="Alamat Sekarang" value=""></input>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class="form-group subtitle_head">
                        <label class="text-right"><strong>STATUS PERKAWINAN :</strong></label>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="status_kawin">Status Perkawinan</label>
                        <select class="form-control input-sm required" name="status_kawin">
                          <option value="">Pilih Status Perkawinan</option>
                            <option value=""></option>
                         
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        
                          <label for="akta_perkawinan">No. Akta Nikah (Buku Nikah)/Perkawinan </label>
                      
                          <label for="akta_perkawinan">No. Akta Nikah (Buku Nikah) </label>
                   
                          <label for="akta_perkawinan">No. Akta Perkawinan </label>
                       
                          <input id="akta_perkawinan" name="akta_perkawinan" class="form-control input-sm" type="text" placeholder="Nomor Akta Perkawinan" value=""></input>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="tanggalperkawinan">Tanggal Perkawinan</label>
                        <div class="input-group input-group-sm date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input class="form-control input-sm pull-right" id="tgl_3" name="tanggalperkawinan" type="text" value="">
                        </div>
                      </div>
                    </div>
                    <div class='col-sm-8'>
                      <div class='form-group'>
                        <label for="akta_perceraian">Akta Perceraian </label>
                        <input id="akta_perceraian" name="akta_perceraian" class="form-control input-sm" type="text" placeholder="Akta Perceraian" value=""></input>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="tanggalperceraian">Tanggal Perceraian </label>
                        <div class="input-group input-group-sm date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input class="form-control input-sm pull-right" id="tgl_4" name="tanggalperceraian" type="text" value="">
                        </div>
                      </div>
                    </div>
                    <div class='col-sm-12'>
                      <div class="form-group subtitle_head">
                        <label class="text-right"><strong>DATA KESEHATAN :</strong></label>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="golongan_darah_id">Golongan Darah</label>
                        <select class="form-control input-sm" name="golongan_darah_id">
                          <option value="">Pilih Golongan Darah</option>
                          
                            <option value="" ></option>
             
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="cacat_id">Cacat</label>
                        <select class="form-control input-sm" name="cacat_id" >
                          <option value="">Pilih Jenis Cacat</option>
                 
                            <option value="" ></option>
             
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="sakit_menahun_id">Sakit Menahun</label>
                        <select class="form-control input-sm" name="sakit_menahun_id">
                          <option value="">Pilih Sakit Menahun</option>
           
                            <option value=""></option>
                 
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="cara_kb_id">Akseptor KB</label>
                        <select class="form-control input-sm" name="cara_kb_id" >
                          <option value="">Pilih Cara KB Saat Ini</option>
                            <option value="" selected></option>
                       
                        </select>
                      </div>
                    </div>
                    <div class='col-sm-4'>
                      <div class='form-group'>
                        <label for="hamil">Status Kehamilan </label>
                        <select class="form-control input-sm" name="hamil">
                          <option value="">Pilih Status Kehamilan</option>
                          <option value="0" >Tidak Hamil</option>
                          <option value="1" >Hamil</option>
                        </select>
                      </div>
                    </div>
                    <div class='box-footer'>
                    <div class='col-xs-12'>
                    <button type='reset' class='btn btn-social btn-flat btn-danger btn-sm' ><i class='fa fa-times'></i> Batal</button>
                    <button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right'><i class='fa fa-check'></i> Simpan</button>
                  </div>
                  </div>
                </div>
                </div>
                <div  class="modal fade" id="rumah-penduduk" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class='modal-dialog'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                        <h4 class='modal-title' id='myModalLabel'><i class='fa fa-exclamation-triangle text-red'></i> Cari Lokasi Tempat Tinggal</h4>
                      </div>
                      <div class="fetched-data"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
    </section>
    
</div>
</div>
</div>
</div>
</div> 
</div>    <!-- end: page -->
</section> 