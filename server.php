<?php

require_once 'config.php';

$db = mysqli_connect(ServerName , Username , password , DBName);

$rest = mysqli_query($db, "SELECT * FROM `katmtitle` ORDER BY `katmtitle`.`ID` DESC");
$restr = mysqli_fetch_assoc($rest);