<?php
include 'include/connection.php'


?>


<!DOCTYPE html>
<html lang="en">

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
<title> &mdash; CodeSmesher</title>

<?php
include 'include/style.php'


?>
</head>

<body class="layout-4">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        
        <!-- Start app top navbar -->
        <?php include 'include/navbar.php';?>
        <!-- Start main left sidebar menu -->
       <?php
       include 'include/sidebarcontent.php';
       ?>

        <!-- Start app main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Welcome to Code Smasher</h1>
                </div>

                <div class="section-body">
                </div>
            </section>
        </div>

        <?php
        include 'include/footer.php'
        ?>
    </div>
</div>

<?php include 'include/script.php'; ?>
</body>

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->
</html>