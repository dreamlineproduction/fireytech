<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fireytech CRM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include 'partials/top-bar.php';?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?php include 'partials/left-side-bar.php';?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row mb-4">
                        <div class="col-12 d-flex align-items-center justify-content-between">
                            <h4 class="page-title">Address</h4>
                            <div class="d-flex align-items-center">
                                <button type="button"
                                    class="btn btn-primary btn-fw"><?php echo $lang['create_new_customer']; ?></button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 card-statistics">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 grid-margin stretch-card card-tile">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-12 table-responsive">
                                                    <table id="order-listing" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th><?php echo $lang['company_name']; ?></th>
                                                                <th><?php echo $lang['first_name']; ?></th>
                                                                <th><?php echo $lang['last_name']; ?></th>
                                                                <th>Address 1</th>
                                                                <th>Address 2</th>
                                                                <th>City</th>
                                                                <th>State</th>
                                                                <th>Zip</th>
                                                                <th><?php echo $lang['contact_type']; ?></th>

                                                                <th><?php echo $lang['actions']; ?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr>
                                                                <td>1</td>
                                                                <td>Dream Line Production</td>
                                                                <td>Ayan</td>
                                                                <td>Mukhopadhyay</td>
                                                                <td>Address 1</td>
                                                                <td>Address 2</td>
                                                                <td>City</td>
                                                                <td>State</td>
                                                                <td>Zip</td>
                                                                <td>Client</td>

                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button type="button"
                                                                            class="btn btn-dark icon-btn dropdown-toggle"
                                                                            id="dropdownMenuIconButton7"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <i class="mdi mdi-account"></i>
                                                                        </button>
                                                                        <div class="dropdown-menu"
                                                                            aria-labelledby="dropdownMenuIconButton7">
                                                                            <a class="dropdown-item"
                                                                                href="#"><?php echo $lang['view_customer']; ?></a>
                                                                            <a class="dropdown-item"
                                                                                href="#"><?php echo $lang['edit_customer']; ?></a>

                                                                            <div class="dropdown-divider"></div>
                                                                            <a class="dropdown-item text-danger"
                                                                                href="#"><?php echo $lang['delete_customer']; ?></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>




                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include 'partials/footer.php';?>

                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/data-table.js"></script>
    <!-- End custom js for this page-->
</body>

</html>