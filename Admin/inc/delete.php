<?php


require_once('../../inc/db.php');


$email = $_GET['email']; // get id through query string

$del = mysqli_query($conn, "delete from tbl_orders where email = '$email'"); // delete query

if ($del) {
    mysqli_close($conn); // Close connection
    header("location:../order.php"); // redirects to all records page 

    exit;
} else {
    echo "Error deleting record"; // display error message if not delete
}
