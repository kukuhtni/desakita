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

                    foreach ($dataPesan->result_array() as $data) {
                        $tgl = $data['tgl_upload'];
                        ?>
                    <li class="unread">
                        <a href="">
                            <div class="col-sender">
                                <p class="m-none ib"><?php echo $data['subject']; ?></p>
                            </div>
                            <div class="col-mail">
                                <p class="m-none mail-content">
                                    <span class="mail-partial"><?php echo $data['komentar']; ?></span>
                                </p>
                                <p class="m-none mail-date"><?php echo date('d M', strtotime($tgl)); ?></p>
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