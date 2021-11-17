<!DOCTYPE html>
<html lang="en">

<head>
    <title>mastermine</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />

      <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="Codedthemes" />
      <!-- Favicon icon -->

      <link rel="icon" href="/assets/material_able-main/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/css/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="/assets/material_able-main/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="/assets/material_able-main/assets/css/style.css">
  </head>

  <body themebg-pattern="theme1">
  <!-- Pre-loader start -->
  <div class="theme-loader">
      <div class="loader-track">
          <div class="preloader-wrapper">
              <div class="spinner-layer spinner-blue">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
              <div class="spinner-layer spinner-red">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-yellow">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>

              <div class="spinner-layer spinner-green">
                  <div class="circle-clipper left">
                      <div class="circle"></div>
                  </div>
                  <div class="gap-patch">
                      <div class="circle"></div>
                  </div>
                  <div class="circle-clipper right">
                      <div class="circle"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Pre-loader end -->
  <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material">
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <!-- action untuk mengarahkan ke method dan menghubungkan ke routes -->
                                <form action="/mastermine/saveRegister" method="post">
                                    <div class="form-group form-primary">
                                        <input type="text" name="fullname" class="form-control" placeholder="Full name" id="fullname">
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control" placeholder="Email" id="email">
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                        <span class="form-bar"></span>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <a href ="/mastermine/login"><button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button> </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="/assets/material_able-main/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="/assets/material_able-main/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="/assets/material_able-main/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="/assets/material_able-main/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="/assets/material_able-main/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="/assets/material_able-main/assets/js/jquery/jquery.min.js "></script>
<script type="text/javascript" src="/assets/material_able-main/assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="/assets/material_able-main/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="/assets/material_able-main/assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="/assets/material_able-main/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="/assets/material_able-main/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<script type="text/javascript" src="/assets/material_able-main/assets/js/common-pages.js"></script>
</body>

</html>
