<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
    <title>Poisson Congeles</title>
</head>

<body class="container-fluid ">
    <?php



    if (isset($_GET['id'])) {
        include "../../inc/db.php";
        $id = $_GET['id'];

        $sql = "SELECT * FROM `tbl_products` WHERE `id`='$id'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

                $name = $row['name'];


                $pic = $row['pic'];

                $c1 = $row['c1'];

                $c2  = $row['c2'];
                $c3 = $row['c3'];

                $c4  = $row['c4'];
                $c5  = $row['c5'];

                $t1 = $row['t1'];

                $t2 = $row['t2'];

                $id = $row['id'];
            }


            if (isset($_POST['update'])) {

                $name = $_POST['name'];

                $pic = $_POST['pic'];

                $c1 = $_POST['c1'];

                $c2 = $_POST['c2'];
                $c3 = $_POST['c3'];

                $c4 = $_POST['c4'];
                $c5 = $_POST['c5'];

                $t1 = $_POST['t1'];

                $t2 = $_POST['t2'];

                $sql = "UPDATE `tbl_products` SET `name`='$name',`pic`='$pic',`c1`='$c1',`c2`='$c2',`c3`='$c3',`c4`='$c4',`c5`='$c5',`t1`='$t1' ,`t2`='$t2' WHERE `id`='$id'";

                $result = $conn->query($sql);

                if ($result == TRUE) {

                    header('Location: ../home.php');
                } else {

                    echo "Error:" . $sql . "<br>" . $conn->error;
                }
            }
    ?>
            <form action="" method="post" class="mx-3 my-2">
                <div class="p-5 text-center">
                    <h1 class="mb-3">Update <?php echo $name; ?> </h1>
                </div>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" id="form6Example1" class="form-control" value="<?php echo $name; ?>" name="name" />
                            <label class="form-label" for="form6Example1"><?php echo $name; ?></label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline" hidden>
                            <input type="hidden" id="form6Example2" class="form-control" value="<?php echo $id; ?>" name="id" />

                        </div>
                    </div>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example3" class="form-control" value="<?php echo $pic; ?>" name="pic" />
                    <label class=" form-label" for="form6Example3">Picture</label>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example4" class="form-control" value="<?php echo $c1; ?>" name="c1" />
                    <label class=" form-label" for="form6Example4">Calibre 1</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example5" class="form-control" value="<?php echo $c2; ?>" name="c2" />
                    <label class=" form-label" for="form6Example5">Calibre 2</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example5" class="form-control" value="<?php echo $c3; ?>" name="c3" />
                    <label class=" form-label" for="form6Example5">Calibre 3</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example5" class="form-control" value="<?php echo $c4; ?>" name="c4" />
                    <label class=" form-label" for="form6Example5">Calibre 4</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example5" class="form-control" value="<?php echo $c5; ?>" name="c5" />
                    <label class=" form-label" for="form6Example5">Calibre 5</label>
                </div>

                <!-- Number input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example6" class="form-control" value="<?php echo $t1; ?>" name="t1" />
                    <label class=" form-label" for="form6Example6">Conditionnement 1</label>
                </div>

                <!-- Number input -->
                <div class="form-outline mb-4">
                    <input type="text" id="form6Example6" class="form-control" value="<?php echo $t2; ?>" name="t2" />
                    <label class=" form-label" for="form6Example6">Conditionnement 2</label>
                </div>



                <!-- Submit button -->
                <input type="submit" class="btn btn-primary  mb-4" value="Submit" name="update">
            </form>


    <?php

        } else {

            header('Location: view.php');
        }
    }


    ?>


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</body>

</html>