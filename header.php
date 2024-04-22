<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Parkiru is a Responsive Bootstrap 4 Admin Dashboard Aplikasi Parkir, UI Kits with SCSS.">
    <meta name="keywords" content="admin template, dashboard template, ui kits, web app, crm, cms, responsive, bootstrap 4, html, sass support, scss">
    <meta name="author" content="Ichlas Wardy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Parkiru.com</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/images/favicon.ico">

    <!-- DataTables CSS -->
    <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Start CSS -->
    <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- End CSS -->

</head>

<body class="xp-horizontal">
