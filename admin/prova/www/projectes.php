﻿<!DOCTYPE html>
<html lang="ca">
    <head>
    <!-- Meta data -->
    <?php include_once("sections/meta.php"); ?>

    <!-- Títol i Favicons -->
    <title>Agustí Roig | Projectes</title>

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
                                                    <h4>Projectes</h4>
                                                    <span>Es mostren tots els projectes acceptats.</span>
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
                                                    <li class="breadcrumb-item"><a href="#">Projectes</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->

                                    <div class="page-body">
                                        
                                        <div class="row">
                                            <div class="card col-lg-12">
                                            <div class="card-header">
                                            </div>
                                            <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                    <table id="table-style-hover" class="table table-striped table-hover table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Exp</th>
                                                                <th>Estat</th>
                                                                <th>Data</th>
                                                                <th>Nom</th>
                                                                <th>Ciutat</th>
                                                                <th>Client</th>
                                                                <th>Oferta</th>
                                                                <th>Benefici</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
                                                            require("../../conexiones/conexion.php");
                                                            $projectes = $database->select("administracio", ["id","exp","estat","data","nom","ciutat","id-client"]);
                                                            foreach($projectes as $data){
                                                              $clients = $database->select("clients", ["id","nom"], ["id" => $data['id-client']]);
                                                              $ofertes = $database->select("ofertes", ["id","preu","estat"], ["id-projecte" => $data['id']]);
                                                              foreach($clients as $client){
                                                                  $nomclient = $client['nom'];
                                                              }
                                                              $preu = 0;
                                                              foreach($ofertes as $oferta){
                                                                if($oferta['estat'] != "no acceptat"){
                                                                  $preu = $preu + $oferta['preu'];
                                                                }
                                                              }
                                                              $preunet = $preu*0.85;
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $data['id'];?></td>
                                                                <td class="numero"><?php echo $data['exp'];?></td>
                                                                <td class="numero"><?php echo ucfirst($data['estat']);?></td>
                                                                <td class="numero"><?php echo $data['data'];?></td>
                                                                <td><?php echo $data['nom'];?></td>
                                                                <td><?php echo $data['ciutat'];?></td>
                                                                <td><?php echo $nomclient;?></td>
                                                                <td class="numero"><?php echo number_format($preu,2);?>€</td>
                                                                <td class="numero"><?php echo number_format($preunet,2);?>€</td>
                                                            </tr>

                                                            <?php } ?>
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
