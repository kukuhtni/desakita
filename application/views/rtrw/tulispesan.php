<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php echo $judul;?></h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?php echo base_url();?>">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span><?php echo $judul;?></span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<section class="content-with-menu content-with-menu-has-toolbar mailbox">
						<div class="content-with-menu-container" data-mailbox data-mailbox-view="compose">
							<div class="inner-menu-toggle">
								<a href="#" class="inner-menu-expand" data-open="inner-menu">
									Lihat Menu <i class="fa fa-chevron-right"></i>
								</a>
							</div>
							
							<menu id="content-menu" class="inner-menu" role="menu">
								<div class="nano">
									<div class="nano-content">
							
										<div class="inner-menu-toggle-inside">
											<a href="#" class="inner-menu-collapse">
												<i class="fa fa-chevron-up visible-xs-inline"></i><i class="fa fa-chevron-left hidden-xs-inline"></i> Hide Menu
											</a>
							
											<a href="#" class="inner-menu-expand" data-open="inner-menu">
												Lihat Menu <i class="fa fa-chevron-down"></i>
											</a>
										</div>
							
										<div class="inner-menu-content">
										<a href="<?php echo base_url();?>rtrw/tulispesan" class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md">
												<i class="fa fa-envelope mr-xs"></i>
												Tulis Pesan
											</a>
							
											<ul class="list-unstyled mt-xl pt-md">
												<li>
													<a href="<?php echo base_url();?>rtrw/kotakpesan" class="menu-item active">Kotak Masuk <span class="label label-primary text-normal pull-right">9</span></a>
												</li>
												<li>
													<a href="<?php echo base_url();?>rtrw/terkirim" class="menu-item">Terkirim</a>
												</li>
											</ul>
							
							
							
											<div class="sidebar-widget m-none">
												<div class="widget-header">
											</div>
										</div>
									</div>
								</div>
							</menu>
							<div class="inner-body">
								<div class="inner-toolbar clearfix">
									<ul>
										<li>
											<a href="#"><i class="fa fa-send-o mr-sm"></i> Kirim</a>
										</li>
											<a href="#"><i class="fa fa-paperclip mr-sm"></i> Lampirkan</a>
										</li>
									</ul>
								</div>
								<div class="mailbox-compose">
									<form class="form-horizontal form-bordered form-bordered">

									<div class="form-group form-group-invisible">
											<label for="subject" class="control-label-invisible">Subject:</label>
											<div class="col-sm-offset-2 col-sm-9 col-md-offset-1 col-md-10">
												<input id="subject" type="text" class="form-control form-control-invisible" value="">
											</div>
										</div>
							


										<div class="form-group">
											<div class="compose">
												<div id="compose-field" class="compose-control">
												</div>
												<textarea class="form-control" id="message" name="body" rows="12" placeholder="Tulis pesan"></textarea>

											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>
