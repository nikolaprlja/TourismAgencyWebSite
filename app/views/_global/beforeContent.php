<!DOCTYPE html>
<html>
    <head>
        <title>Touristiqo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo Misc::link ('assets/bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet"/>
        <link href="<?php echo Misc::link ('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet"/>
        <link href="<?php echo Misc::link ('assets/css/main.css'); ?>" rel="stylesheet">
        <link href="<?php echo Misc::link ('assets/css/hover.css'); ?>" rel="stylesheet"/>
        <link href="<?php echo Misc::link ('assets/css/mobile.css'); ?>" rel="stylesheet"/>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/hover-box.js"></script>
    </head>
    <body>
        <header>
            <div class="wrapper">
            <div class="hidden-sm hidden-xs">
                <img src="<?php echo Misc::link('assets/img/sajtbaner.jpg'); ?>" alt="Banner">
            </div>
            </div>
        </header>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <?php if (Session::exists('user_id')): ?>
                        <?php include 'app/views/_global/menu-session.php'; ?>
                    <?php else: ?>
                        <?php include 'app/views/_global/menu-no-session.php'; ?>
                    <?php endif; ?>
                                  