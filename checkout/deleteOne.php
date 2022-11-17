<?php



$db = mysqli_connect("localhost", "root", "", "pescasamac");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}



$name = $_GET['name']; // get id through query string

$del = mysqli_query($db, "delete from cart where name = '$name'"); // delete query

if ($del) {
    mysqli_close($db); // Close connection
    header("location:checkout.php"); // redirects to all records page 
    print "<script>
    alertify.set('notifier', 'position', 'top-right');
    alertify.success('You delete one item from Cart!');
</script>";
    exit;
} else {
    echo "Error deleting record"; // display error message if not delete
}
