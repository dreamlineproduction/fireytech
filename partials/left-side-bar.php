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



        <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts-2" aria-expanded="false"
                aria-controls="page-layouts-2">
                <i class="menu-icon fa fa-paperclip"></i>
                <span class="menu-title"><?php echo $lang['reports']; ?></span>
            </a>
            <div class="collapse" id="page-layouts-2">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="active-tickets.php"><?php echo $lang['active_tickets']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="client-source-by-date.php"><?php echo $lang['client_source_by_date']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new-clients-by-date.php"><?php echo $lang['new_clients_by_date']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="new-tickets-by-date.php"><?php echo $lang['new_tickets_by_date']; ?></a>
                    </li>


                </ul>
            </div>
        </li>



        

        <li class="nav-item">
            <a class="nav-link" href="clients-direct.php">
                <i class="menu-icon fa fa-hand-o-right"></i>
                <span class="menu-title"><?php echo $lang['admin']; ?></span>

            </a>
        </li>


        <hr>

        <li class="nav-item d-none d-md-block">
            <a class="nav-link" data-toggle="collapse" href="#tools-layout" aria-expanded="false"
                aria-controls="tools-layout">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-title">Tools</span>
            </a>
            <div class="collapse" id="tools-layout">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="zip-codes.php">Zip Codes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="equipment.php">Equipment</a>
                    </li>


                </ul>
            </div>
        </li>






    </ul>
</nav>