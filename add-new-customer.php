
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add New Customer CRM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/iconfonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
    <link href="css/jquery-editable.css" rel="stylesheet">
     <!-- x-editable (bootstrap version) -->
     <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.4.6/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.4.6/bootstrap-editable/js/bootstrap-editable.min.js"></script>
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
                            <h4 class="page-title"><?php echo $lang['create_new_customer']; ?></h4>
                            <div class="d-flex align-items-center">
                            <a class="btn btn-primary btn-fw" href="customer.php" role="button"> <i class="fa fa-angle-left"></i> <?php echo $lang['back_to_list']; ?></a>
                             
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7 card-statistics">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 grid-margin stretch-card card-tile">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-12">
                                                <form class="forms-sample">
                                                <div class="form-group">
                    <label for="exampleFormControlSelect2">Client Type</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option selected disabled>Select Client Type</option>
                      <option>Individual</option>
                      <option>Company</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Company Name <small>(if client is a business)</small></label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlSelect2">How Did they Hear About Us?</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option selected disabled>Select Source</option>
                      <option>Bing / Yahoo</option>
                      <option>Company Vehicle</option>
                      <option>Craigslist</option>
                      <option>Drive By</option>
                      <option>Ebay</option>
                      <option>Facebook</option>
                      <option>Fireytech Website</option>
                      <option>Google Search</option>
                      <option>Referral / Word of Mouth</option>
                      <option>SAM PFANSTIEL</option>
                      <option>Unknown</option>
                      
                    </select>
                  </div>

                  <hr>

                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-contacts" role="tab" aria-controls="pills-home" aria-selected="true">Contacts</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-address" role="tab" aria-controls="pills-profile" aria-selected="false">Address/Locations</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-equipment" role="tab" aria-controls="pills-contact" aria-selected="false">Equipment</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-service" role="tab" aria-controls="pills-contact" aria-selected="false">Service Call History</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-contacts" role="tabpanel" >
  
  <div class="form-group">
                      <label for="exampleInputName1">First Name</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="First Name">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Last Name</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Last Name">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Home Phone</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Home Address">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Mobile Phone</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Mobile">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Company Phone</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Company Phone">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Fax</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Fax">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Ext</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Ext">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Email Address</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Email Address">
                      
                    </div>
                 
                 
                    <div class="form-group">
                    <label for="exampleInputName1">Department</label> 
                    <a href="#" class="add-new-depart" data-toggle="modal" data-target="#add-new-department">+ Create New</a>
                    <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                      <option selected disabled>Select department from list</option>
                      <option>ACCOUNTING</option>
                      <option>ADMINISTRATION</option>
                      <option>CHECK IN/OUT</option>
                      <option>CLOSEOUT</option>
                      <option>CUSTOMER SERVICE</option>
                      <option>DEPOT</option>
                      <option>DISPATCH</option>
                      <option>INVOICING</option>
                      <option>MAIN</option>
                      <option>MANAGEMENT</option>
                      <option>PARTS</option>
                      <option>SALES</option>
                      <option>SITE CONTACT</option>
                      <option>TECH SUPPORT</option>
                      <option>TECHNICAL REFERENCE</option>
                      <option>TRAINING</option>
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Title</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                      
                    </div>
                 
                  <div class="form-group">
                      <label for="exampleInputName1">Note</label>
                      
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Note" spellcheck="false"></textarea>
                      
                    </div>


  </div>

  <div class="tab-pane fade" id="pills-address" role="tabpanel">
  
<div class="view-all-address mb-4 mt-4">
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#view-all-address">View All Address
                      <i class="mdi mdi-play-circle ml-1"></i>
                    </button>
