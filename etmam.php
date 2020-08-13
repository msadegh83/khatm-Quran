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
        <title>آیا مطمئن هستید؟</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lalezar">
        <link rel="stylesheet" href="resstyle.css"/>
    </head>
    <body>
        <br/>
        <h1>آیا اطمینان دارید که تمام جزء <?php echo $_GET['id'];?> را قرائت کرده اید؟</h1>
        <br/>
        <a href="etmamres.php?id=<?php echo $_GET["id"]."&khatmID=".$_GET["khatmID"]?>"><button type="button" class="btn btn-success">بله ، مطمعن ام</button></a>
        <a href="jadval.php?id=<?php echo $_GET["khatmID"]?>"><button type="button" class="btn btn-danger">خیر هنوز جزء را کامل قرائت نکرده ام</button></a>
    </body>
</html>