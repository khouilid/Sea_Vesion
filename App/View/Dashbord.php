<?php include '../Control/Get.vessel.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sea Vision</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/css/main.css">
    <script src="https://kit.fontawesome.com/d257b03b55.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <nav class='d-flex justify-content-between align-items-center p-2'>
        <div>
            <a class="navbar-brand " href="../../index.php">
            <img class='dash_logo' src="../../src\img\iPhone X-XS-11 Pro – 2.png" height='60' alt="logo" loading="lazy">
            </a>
        </div>
        <div>
            <h3 class='ml-3 '><i class="fas text-white fa-sign-out-alt ml-3"></i></h3>
        </div>
    </nav>
    <div class="dashbord_header d-flex flex-column  flex-lg-row">
    <!-- menu -->
        <div class='dashbord_menu  d-flex flex-lg-column flex-row ' >
            <button id="overview_btn" onclick='menu(1)' class='text-white p-3'>OVERVIEW</button>
            <button id='Vessel_program_btn' onclick='menu(2)' class='text-white p-3'>VESSEL PROGRAME</button>
            <!-- //TODO #3 create Finance dashbord -->
            <button class='text-white p-3' onclick='menu(3)'>FINANCE</button>
            <button class='text-white p-3' onclick='menu(4)'>OPERATIONS</button>
            <button class='text-white p-3' onclick='menu(6)'>LINE UP</button>
            
        </div>



        <div class='dashbord_header_main'>
             <!-- overview dashbord -->
            <div id='Overview' >
               <?php include 'includes/OVERVIEW.php'; ?>
            </div>


            <!-- vessel program dasbord -->
            <div id='Vessel_program' style='display:none;'>
                <?php include 'includes/Vessel_program.php'; ?>
            </div>


            <!-- operation dashbord -->
            <div id='Operation' style='display:none;'>
                <?php include 'includes/Operations.php'; ?>
            </div>


            <!-- Add new vessel dashbord -->
            <div id='line_up' style='display:none;'>
                <?php include 'includes/NEW_VESSEL.php'; ?>
            </div>


            <!-- line up dashord -->
            <div id='line_up1' style='display:none;'>
                <?php include 'includes/LINE_UP.php'; ?>
            </div>

        </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="../../src/js/dashbord.js"></script>
</body>
</html>