</div>

  <div class="form-group">
                      <label for="exampleInputName1">Address</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Address">
                      
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Address 2</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Address 2">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Zip</label>
                      <div class="w-100">
                      <select class="js-example-basic-single">
                          <option value="AL">Alabama</option>
                          <option value="WY">Wyoming</option>
                          <option value="AM">America</option>
                          <option value="CA">Canada</option>
                          <option value="RU">Russia</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">One Line</label>
                      
                      <textarea class="form-control" id="oneline" rows="5"  spellcheck="false" readonly>42, Adilate Street. Ny. 2558 </textarea>
                      <button class="btn btn-info btn-clipboard" onclick="myFunction()"><i class="fa fa-copy"></i> Copy Address</button>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Note</label>
                      
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"  spellcheck="true" placeholder="Note"> </textarea>
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Attn</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Attn">
                      
                    </div>
                    <div class="form-group">
                     
                    <button type="button" class="btn btn-outline-primary"><i class="fa fa-plus"></i> Add Address</button>
                    
                      
                    </div>

                  
                    
                

  
  </div>
  <div class="tab-pane fade" id="pills-equipment" role="tabpanel">
  
  <div class="form-group">
                    <label for="exampleFormControlSelect2">Part Type</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option selected="" disabled="">Select Part Type</option>
                      <option>AUDIO VIDEO</option>
                      <option>COAX WIRING</option>
                      <option>COMPUTER SOFTWARE</option>
                      <option>DE-INSTALL</option>
                      <option>DESKTOP HARDWARE</option>
                      <option>HEALTHY ADVICE INSTALL</option>
                      <option>HEALTHY ADVICE SERVICE</option>
                      <option>HOME APPLIANCE</option>
                      <option>HOME ELECTRONICS</option>
                      <option>HUGHES INSTALL</option>
                      <option>KIOSK</option>
                      <option>LAPTOP HARDWARE</option>
                      <option>MEDIA PLAYER</option>
                      <option>MTI KIOSK</option>
                      <option>NETWORK CONFIGURATION</option>
                      <option> NETWORK HARDWARE</option>
                      <option>NETWORK WIRING</option>
                      <option>PHONE HARDWARE INSTALL</option>
                      <option>PHONE SYSTEM</option>
                      <option>PHONE WIRING</option>
                      <option>POINT OF SALE</option>
                      <option>PRACTICE WIRE INSTALL</option>
                      <option>PRACTICE WIRE SERVICE</option>
                      <option>PRINTER HARDWARE</option>
                      <option>PRINTER INSTALL</option>
                      <option>PRINTER SOFTWARE</option>
                      <option>ROUTER</option>
                      <option>SATELLITE</option>
                      <option>SCANNER</option>
                      <option>SECURITY SYSTEM</option>
                      <option>SECURITY SYSTEM-MTI</option>
                      <option>SERVER HARDWARE</option>
                      <option>SIGNATURE CAPTURE DEVICE</option>
                      <option>SITE SURVEY</option>
                      <option>SOFTWARE</option>
                      <option>Television Install</option>
                      <option>Television Mount</option>
                      <option>TELEVISION REPAIR</option>
                      <option>TRAFFIC COUNTER INSTALL</option>
                      <option>TRAFFIC COUNTER SURVEY</option>
                      <option>WIRELESS NETWORK</option>
                      
                    </select>
                  </div>

                  <div class="form-group">
                      <label for="exampleInputName1">Model Number</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Model Number">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Serial Number</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Serial Number">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Password</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Password">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Computer Name</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Computer Name">
                      
                    </div>
                    <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Log Me In Setup</label>
                          <div class="col-sm-4">
                            <div class="form-radio">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> Yes
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-radio">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> No
                              <i class="input-helper"></i></label>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                      <label for="exampleInputName1">Remote Password</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Remote Password">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Username</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Username">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Note</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Note">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Mac Address</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Mac Address">
                      
                    </div>
                  <div class="form-group">
                      <label for="exampleInputName1">Operating System</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Operating System">
                      
                    </div>

                    <div class="form-group">
                      <label for="exampleInputName1">Brand/Make</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Brand/Make">
                      
                    </div>

  
  </div>


  <div class="tab-pane fade" id="pills-service" role="tabpanel">
  
                    <div class="form-group">
                      <label for="exampleInputName1">Ticket#</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Ticket ID">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Received</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Received">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Closed</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Closed">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Task/Problem</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Task/Problem">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Problem/Description</label>
                      
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Problem/Description"></textarea>
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Status</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Status">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Results</label>
                      
                      <input type="email" class="form-control" id="exampleInputName1" placeholder="Results">
                      
                    </div>
  </div>
