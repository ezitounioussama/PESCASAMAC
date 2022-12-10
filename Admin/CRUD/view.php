<?php

include "../../inc/db.php";

$sql = "SELECT * FROM p_congele";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>poisson</h2>

        <table class="table">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>Name</th>

                    <th>Pic</th>

                    <th>Calibre 1</th>

                    <th>Calibre 2</th>

                    <th>Trtm 1</th>

                    <th>Trtm 2</th>

                </tr>

            </thead>

            <tbody>

                <?php

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                ?>

                        <tr>

                            <td><?php echo $row['id']; ?></td>

                            <td><?php echo $row['name']; ?></td>

                            <td><?php echo $row['pic']; ?></td>

                            <td><?php echo $row['c1']; ?></td>

                            <td><?php echo $row['c2']; ?></td>

                            <td><?php echo $row['t1']; ?></td>

                            <td><?php echo $row['t2']; ?></td>

                            <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                        </tr>

                <?php       }
                }

                ?>

            </tbody>

        </table>

    </div>

</body>

</html>