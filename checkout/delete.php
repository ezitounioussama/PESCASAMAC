<?php // sql to delete a record
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn = new PDO('mysql:host=localhost;dbname=pescasamac', 'root', '');
if (!$conn) {
    die("Fatal Error: Connection Failed!");
}

if (isset($_POST['deleteAll'])) {
    $query = $conn->prepare("DELETE from `cart`");
    $query->execute();
    header("location:checkout.php");
}
?>
<script>
    alertify.set('notifier', 'position', 'top-right');
    alertify.success('You delete all of your products from Cart!');
</script>