<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>نتیجه</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lalezar">
        <link rel="stylesheet" href="resstyle.css"/>
    </head>
    <body>
        <?php
        require_once 'server.php';
        $resss =$db->query("SELECT * FROM khatmJoze WHERE khatmID = ".$_GET['khatmID']." AND joze = ".$_GET["id"]);
        $resar = mysqli_fetch_assoc($resss);
        if($resar == null):
        if(isset($_GET['id'])&&$_GET['khatmID']){
        $Q = "INSERT INTO `khatmJoze` (`ID`, `joze` , `khatmID`) VALUES ( NULL , '".$_GET['id']."' , '".$_GET['khatmID']."');";
        $db->query($Q);
        }
        ?>
        <br/>
        <h1>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg><br/>
            خدا اجرتان دهد
        </h1>
        <a href="jadval.php?id=<?php echo $_GET["khatmID"]?>"><button type="button" class="btn btn-danger">بازگشت به جدول ختم</button></a>
        <?php elseif($resar != null):?>
        <h1>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.146-3.146a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"/>
            </svg><br/>
            پایان این جزء قبلا ثبت شده است
        </h1>
        <a href="jadval.php?id=<?php echo $_GET["khatmID"]?>"><button type="button" class="btn btn-danger">بازگشت به جدول ختم</button></a>
        <?php endif;?>
    </body>
</html>