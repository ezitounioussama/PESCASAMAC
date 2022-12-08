<?php

$p_name[] = $_POST['product_name'];

foreach ($p_name as $key => $item) {
    echo "$key => $item <br>";
}
