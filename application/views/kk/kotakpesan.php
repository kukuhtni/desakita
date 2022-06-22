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
				    <section class="content-with-menu mailbox">
				        <div class="content-with-menu-container" data-mailbox data-mailbox-view="folder">
				            <?php $this->load->view('kk/kotakmenu'); ?>
				            <?php $this->load->view($pesan); ?>
				        </div>
				    </section>
				</section> 