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
            </ol>

            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>

    <section class="content-with-menu content-with-menu-has-toolbar media-gallery">
        <div class="content-with-menu-container">
            <div class="inner-menu-toggle">
                <a href="#" class="inner-menu-expand" data-open="inner-menu">
                    Menu <i class="fa fa-chevron-right"></i>
                </a>
            </div>

            <menu id="content-menu" class="inner-menu" role="menu">
                <div class="nano">
                    <div class="nano-content">

                        <div class="inner-menu-toggle-inside">
                            <a href="#" class="inner-menu-collapse">
                                <i class="fa fa-chevron-up visible-xs-inline"></i><i class="fa fa-chevron-left hidden-xs-inline"></i> Menu
                            </a>
                            <a href="#" class="inner-menu-expand" data-open="inner-menu">
                                Menu <i class="fa fa-chevron-down"></i>
                            </a>
                        </div>

                        <div class="inner-menu-content">

                            <a class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md">
                                <i class="fa fa-upload mr-xs"></i>
                                Unggah Dokumen
                            </a>

                            <hr class="separator" />

                            <div class="sidebar-widget m-none">
                                <div class="widget-header clearfix">
                                    <h6 class="title pull-left mt-xs">Folder</h6>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-dark btn-sm btn-widget-act">Tambah Folder</a>
                                    </div>
                                </div>
                                <li class="right" data-sort-source data-sort-id="media-gallery">
                                    <ul class="nav nav-pills nav-pills-primary">
                                        <li class="active">
                                            <a data-option-value="*" href="#all">Semua</a>
                                        </li>
                                        <li>
                                            <a data-option-value=".document" href="#document">Dokumen</a>
                                        </li>
                                        <li>
                                            <a data-option-value=".image" href="#image">Foto</a>
                                        </li>
                                        <li>
                                            <a data-option-value=".video" href="#video">Video</a>
                                        </li>
                                    </ul>
                                </li>
                            </div>


                        </div>
                    </div>
                </div>
            </menu>
            <div class="inner-body mg-main">

                <div class="row mg-files" data-sort-destination data-sort-id="media-gallery">
                    <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="thumb-preview">
                                <a class="thumb-image" href="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-1.jpg">
                                    <img src="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-1.jpg" class="img-responsive" alt="Project">
                                </a>
                                <div class="mg-thumb-options">
                                    <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                    <div class="mg-toolbar">
                                        <div class="mg-option checkbox-custom checkbox-inline">
                                            <input type="checkbox" id="file_1" value="1">
                                        </div>
                                        <div class="mg-group pull-right">

                                            <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu mg-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-download"></i> Unduh</a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mg-title text-semibold">dfg<small>.pdf</small></h5>
                            <div class="mg-description">
                                <small class="pull-left text-muted">Nurhadi Aldo, KTP</small>
                                <small class="pull-right text-muted">07/10/2014</small>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="thumb-preview">
                                <a class="thumb-image" href="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-2.jpg">
                                    <img src="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-2.jpg" class="img-responsive" alt="Project">
                                </a>
                                <div class="mg-thumb-options">
                                    <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                    <div class="mg-toolbar">
                                        <div class="mg-option checkbox-custom checkbox-inline">
                                            <input type="checkbox" id="file_2" value="1">
                                        </div>
                                        <div class="mg-group pull-right">

                                            <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu mg-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-download"></i> Unduh</a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mg-title text-semibold">Blog<small>.jpg</small></h5>
                            <div class="mg-description">
                                <small class="pull-left text-muted">Akte, asdf sdaf</small>
                                <small class="pull-right text-muted">07/10/2014</small>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item video col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="thumb-preview">
                                <a class="thumb-image" href="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-5.jpg">
                                    <img src="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-5.jpg" class="img-responsive" alt="Project">
                                </a>
                                <div class="mg-thumb-options">
                                    <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                    <div class="mg-toolbar">
                                        <div class="mg-option checkbox-custom checkbox-inline">
                                            <input type="checkbox" id="file_3" value="1">
                                        </div>
                                        <div class="mg-group pull-right">

                                            <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu mg-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-download"></i> Unduh</a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mg-title text-semibold">Friends<small>.mp4</small></h5>
                            <div class="mg-description">
                                <small class="pull-left text-muted">asdfdd dfa, SIM</small>
                                <small class="pull-right text-muted">07/10/2014</small>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="thumb-preview">
                                <a class="thumb-image" href="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-4.jpg">
                                    <img src="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-4.jpg" class="img-responsive" alt="Project">
                                </a>
                                <div class="mg-thumb-options">
                                    <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                    <div class="mg-toolbar">
                                        <div class="mg-option checkbox-custom checkbox-inline">
                                            <input type="checkbox" id="file_4" value="1">
                                        </div>
                                        <div class="mg-group pull-right">

                                            <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu mg-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-download"></i> Unduh</a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mg-title text-semibold">Life<small>.jpg</small></h5>
                            <div class="mg-description">
                                <small class="pull-left text-muted">KK</small>
                                <small class="pull-right text-muted">07/10/2014</small>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item video col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="thumb-preview">
                                <a class="thumb-image" href="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-5.jpg">
                                    <img src="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-5.jpg" class="img-responsive" alt="Project">
                                </a>
                                <div class="mg-thumb-options">
                                    <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                    <div class="mg-toolbar">
                                        <div class="mg-option checkbox-custom checkbox-inline">
                                            <input type="checkbox" id="file_5" value="1">
                                        </div>
                                        <div class="mg-group pull-right">

                                            <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu mg-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-download"></i> Unduh</a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mg-title text-semibold">Poetry<small>.mp4</small></h5>
                            <div class="mg-description">
                                <small class="pull-left text-muted">sadf asdf, Ijazah</small>
                                <small class="pull-right text-muted">07/10/2014</small>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item document col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="thumb-preview">
                                <a class="thumb-image" href="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-6.jpg">
                                    <img src="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-6.jpg" class="img-responsive" alt="Project">
                                </a>
                                <div class="mg-thumb-options">
                                    <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                    <div class="mg-toolbar">
                                        <div class="mg-option checkbox-custom checkbox-inline">
                                            <input type="checkbox" id="file_6" value="1">
                                        </div>
                                        <div class="mg-group pull-right">

                                            <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu mg-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-download"></i> Unduh</a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mg-title text-semibold">Fun<small>.doc</small></h5>
                            <div class="mg-description">
                                <small class="pull-left text-muted">Nurhadi Aldo, Paspor</small>
                                <small class="pull-right text-muted">07/10/2014</small>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="thumb-preview">
                                <a class="thumb-image" href="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-7.jpg">
                                    <img src="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-7.jpg" class="img-responsive" alt="Project">
                                </a>
                                <div class="mg-thumb-options">
                                    <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                    <div class="mg-toolbar">
                                        <div class="mg-option checkbox-custom checkbox-inline">
                                            <input type="checkbox" id="file_7" value="1">
                                        </div>
                                        <div class="mg-group pull-right">

                                            <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu mg-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-download"></i> Unduh</a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mg-title text-semibold">Family<small>.jpg</small></h5>
                            <div class="mg-description">
                                <small class="pull-left text-muted">sdaf dsfa, KTP</small>
                                <small class="pull-right text-muted">07/10/2014</small>
                            </div>
                        </div>
                    </div>
                    <div class="isotope-item image col-sm-6 col-md-4 col-lg-3">
                        <div class="thumbnail">
                            <div class="thumb-preview">
                                <a class="thumb-image" href="project-1.jpg">
                                    <img src="<?php echo base_url(); ?>assets/octopus/assets/images/projects/project-1.jpg" class="img-responsive" alt="Project">
                                </a>
                                <div class="mg-thumb-options">
                                    <div class="mg-zoom"><i class="fa fa-search"></i></div>
                                    <div class="mg-toolbar">
                                        <div class="mg-option checkbox-custom checkbox-inline">
                                            <input type="checkbox" id="file_8" value="1">
                                        </div>
                                        <div class="mg-group pull-right">

                                            <button class="dropdown-toggle mg-toggle" type="button" data-toggle="dropdown">
                                                <i class="fa fa-caret-up"></i>
                                            </button>
                                            <ul class="dropdown-menu mg-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-download"></i> Unduh</a></li>
                                                <li><a href="#"><i class="fa fa-trash-o"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mg-title text-semibold">Hapiness<small>.jpg</small></h5>
                            <div class="mg-description">
                                <small class="pull-left text-muted">Nurhadi Aldo, Akte</small>
                                <small class="pull-right text-muted">07/10/2014</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>