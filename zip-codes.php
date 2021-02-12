<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Zip Codes- Fireytech CRM</title>
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
              <h4 class="page-title">Zip Code Management</h4>
              <div class="d-flex align-items-center">
               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 card-statistics">
              <div class="row">
                <div class="col-sm-12 col-md-4 grid-margin stretch-card card-tile">
                  <div class="card">
                    <div class="card-body">
                    <form class="forms-sample">
                        <div class="form-group">
                          <label for="zip">ZIP</label>
                          <input type="number" class="form-control" id="zip-code" placeholder="Enter zip code">
                        </div>
                        <div class="form-group">
                          <label for="city">CITY</label>
                          <input type="text" class="form-control" id="city" placeholder="Enter City">
                        </div>
                        <div class="form-group">
                          <label for="county">COUNTY</label>
                          <input type="text" class="form-control" id="county" placeholder="Enter County">
                        </div>
                        <div class="form-group">
                          <label for="county">STATE</label>
                          <?php include 'tools-data/states.php';?>
                        </div>
                        <div class="form-group">
                          <label for="region">REGION</label>
                          <input type="text" class="form-control" id="region" placeholder="Enter Region">
                        </div>
                        <div class="form-group">
                          <label for="lat">LATITUDE</label>
                          <input type="number" class="form-control" id="lat" placeholder="Enter Latitude">
                        </div>
                        <div class="form-group">
                          <label for="long">LONGITUDE</label>
                          <input type="number" class="form-control" id="long" placeholder="Enter Longitude">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                      
                   
                    </div>
                  </div>
                </div>

                <div class="col-sm-12 col-md-8 grid-margin stretch-card card-tile">
                  <div class="card">
                    <div class="card-body table-responsive">
                   
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                        <th>ZIP</th>
                        <th>CITY</th>
                        <th>COUNTY</th>
                        <th>STATE</th>
                        <th>REGION</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
                        </td>
                      </tr>
                      <tr>
                        <td>00501</td>
                        <td>HOLTSVILLE</td>
                        <td>SUFFOLK</td>
                        <td>NY</td>
                        <td>SUFFOLK</td>
                        <td>40.922326</td>
                        <td>-72.637078</td>
                     
                        <td>
                          <button class="btn btn-outline-primary" data-toggle="modal" data-target="#edit-zip">Edit</button>
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
  <?php include 'partials/modals.php';?>

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
  <script src="js/select2.js"></script>
  <script src="js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>

</html>