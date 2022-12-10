<?php

include "../../inc/db.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $pic = $_POST['pic'];

    $c1 = $_POST['c1'];

    $c2 = $_POST['c2'];

    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];

    $sql = "INSERT INTO `p_congele`(`name`, `pic`, `c1`, `c2`, `t1` , `t2`) VALUES 
    ('$name','$pic','$c1','$c2','$t1','$t2')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

        echo "New record created successfully.";
    } else {

        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>

<html>

<body>

    <h2>Signup Form</h2>

    <form action="" method="POST">

        <fieldset>

            <legend>Personal information:</legend>

            name:<br>

            <input type="text" name="name">

            <br>

            pic:<br>

            <input type="text" name="pic">

            <br>

            c1:<br>

            <input type="text" name="c1">

            <br>

            c2:<br>

            <input type="text" name="c2">

            <br>
            t1:<br>

            <input type="text" name="t1">

            <br>
            t2:<br>

            <input type="text" name="t2">

            <br>



            <br><br>

            <input type="submit" name="submit" value="submit">

        </fieldset>

    </form>

</body>

</html>