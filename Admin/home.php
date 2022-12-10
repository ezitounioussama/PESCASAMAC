<?php
require_once('inc_Pcongele/header.php');
require_once('inc_Pcongele/nav.php');
include "../inc/db.php";

?>

<!-- custom style for sweetalert-->
<style>
    .sweetalert {
        width: 300px;
        height: 100px;



    }
</style>

<!-- Insert statement -->

<?php

include "../inc/db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $pic = $_POST['pic'];

    $c1 = $_POST['c1'];

    $c2 = $_POST['c2'];

    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];

    $sql = "INSERT INTO `tbl_products`(`name`, `pic`, `c1`, `c2`, `t1` , `t2`) VALUES 
    ('$name','$pic','$c1','$c2','$t1','$t2')";

    $result = $conn->query($sql);

    if ($result == TRUE) { ?>
        <script>
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('Record Added successfully');
        </script>
<?php  } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<!-- Delete statement  -->
<?php

include "../inc/db.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM `tbl_products` WHERE `id`='$id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
?>
        <!-- sweetAlert -->

        <script>
            alertify.set('notifier', 'position', 'top-right');
            alertify.error('Record deleted successfully ');
        </script>
<?php

    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}
?>

<!-- Update statement -->




<div class="container-fluid py-4 px-5">

    <div class="row">
        <div class="col-12">
            <div class="card border shadow-xs mb-4">
                <div class="card-header border-bottom pb-0">
                    <div class="d-sm-flex align-items-center">

                        <div class="ms-auto d-flex">

                            <button type="button" data-mdb-toggle="modal" data-mdb-target="#exampleModal" class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2">
                                <span class="btn-inner--icon">
                                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                                        <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z" />
                                    </svg>
                                </span>
                                <span class="btn-inner--text">Add Something</span>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Insert the new product data</h5>
                                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="name" name="name" class="form-control" />
                                                            <label class="form-label" for="name">name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="pic" name="pic" class="form-control" />
                                                            <label class="form-label" for="pic">pic</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Text input -->
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="c1" name="c1" class="form-control" />
                                                            <label class="form-label" for="c1">c1</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="c2" name="c2" class="form-control" />
                                                            <label class="form-label" for="c2">c2</label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Text input -->
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="c3" name="c3" class="form-control" />
                                                            <label class="form-label" for="c3">c3</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="c4" name="c4" class="form-control" />
                                                            <label class="form-label" for="c4">c4</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- text input -->
                                                <div class="form-outline mb-4">
                                                    <input type="text" id="c5" name="c5" class="form-control" />
                                                    <label class="form-label" for="c5">c5</label>
                                                </div>

                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="t1" name="t1" class="form-control" />
                                                            <label class="form-label" for="t1">t1</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="t2" name="t2" class="form-control" />
                                                            <label class="form-label" for="t2">t2</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Text input -->
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="t3" name="t3" class="form-control" />
                                                            <label class="form-label" for="t3">t3</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="t4" name="t4" class="form-control" />
                                                            <label class="form-label" for="t4">t4</label>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Text input -->
                                                <div class="row mb-4">
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="t5" name="t5" class="form-control" />
                                                            <label class="form-label" for="t5">t5</label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <input type="text" id="t6" name="t6" class="form-control" />
                                                            <label class="form-label" for="t6">t6</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                                                    <button type="submit" name="submit" class="btn btn-primary">ADD</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body px-0 py-0">
                    <div class="border-bottom py-3 px-3 d-sm-flex align-items-center">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable1" autocomplete="off" checked="">
                                <label class="btn btn-white px-3 mb-0" for="btnradiotable1">All</label>
                                <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable2" autocomplete="off">
                                <label class="btn btn-white px-3 mb-0" for="btnradiotable2">P_congele</label>
                                <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable3" autocomplete="off">
                                <label class="btn btn-white px-3 mb-0" for="btnradiotable3">P_frais</label>
                                <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable4" autocomplete="off">
                                <label class="btn btn-white px-3 mb-0" for="btnradiotable4">Accompagnement</label>
                                <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable5" autocomplete="off">
                                <label class="btn btn-white px-3 mb-0" for="btnradiotable5">ChairAraignee</label>
                                <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable6" autocomplete="off">
                                <label class="btn btn-white px-3 mb-0" for="btnradiotable6">Crustaces</label>
                                <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable7" autocomplete="off">
                                <label class="btn btn-white px-3 mb-0" for="btnradiotable7">Fruit_Mer</label>
                                <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable8" autocomplete="off">
                                <label class="btn btn-white px-3 mb-0" for="btnradiotable8">Tarama</label>
                                <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable9" autocomplete="off">
                                <label class="btn btn-white px-3 mb-0" for="btnradiotable9">Coquillage</label>

                            </div>
                        </form>
                        <!-- <div class="input-group w-sm-25 ms-auto">
                            <span class="input-group-text text-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                                </svg>
                            </span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div> -->
                    </div>
                    <?php
                    $sql = "SELECT * FROM tbl_products ";
                    $result = $conn->query($sql);
                    ?>
                    <div class="table-responsive p-0 m-0">
                        <table class="table align-items-center mb-0">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="text-secondary opacity-7">Category</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-9 w-32">Name</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-9">Calibre 1</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-9">Calibre 2</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-9">Calibre 3</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-9">Calibre 4</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-9">Calibre 5</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Traitement 1</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Traitement 2</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Traitement 3</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Traitement 4</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Traitement 5</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Traitement 6</th>
                                    <th class="text-secondary opacity-7">Price</th>

                                    <th class="text-secondary opacity-7"></th>
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
                                                <span class="badge badge-lg border border-success text-success bg-success"><?php echo $row['category']; ?></span>
                                            </td>
                                            <td>
                                                <div class="d-flex px-1 py-1">
                                                    <div class="d-flex align-items-center">
                                                        <img src="../img/<?php echo $row['pic']; ?>" class="avatar avatar-sm rounded-circle me-2" alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center ms-1">
                                                        <h6 class="mb-0 text-sm font-weight-semibold"><?php echo $row['name']; ?></h6>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle text-left text-lg">
                                                <span class="badge badge-lg border border-success text-success bg-success"><?php echo $row['c1']; ?></span>
                                            </td>
                                            <td class="align-middle text-left text-lg">
                                                <span class="badge badge-lg border border-success text-success bg-success"><?php echo $row['c2']; ?></span>
                                            </td>
                                            <td class="align-middle text-left text-lg">
                                                <span class="badge badge-lg border border-success text-success bg-success"><?php echo $row['c3']; ?></span>
                                            </td>
                                            <td class="align-middle text-left text-lg">
                                                <span class="badge badge-lg border border-success text-success bg-success"><?php echo $row['c4']; ?></span>
                                            </td>
                                            <td class="align-middle text-left text-lg">
                                                <span class="badge badge-lg border border-success text-success bg-success"><?php echo $row['c5']; ?></span>
                                            </td>

                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-sm font-weight-normal"><?php echo $row['t1']; ?></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-sm font-weight-normal"><?php echo $row['t2']; ?></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-sm font-weight-normal"><?php echo $row['t3']; ?></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-sm font-weight-normal"><?php echo $row['t4']; ?></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-sm font-weight-normal"><?php echo $row['t5']; ?></span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-sm font-weight-normal"><?php echo $row['t6']; ?></span>
                                            </td>

                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-sm font-weight-normal"><?php echo $row['price']; ?></span>
                                            </td>
                                            <td class="align-middle">
                                                <a href=' inc_Pcongele/update.php?id=<?php echo $row["id"]; ?>' class=" text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Edit data">
                                                    <svg width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B" />
                                                    </svg>
                                                </a>

                                            </td>
                                            <td class="align-middle">

                                                <a href="?id=<?php echo $row['id']; ?>" class=" text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="delete data">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="black" width="16" height="16">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
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
    </div>


</div>
</main>



<?php require_once('inc_Pcongele/footer.php') ?>