<?php
include("../inc/db.php");
$db = $conn;
$tableName = "tbl_products";
$columns = ['id', 'name', 'pic', 'c1', 'c2', 'c3', 'c4', 'c5', 't1', 't2', 't3', 't4', 't5', 't6', 'price', 'p2', 'p3', 'p4', 'p5'];

$fetchData = fetch_data($db, $tableName, $columns);
function fetch_data($db, $tableName, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "columns Name must be defined in an indexed array";
    } elseif (empty($tableName)) {
        $msg = "Table Name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName" . " WHERE `category`='p_frait'  " . " ORDER BY id ASC";
        $result = $db->query($query);
        if ($result == true) {
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                $msg = $row;
            } else {
                $msg = "No Data Found";
            }
        } else {
            $msg = mysqli_error($db);
        }
    }
    return $msg;
}
