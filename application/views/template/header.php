			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="<?php echo base_url(); ?>" class="logo">
						<img src="<?php echo base_url(); ?>assets/octopus/assets/images/logo-1.png" width="50%" alt="Desa Kita - Codepedia" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<!-- start: search & user box -->
				<div class="header-right">



					<span class="separator"></span>
					<?php
					$session['hasil'] = $this->session->userdata('logged_in');
					$nama = $session['hasil']->nama;
					$foto = $session['hasil']->foto;
					$role = $session['hasil']->role;
					?>
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo base_url(); ?>assets/fp/penduduk/<?php echo $foto; ?>" alt="<?php echo $nama; ?>" class="img-circle" data-lock-picture="<?php echo base_url(); ?>assets/fp/<?php echo $foto; ?>" />
							</figure>
							<div class="profile-info" data-lock-name="<?php echo $nama; ?>" data-lock-email="mimow.aja@gmail.com">
								<span class="name"><?php echo $nama; ?></span>
								<span class="role"><?php echo $role; ?></span>
							</div>

							<i class="fa custom-caret"></i>
						</a>

						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>login/logout"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->