<?php
$sumSqlStaitemnet = $conn->query("select sum(price * quantity) as value_sum from cart");
$row = mysqli_fetch_assoc($sumSqlStaitemnet);


$sum = $row['value_sum'];
$sum = number_format((float)$sum, 2, '.', '');
