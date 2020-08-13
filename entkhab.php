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
        <title>انتخاب جزء</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lalezar">
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <?php require_once 'server.php';
        $id = $_GET['id']?>
        <div class="container">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <h1 class="en">انتخاب جزء</h1>
                    <form action="result.php?id=<?php echo $id?>" method="post">
                       : نام
                        <input type="text" id="name" name="name" class="form-control" required/>
                        <br/>
                        <?php
                        $cn = 0;
                        for($n=1 ; $n<=30 ;$n++):
                        $resss =$db->query("SELECT * FROM entekhabj WHERE khatmID = ".$id." AND joze = ".$n);
                        $resar = mysqli_fetch_assoc($resss);
                        if($resar == true){}
                        elseif ($resar != true) {
                            $cn++;
                            if($cn%3 == 0){
                                echo '<br/>';
                            }
                        ?>
                        
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="joze<?php echo $n?>"id="inlineCheckbox1" value=<?php echo $n;?>>
                            <label class="form-check-label" for="inlineCheckbox1"><?php echo $n;?></label>
                        </div>
                        <?php
                        }
                        endfor;
                        if($cn == 0){
                            ?>
                            <h3>متاسفانه تمام جزء ها انتخاب شده اند</h2>
                            <?php
                        }
                        ?>
                        <br/>
                        <?php
                        if($cn == 0){
                        ?>
                        <input type="submit" value="ثبت" class="btn btn-primary" disabled/>
                        <?php
                        }
                        else{
                        ?>
                        <input type="submit" value="ثبت" class="btn btn-primary"/>
                        <?php } ?>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </body>
</html>
