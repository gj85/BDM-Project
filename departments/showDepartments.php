<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host = 'mysql:host=localhost;dbname=developing';
$user ='root';
$pw ='';

$dbh = new PDO($host, $user, $pw);



$data = $dbh->query("select BusinessDepartmentID"
        . ", DepartmentNam, DepartmentDesc, DataStewardNam"
        . ", CreatedByUserNam, CreatedDt,UpdatedByUserNam"
        . ", UpdatedDt"
        . " from departments");


if ($data !== false) {
    
    header("Content-Type: application/json");
    echo json_encode($data->fetchAll(PDO::FETCH_ASSOC));
}else {
    echo "seems like error is in sql statement";
}


/*
header("Content-Type: application/json");
echo json_encode($data->fetchAll(PDO::FETCH_ASSOC));
 * 
 */