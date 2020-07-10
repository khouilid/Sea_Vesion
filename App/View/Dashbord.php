
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../src/css/main.css">
    <script src="https://kit.fontawesome.com/d257b03b55.js" crossorigin="anonymous"></script>

</head>
<body>
    <nav class='d-flex justify-content-between align-items-center p-2'>
        <div>
            <a class="navbar-brand " href="../../index.php">
            <img class='dash_logo' src="../../src\img\iPhone X-XS-11 Pro – 2.png" height='60' alt="logo" loading="lazy">
            </a>
        </div>
        <div>
            <h1><i class="fas text-white fa-sign-out-alt"></i></h1>
        </div>
    </nav>
    <div class="dashbord_header d-flex flex-column  flex-lg-row">
    <!-- menu -->
        <div class='dashbord_menu  d-flex flex-lg-column flex-row ' >
            <button id="overview_btn" onclick='menu(1)' class='text-white p-3'>OVERVIEW</button>
            <button id='Vessel_program_btn' onclick='menu(2)' class='text-white p-3'>VESSEL PROGRAME</button>
            <button class='text-white p-3'>FINANCE</button>
            <button class='text-white p-3'>OPERATIONS</button>
        </div>
        <div class='dashbord_header_main '>
        <!-- overview dashbord -->
            <div id='Overview' >
            <?php include 'OVERVIEW.php'; ?>
            
            </div>
            <!-- vessel program dasbord -->
            <div id='Vessel_program' style='display:none;'>
                <?php include 'Vessel_program.php'; ?>
            </div>
        </div>
    </div>
    



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="../../src/js/dashbord.js"></script>
</body>
</html>