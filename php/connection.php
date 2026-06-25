<?php 
    $serverName = "DESKTOP-E2KREJU";
    $connectionOptions = [
        "Database"=>"quanly",
        "Uid"=>"sa",
        "PWD"=>"123456",
        "MultipleActiveResultSets"=>true,
        "CharacterSet"  => 'UTF-8'
    ];
    $conn = sqlsrv_connect($serverName, $connectionOptions);