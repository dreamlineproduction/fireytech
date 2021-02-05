<?php
// Start a Session, You might start this somewhere else already.
session_start();

// What languages do we support
$available_langs = array('en','zh-cn','es');




if(isset($_GET['lang']) && $_GET['lang'] != ''){
    // check if the language is one we support
    if(in_array($_GET['lang'], $available_langs))
    {
        $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}



// Set our default language session ONLY if we've got nothing
if ($_SESSION['lang']=='') {
    $_SESSION['lang'] = 'en';

}


// Include active language
include('languages/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');

?>
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="images/logo-color.png" alt="logo" />
        </a>
       
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
       
        <ul class="navbar-nav navbar-nav-right">
       
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="dropdown-toggle-wrapper">
                <div class="inner">
                  <img class="img-xs rounded-circle" src="https://www.placehold.it/37x37" alt="Profile image">
                </div>
                <div class="inner">
                  <div class="inner">
                    <span class="profile-text font-weight-bold">Larry Garner</span>
                    <small class="profile-text small"><?php echo $lang['employee']; ?></small>
                  </div>
                  <div class="inner">
                    <div class="icon-wrapper">
                      <i class="mdi mdi-chevron-down"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              
              <a class="dropdown-item mt-2">
              <?php echo $lang['manage_accounts']; ?>
              </a>
              <a class="dropdown-item">
              <?php echo $lang['change_password']; ?>
              </a>
             
              <a class="dropdown-item">
              <?php echo $lang['sign_out']; ?> 
              </a>
            </div>
          </li>
         
       
       
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>