<div class="row">
  <div class="col-md-3">
    <section class="panel panel-success">
      <header class="panel-heading">


        <h2 class="panel-title ">Upload Foto</h2>
      </header>
      <div class="panel-body">

        <nav id="menu" class="nav-main" role="navigation">

          <div class="box box-primary">
            <div class="box-body box-profile">

              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/fp/penduduk/default.png" alt="Foto">

              <br />
              <p class="text-muted text-center"> (Kosongkan jika tidak ingin mengubah foto)</p>
              <br />
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="file_path" name="foto">
                <input type="file" class="hidden" id="file" name="foto">
                <input type="hidden" name="old_foto" value="">
                <span class="input-group-btn">
                  <button type="button" class="btn btn-info btn-flat" id="file_browser"><i class="fa fa-search">Browse</i></button>
                </span>
              </div>
            </div>
          </div>

        </nav>


      </div>
    </section>
  </div>