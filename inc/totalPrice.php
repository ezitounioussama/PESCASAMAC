<?php
$sumSqlStaitemnet = $conn->query("select sum(price) as value_sum , sum(quantity) as value_qty from cart");
$row = mysqli_fetch_assoc($sumSqlStaitemnet);

$sum = $row['value_sum'];
$sumqty = $row['value_qty'];
$sum = number_format((float)$sum, 2, '.', '');
