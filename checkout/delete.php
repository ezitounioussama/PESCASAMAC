<?php // sql to delete a record
$conn = new PDO('mysql:host=localhost;dbname=pescasamac', 'root', '');
if (!$conn) {
    die("Fatal Error: Connection Failed!");
}


$query = $conn->prepare("DELETE from `cart`");
$query->execute();
header("location:checkout.php");
?>
<script>
    alertify.set('notifier', 'position', 'top-right');
    alertify.success('You delete a;; pf your products from Cart!');
    location.replace("checkout.php");
</script>