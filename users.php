<?php
include 'include/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title> &mdash; CodeSmesher</title>

    <?php

    include 'include/style.php '
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
            <?php
            include 'include/navbar.php';
            ?>
            <!-- Start main left sidebar menu -->
            <?php
            include 'include/sidebarcontent.php';
            ?>

            <!-- Start app main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>All Users</h1>

                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-user">Creat User</i></a>
                                    </div>
                                    <div class="card-body">
                                        <?php
                                        $q = "SELECT * from `user1`;";
                                        $result = mysqli_query($conn, $q);
                                        ?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">First Name</th>
                                                    <th scope="col">Last Name</th>
                                                    <th scope="col">Gender</th>
                                                    <th scope="col">Date of Birth</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>

                                                    <tr>
                                                        <th scope="row"><?=$row["user_id"]?></th>
                                                        <td><?=$row["first_name"]?></td>
                                                        <td><?=$row["last_name"]?></td>
                                                        <td><?=$row["gender"]?></td>
                                                        <td><?=$row["date_of_birth"]?></td>
                                                        <td>


                                                            <a href="https://google.com"><button type="button" class="btn btn-warning">
                                                                    <i class="fa-solid fa-pencil"></i>
                                                                </button></a>

                                                            <a href="https://google.com"><button type="button" class="btn btn-danger">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button></a>


                                                        </td>
                                                    </tr>

                                                <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php
            include 'include/footer.php';
            ?>
        </div>
    </div>

    <?php

    include 'include/script.php';


    ?>
</body>

<!-- blank.html  Tue, 07 Jan 2020 03:35:42 GMT -->

</html>

<li><a href=""></a></li>
<button><a href="https//.google"></a></button>