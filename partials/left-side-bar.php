<nav class="sidebar sidebar-offcanvas sidebar-dark" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <img src="https://www.placehold.it/100x100" alt="profile image">
            <p class="text-center font-weight-medium"><?php echo $lang['welcome']; ?> Larry Garner</p>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.php">
                <i class="menu-icon fa fa-dashboard"></i>
                <span class="menu-title"><?php echo $lang['fireytech_home']; ?></span>

            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="customer.php">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-title"><?php echo $lang['customer']; ?></span>

            </a>
        </li>

        <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                aria-controls="page-layouts">
                <i class="menu-icon fa fa-address-book"></i>
                <span class="menu-title"><?php echo $lang['contacts']; ?></span>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="contact-details.php"><?php echo $lang['contact_details']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="addresses.php"><?php echo $lang['addresses']; ?></a>
                    </li>


                </ul>
            </div>
        </li>






        <li class="nav-item">
            <a class="nav-link" href="new-tickets-direct.php">
                <i class="menu-icon fa fa-plus-square-o"></i>
                <span class="menu-title"><?php echo $lang['tickets']; ?></span>

            </a>
        </li>




        <li class="nav-item">
            <a class="nav-link" href="vendor-all.php">
                <i class="menu-icon fa fa-users"></i>
                <span class="menu-title"><?php echo $lang['vendor_all']; ?></span>

            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="clients-direct.php">
                <i class="menu-icon fa fa-paperclip"></i>
                <span class="menu-title"><?php echo $lang['reports']; ?></span>

            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="clients-direct.php">
                <i class="menu-icon fa fa-hand-o-right"></i>
                <span class="menu-title"><?php echo $lang['admin']; ?></span>

            </a>
        </li>








    </ul>
</nav>