</div>



                 <hr>
<div class="text-right mt-4">
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                        </div>
                      </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>



                        <div class="col-5 card-statistics">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 grid-margin stretch-card card-tile">
                                    <div class="card">
                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-12">
                                                <form class="forms-sample">

                                            

                    <div class="form-group row">
                          
                          <div class="col-sm-4">
                          
                            <label for="exampleInputName1">Customer Number</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Customer Number" value="2295" readonly>
                        
                          </div>
                          <div class="col-sm-4">
                          
                          <label for="exampleInputName1">Last Updated</label>
                    
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Last Updated" value="09-02-2021" readonly>
                      
                        </div>
                          <div class="col-sm-4">
                          
                          <label for="exampleInputName1">Date Added</label>
                    
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Date Added" value="09-02-2021" readonly>
                      
                        </div>
                        </div>


                        <div class="form-group">
                      <label for="exampleInputName1">Customer Noted</label>
                      
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Customer Noted"></textarea>
                      
                    </div>
                        <div class="form-group">
                      <label for="exampleInputName1">Billing Note</label>
                      
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Billing Note"></textarea>
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Contact Type</label>
                      
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Contact Type">
                      
                    </div>

                    <div class="form-group">
                    <label for="exampleFormControlSelect2">Client Type</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option selected="" disabled="">Select Client Type</option>
                      <option>MSP CLIENT</option>
                      <option>STANDARD CLIENT</option>
                      
                    </select>
                  </div>






                                                </form>
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

    <div class="modal fade" id="view-all-address" tabindex="-1" role="dialog" aria-labelledby="view-all-addressLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-md" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="view-all-address">View All Address</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                        <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                          Address 2
                          </th>
                          <th>
                          Zip
                          </th>
                          <th>
                          Note
                          </th>
                          <th>
                          Attn
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                          <a href="#" id="username" data-type="text" data-placement="right" data-title="Enter username">superuser</a>
                          </td>
                          <td>
                         
                          </td>
                          <td>
                            75842
                          </td>
                          <td>
                          This is note
                          </td>
                          <td>
                          Attn Mr. Jhose
                          </td>
                        </tr>
                    
                      </tbody>
                    </table>
                  </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success">Submit</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

<!-- Add new Department Modal -->
<div class="modal fade" id="add-new-department" tabindex="-1" role="dialog" aria-labelledby="add-new-departmentLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-new-departmentLabel">Add new department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group">
                    <label>Department Name</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Enter Department Name">
                  </div>

                  <button type="submit" class="btn btn-success mr-2">Submit</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

        </form>
      </div>
 
    </div>
  </div>
</div>

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
    <script src="js/select2.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- <script src="x/main.js"></script> -->
    <script src="js/data-table.js"></script>
    <script src="js/js-grid.js"></script>

   
    
    
  <script>

$(document).ready(function() {
    //toggle `popup` / `inline` mode
    $.fn.editable.defaults.mode = 'popup';     
    
    //make username editable
    $('#username').editable();
    
    //make status editable
    $('#status').editable({
        type: 'select',
        title: 'Select status',
        placement: 'right',
        value: 2,
        source: [
            {value: 1, text: 'status 1'},
            {value: 2, text: 'status 2'},
            {value: 3, text: 'status 3'}
        ]
        /*
        //uncomment these lines to send data on server
        ,pk: 1
        ,url: '/post'
        */
    });
});

  </script>
   
    <!-- End custom js for this page-->
<script>
function myFunction() {
  var copyText = document.getElementById("oneline");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Address Copied: " + copyText.value);
}
</script>





</body>

</html>