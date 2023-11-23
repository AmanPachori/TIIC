<ul class="list-unstyled navbar__list">
    <li>
        <a class="js-arrow" href="<?php echo base_url('Admin/index.ais');?>"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
    </li>
    <li class="has-sub">
        <a class="js-arrow" href="#">
            <i class="fas fa-users"></i>Kiosk Management</a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="<?php echo base_url('Admin/addKiosk.ais');?>">Add New Kiosk</a>
            </li>
            <li>
                <a href="<?php echo base_url('Admin/viewKiosk.ais');?>">Kiosk List</a>
            </li>
        </ul>
    </li>
</ul>