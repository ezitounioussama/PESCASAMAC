<?php
require_once('inc/header.php');

require_once "../inc/db.php";
?>

<style>
    .sweetalert {
        width: 300px;
        height: 100px;
    }

    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_processing,
    .dataTables_wrapper .dataTables_paginate {
        margin: 15px;
    }

    .dataTables_wrapper .dataTables_filter input {

        border-radius: 20px;
        padding: 5px;
    }
</style>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand d-flex align-items-center m-0" href="./home.php">
            <span class="font-weight-bold text-lg">Admin Page</span>
        </a>
    </div>
    <div class="collapse navbar-collapse px-4  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link " href="./home.php">
                    <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <svg width="30px" height="30px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Orders table</title>
                            <g id="dashboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="template" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <path class="color-foreground" d="M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 L24,5.14285714 C24,6.08962286 23.2325143,6.85714286 22.2857143,6.85714286 L1.71428571,6.85714286 C0.76752,6.85714286 0,6.08962286 0,5.14285714 L0,1.71428571 Z" id="Path"></path>
                                    <path class="color-background" d="M0,12 C0,11.0532171 0.76752,10.2857143 1.71428571,10.2857143 L12,10.2857143 C12.9468,10.2857143 13.7142857,11.0532171 13.7142857,12 L13.7142857,22.2857143 C13.7142857,23.2325143 12.9468,24 12,24 L1.71428571,24 C0.76752,24 0,23.2325143 0,22.2857143 L0,12 Z" id="Path"></path>
                                    <path class="color-background" d="M18.8571429,10.2857143 C17.9103429,10.2857143 17.1428571,11.0532171 17.1428571,12 L17.1428571,22.2857143 C17.1428571,23.2325143 17.9103429,24 18.8571429,24 L22.2857143,24 C23.2325143,24 24,23.2325143 24,22.2857143 L24,12 C24,11.0532171 23.2325143,10.2857143 22.2857143,10.2857143 L18.8571429,10.2857143 Z" id="Path"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Products</span>

                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link active" href="./order.php">
                    <div class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center">
                        <svg width="30px" height="30px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Orders table</title>
                            <g id="dashboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="template" transform="translate(12.000000, 12.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <path class="color-foreground" d="M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 L24,5.14285714 C24,6.08962286 23.2325143,6.85714286 22.2857143,6.85714286 L1.71428571,6.85714286 C0.76752,6.85714286 0,6.08962286 0,5.14285714 L0,1.71428571 Z" id="Path"></path>
                                    <path class="color-background" d="M0,12 C0,11.0532171 0.76752,10.2857143 1.71428571,10.2857143 L12,10.2857143 C12.9468,10.2857143 13.7142857,11.0532171 13.7142857,12 L13.7142857,22.2857143 C13.7142857,23.2325143 12.9468,24 12,24 L1.71428571,24 C0.76752,24 0,23.2325143 0,22.2857143 L0,12 Z" id="Path"></path>
                                    <path class="color-background" d="M18.8571429,10.2857143 C17.9103429,10.2857143 17.1428571,11.0532171 17.1428571,12 L17.1428571,22.2857143 C17.1428571,23.2325143 17.9103429,24 18.8571429,24 L22.2857143,24 C23.2325143,24 24,23.2325143 24,22.2857143 L24,12 C24,11.0532171 23.2325143,10.2857143 22.2857143,10.2857143 L18.8571429,10.2857143 Z" id="Path"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="nav-link-text ms-1">Orders</span>

                </a>
            </li>
        </ul>
    </div>

</aside>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="navbarBlur" navbar-scroll="true">
        <div class="container-fluid py-1 px-2">
            <nav aria-label="breadcrumb">

                <h6 class="font-weight-bold mb-0">Orders table</h6>

            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item ps-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <img src="./assets/img/team-2.jpg" class="avatar avatar-sm" alt="avatar" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4 px-5">

        <div class="row">
            <form action="inc/approve.php" method="post">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">


                        <div class="card-body px-0 py-0">
                            <?php
                            $sql = "SELECT first_name,last_name, email ,phone ,adresse ,frais, payment ,GROUP_CONCAT(product_name separator '<hr>')
                        AS products_list,GROUP_CONCAT(product_calibre separator '<hr>') 
                        AS products_calibre ,GROUP_CONCAT(product_trtmt separator '<hr>') 
                        AS products_trtmt,GROUP_CONCAT(product_price separator '<hr>') 
                        AS price ,GROUP_CONCAT(product_quantity separator '<hr>') 
                        AS qty FROM  tbl_orders GROUP BY email";
                            $result = $conn->query($sql);
                            ?>

                            <div class="table-responsive p-0 m-0">
                                <table class="table align-items-center mb-0" id="example">
                                    <thead class="bg-gray-100">

                                        <tr>

                                            <th class="text-secondary text-xs font-weight-semibold opacity-9 w-32">FullName</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-9">Email</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-9">Phone</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-9">Address</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-9">Frais de livraison</th>
                                            <th class="text-secondary text-xs font-weight-semibold opacity-9">Products list</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Calibre</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Traitement</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Price</th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Quantity</th>


                                            <th class="text-secondary opacity-7"></th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php

                                        if ($result->num_rows > 0) {

                                            while ($row = $result->fetch_assoc()) {

                                        ?>

                                                <tr>

                                                    <td>
                                                        <span class="badge badge-lg border border-success text-success bg-success"><?php echo $row['first_name'] . ' ' . $row['last_name'] ?></span>
                                                        <input type="hidden" name="fullName" value="<?php echo $row['first_name'] . ' ' . $row['last_name'] ?>">
                                                    </td>

                                                    <td class="align-middle text-left text-lg">
                                                        <span class="text-secondary text-sm font-weight-normal"><?php echo $row['email'] ?></span>
                                                        <input type="hidden" name="email" value="<?php echo $row['email'] ?>">
                                                    </td>

                                                    <td class="align-middle text-left text-lg">
                                                        <span class="text-secondary text-sm font-weight-normal"><?php echo $row['phone'] ?></span>
                                                    </td>
                                                    <td class="align-middle text-left text-lg">
                                                        <span class="text-secondary text-sm font-weight-normal"><?php echo $row['adresse'] ?></span>
                                                    </td>
                                                    <td class="align-middle text-left text-lg">
                                                        <span class="text-secondary text-sm font-weight-normal"><?php echo $row['frais'] ?></span>
                                                    </td>
                                                    <td class="align-middle text-left text-lg">
                                                        <span class="badge badge-lg border border-success text-success bg-success"><?php echo $row['products_list'] ?></span>
                                                    </td>

                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-sm font-weight-normal"><?php echo $row['products_calibre'] ?></span>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-sm font-weight-normal"><?php echo $row['products_trtmt'] ?></span>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-sm font-weight-normal"><?php echo $row['price'] ?></span>
                                                    </td>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-sm font-weight-normal"><?php echo $row['qty'] ?></span>
                                                    </td>

                                                    <td class="align-middle">

                                                        <button class="border-none rounded-md p-2 text-white bg-transparent border border-0" name="approve">


                                                            <svg width='20' height='20' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                <path d="M374.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 178.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l80 80c12.5 12.5 32.8 12.5 45.3 0l160-160zm96 128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 402.7 86.6 297.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l256-256z" />
                                                            </svg></button>
                                                        <a href="inc/delete.php?email=<?php echo $row['email'] ?>">
                                                            <svg width='20' height='20' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                                <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                                            </svg>
                                                        </a>

                                                    </td>

                                                </tr>
                                        <?php       }
                                        }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-top py-3 px-3 d-flex align-items-center">

                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>
</main>

<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<?php
require_once('inc/footer.php');
?>