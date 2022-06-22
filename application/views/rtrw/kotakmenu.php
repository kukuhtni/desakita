<?php
if ($submenu == "Kotak Masuk") {
    $kotakmasuk = 'active';
    $terkirim = '';
} elseif ($submenu == "Terkirim") {
    $kotakmasuk = '';
    $terkirim = 'active';
} elseif ($submenu == "") {
    $kotakmasuk = '';
    $terkirim = '';
}
?>

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
                <a href="<?php echo base_url(); ?>rtrw/kotakpesan/kotaktulis" class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md">
                    <i class="fa fa-envelope mr-xs"></i>
                    Tulis Pesan
                </a>

                <ul class="list-unstyled mt-xl pt-md">
                    <li>
                        <a href="<?php echo base_url(); ?>rtrw/kotakpesan" class="menu-item <?= $kotakmasuk; ?>">Kotak Masuk</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>rtrw/kotakpesan/kotakterkirim" class="menu-item <?= $terkirim; ?>">Terkirim</a>
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