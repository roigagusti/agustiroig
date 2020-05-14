<!DOCTYPE html>
<html lang="ca">
    <head>
    <!-- Meta data -->
    <?php include_once("sections/meta.php"); ?>

    <!-- Títol i Favicons -->
    <title>Agustí Roig | Nova oferta</title>

    <!-- CSS basics -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="..\files\bower_components\bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\icon\feather\css\feather.css">
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\jquery.mCustomScrollbar.css">

    <!-- CSS custom -->
    <link rel="stylesheet" type="text/css" href="..\files\assets\css\style.css">
    <link rel="stylesheet" type="text/css" href="css/aldasoro.css">
    <!-- Scripts custom -->
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- Header -->
            <?php include_once("sections/header.php"); ?>

            <!-- Sidebar chat -->
            <?php include_once("sections/sidebar-chat.php"); ?>
            
            <!-- Sidebar chat conversation -->
            <?php include_once("sections/sidebar-chat-conversation.php"); ?>
            
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
            
                <!-- Navbar menu -->
                <?php include_once("sections/navbar-menu.php"); ?>
                    
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="row align-items-end">
                                        <div class="col-lg-8">
                                            <div class="page-header-title">
                                                <div class="d-inline">
                                                    <h4>Nova oferta</h4>
                                                    <span>Introdueix les dades del nou projecte a ofertar.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!">Gestió econòmica</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#">Ofertes</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                <div class="page-body">
                                    
                                    <div class="row">
                                        <div class="card col-sm-4">
                                            <div class="card-header">
                                            </div>
                                            <div class="card-block">
                                                <h4 class="sub-title">Dades bàsiques</h4>
                                                <form>
                                                    <div class="form-row">
                                                        <label class="col-sm-3 col-form-label">Nom del projecte</label>
                                                        <input type="text" class="col-sm-9 form-control" placeholder="Nou museu Guggenheim">
                                                    </div>
                                                    <div class="form-row">
                                                        <label class="col-sm-3 col-form-label">Ciutat</label>
                                                        <input type="text" class="col-sm-9 form-control" placeholder="Barcelona">
                                                    </div>
                                                    <div class="form-row">
                                                        <label class="col-sm-3 col-form-label">Client</label>
                                                        <input type="text" class="col-sm-9 form-control" placeholder="Foster & Partners">
                                                    </div>
                                                    <div class="form-row">
                                                        <label class="col-sm-3 col-form-label">Data</label>
                                                        <input type="text" class="col-sm-9 form-control" placeholder="03.2019">
                                                    </div>
                                                    <div class="form-row">
                                                        <label class="col-sm-3 col-form-label">Expedient</label>
                                                        <input type="text" class="col-sm-9 form-control" placeholder="1015">
                                                    </div>

                                                <h4 class="sub-title seccio">Dades econòmiques</h4>

                                                    <div class="form-row">
                                                        <label class="col-sm-3 col-form-label">Preu</label>
                                                        <input type="text" class="col-sm-9 form-control" placeholder="1250.00€">
                                                    </div>
                                                    <div class="form-row">
                                                        <label class="col-sm-3 col-form-label">IRPF</label>
                                                        <input type="text" class="col-sm-9 form-control" placeholder="15%">
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-sm-3"></label>
                                                        <div class="col-sm-9">
                                                            <button type="submit" class="btn btn-primary m-b-0 guardar-nou">Guardar</button>
                                                            <a href="#" class="btn btn-danger m-b-0 print">Imprimir</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <!-- Invoice card start --
                                        <div class="card col-sm-8 factura">
                                            <div class="row invoice-contact">
                                                <div class="col-md-8">
                                                    <div class="invoice-box row">
                                                        <div class="col-sm-12">
                                                            <table class="table table-responsive invoice-table table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td><img src="..\files\assets\images\logo-blue.png" class="m-b-10" alt=""></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Compney Name</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>123 6th St. Melbourne, FL 32904 West Chicago, IL 60185</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><a href="..\..\..\cdn-cgi\l\email-protection.htm#99fdfcf4f6d9fef4f8f0f5b7faf6f4" target="_top"><span class="__cf_email__" data-cfemail="690d0c0406290e04080005470a0604">[email&#160;protected]</span></a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>+91 919-91-91-919</td>
                                                                    </tr>
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                </div>
                                            </div>
                                            <div class="card-block">
                                                <div class="row invoive-info">
                                                    <div class="col-md-4 col-xs-12 invoice-client-info">
                                                        <h6>Client Information :</h6>
                                                        <h6 class="m-0">Josephin Villa</h6>
                                                        <p class="m-0 m-t-10">123 6th St. Melbourne, FL 32904 West Chicago, IL 60185</p>
                                                        <p class="m-0">(1234) - 567891</p>
                                                        <p><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="eb8f8e8684ab939291c5888486">[email&#160;protected]</a></p>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <h6>Order Information :</h6>
                                                        <table class="table table-responsive invoice-table invoice-order table-borderless">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Date :</th>
                                                                    <td>November 14</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Status :</th>
                                                                    <td>
                                                                        <span class="label label-warning">Pending</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Id :</th>
                                                                    <td>
                                                                        #145698
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <h6 class="m-b-20">Invoice Number <span>#12398521473</span></h6>
                                                        <h6 class="text-uppercase text-primary">Total Due :
                                                            <span>$900.00</span>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="table-responsive">
                                                            <table class="table  invoice-detail-table">
                                                                <thead>
                                                                    <tr class="thead-default">
                                                                        <th>Description</th>
                                                                        <th>Quantity</th>
                                                                        <th>Amount</th>
                                                                        <th>Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <h6>Logo Design</h6>
                                                                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                                                                        </td>
                                                                        <td>6</td>
                                                                        <td>$200.00</td>
                                                                        <td>$1200.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <h6>Logo Design</h6>
                                                                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                                                                        </td>
                                                                        <td>7</td>
                                                                        <td>$100.00</td>
                                                                        <td>$700.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <h6>Logo Design</h6>
                                                                            <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
                                                                        </td>
                                                                        <td>5</td>
                                                                        <td>$150.00</td>
                                                                        <td>$750.00</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table class="table table-responsive invoice-table invoice-total">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Sub Total :</th>
                                                                    <td>$4725.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Taxes (10%) :</th>
                                                                    <td>$57.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Discount (5%) :</th>
                                                                    <td>$45.00</td>
                                                                </tr>
                                                                <tr class="text-info">
                                                                    <td>
                                                                        <hr>
                                                                        <h5 class="text-primary">Total :</h5>
                                                                    </td>
                                                                    <td>
                                                                        <hr>
                                                                        <h5 class="text-primary">$4827.00</h5>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <h6>Terms And Condition :</h6>
                                                        <p>lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script data-cfasync="false" src="..\..\..\cdn-cgi\scripts\5c5dd728\cloudflare-static\email-decode.min.js"></script><script type="text/javascript" src="..\files\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="..\files\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="..\files\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="..\files\bower_components\modernizr\js\modernizr.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="..\files\bower_components\chart.js\js\Chart.js"></script>
    <!-- amchart js -->
    <script src="..\files\assets\pages\widget\amchart\amcharts.js"></script>
    <script src="..\files\assets\pages\widget\amchart\serial.js"></script>
    <script src="..\files\assets\pages\widget\amchart\light.js"></script>
    <script src="..\files\assets\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="..\files\assets\js\SmoothScroll.js"></script>
    <script src="..\files\assets\js\pcoded.min.js"></script>
    <!-- custom js -->
    <script src="..\files\assets\js\vartical-layout.min.js"></script>
    <script type="text/javascript" src="..\files\assets\pages\dashboard\custom-dashboard.js"></script>
    <script type="text/javascript" src="..\files\assets\js\script.min.js"></script>
</body>

</html>
