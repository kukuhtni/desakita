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
					<section class="content-with-menu mailbox">
						<div class="content-with-menu-container" data-mailbox data-mailbox-view="folder">
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
											<a href="<?php echo base_url();?>kk/tulispesan" class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md">
												<i class="fa fa-envelope mr-xs"></i>
												Tulis Pesan
											</a>
							
											<ul class="list-unstyled mt-xl pt-md">
												<li>
													<a href="<?php echo base_url();?>kk/kotakpesan" class="menu-item active">Kotak Masuk <span class="label label-primary text-normal pull-right">9</span></a>
												</li>
												<li>
													<a href="<?php echo base_url();?>kk/terkirim" class="menu-item">Terkirim</a>
												</li>
											</ul>
							
											<div class="sidebar-widget m-none">
												<div class="widget-header">
												</div>
											</div>
										</div>
									</div>
								</div>
							</menu>
							<div class="inner-body mailbox-folder">
								<!-- START: .mailbox-header -->
								<header class="mailbox-header">
									<div class="row">
										<div class="col-sm-6">
											<h1 class="mailbox-title text-light m-none">
												<a id="mailboxToggleSidebar" class="sidebar-toggle-btn trigger-toggle-sidebar">
													<span class="line"></span>
													<span class="line"></span>
													<span class="line"></span>
													<span class="line line-angle1"></span>
													<span class="line line-angle2"></span>
												</a>
							
												Terkirim
											</h1>
										</div>
										<div class="col-sm-6">
											<div class="search">
												<div class="input-group input-search">
													<input type="text" class="form-control" name="q" id="q" placeholder="Cari...">
													<span class="input-group-btn">
														<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
													</span>
												</div>
											</div>
										</div>
									</div>
								</header>
								<!-- END: .mailbox-header -->
							
								<!-- START: .mailbox-actions -->
								<div class="mailbox-actions">
									<ul class="list-unstyled m-none pt-lg pb-lg">
										<li class="ib mr-sm">
										</li>
										<li class="ib mr-sm">
										</li>
									</ul>
								</div>
								<!-- END: .mailbox-actions -->
							
								<div id="mailbox-email-list" class="mailbox-email-list">
									<div class="nano">
										<div class="nano-content">
											<ul id="" class="list-unstyled">
											<?php 
												
												foreach($dataPesan->result_array() as $data){ 
													$tgl=$data['tgl_upload'];
											?>
												<li class="unread">
													<a href="">
														<div class="col-sender">
															<p class="m-none ib"><?php echo $data['subject'];?></p>
														</div>
														<div class="col-mail">
															<p class="m-none mail-content">
																<span class="mail-partial"><?php echo $data['komentar'];?></span>
															</p>
															<p class="m-none mail-date"><?php echo date('d M', strtotime($tgl)) ;?></p>
														</div>
													</a>
												</li>
												<?php
												}
												?>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
