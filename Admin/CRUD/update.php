<?php



if (isset($_GET['id'])) {
    include "../../inc/db.php";
    $id = $_GET['id'];

    $sql = "SELECT * FROM `p_congele` WHERE `id`='$id'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];


            $pic = $row['pic'];

            $c1 = $row['c1'];

            $c2  = $row['c2'];

            $t1 = $row['t1'];

            $t2 = $row['t2'];

            $id = $row['id'];
        }


        if (isset($_POST['update'])) {

            $name = $_POST['name'];

            $pic = $_POST['pic'];

            $c1 = $_POST['c1'];

            $c2 = $_POST['c2'];

            $t1 = $_POST['t1'];

            $t2 = $_POST['t2'];

            $sql = "UPDATE `p_congele` SET `name`='$name',`pic`='$pic',`c1`='$c1',`c2`='$c2',`t1`='$t1' ,`t2`='$t2' WHERE `id`='$id'";

            $result = $conn->query($sql);

            if ($result == TRUE) {

                echo "Record updated successfully.";
            } else {

                echo "Error:" . $sql . "<br>" . $conn->error;
            }
        }
?>

        <h2>User Update Form</h2>

        <form action="" method="post">

            <fieldset>

                <legend>Personal information:</legend>

                First name:<br>

                <input type="text" name="name" value="<?php echo $name; ?>">

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <br>

                Last name:<br>

                <input type="text" name="pic" value="<?php echo $pic; ?>">

                <br>

                Email:<br>

                <input type="text" name="c1" value="<?php echo $c1; ?>">

                <br>

                Password:<br>

                <input type="text" name="c2" value="<?php echo $c2; ?>">

                <br>

                t1:<br>

                <input type="text" name="t1" value="<?php echo $t1; ?>">

                <br>
                t2:<br>

                <input type="text" name="t2" value="<?php echo $t2; ?>">

                <br>

                <input type="submit" value="Update" name="update">

            </fieldset>

        </form>

        </body>

        </html>

<?php

    } else {

        header('Location: view.php');
    }
}

?>