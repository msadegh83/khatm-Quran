<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php
        require_once 'server.php';
        $jna[] = array();
        $fja[] = array();
        $counter = 0;
        $co = 0;
        $cjn = 0;
        $fjn = 0;
        $id = filter_input(INPUT_GET, $_GET['id']);
        $name = $_POST['name'];
        for($n = 1;$n<=30 ; $n++){
            $jn = "joze".$n;
            if(isset($_POST[$jn])){
                $resss =$db->query("SELECT * FROM entekhabj WHERE khatmID = ".$_GET["id"]." AND joze = ".$_POST[$jn]);
                $resar = mysqli_fetch_assoc($resss);
                if($resar == true){
                    $co++;
                    $fjn++;
                    $fja[$fjn] = $_POST[$jn];
                }
                elseif ($resar != true) {
                $co++;
                $cjn++;
                $counter++;
                $jna[$counter] = $_POST[$jn];
                }
            }
        }
        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php if($co == 0){echo 'شما جزء ای انتخاب نکرده اید';}elseif($co == $cjn){echo 'جزء شما با موفقیت ثبت شد';}else{echo 'جزء مورد نظر قبلا ثبت شده';}?></title>   
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lalezar">
        <link rel="stylesheet" href="resstyle.css"/>
    </head>
    <body>
        <?php
        if($co == 0){
        ?>
         <h1><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-dizzy" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path fill-rule="evenodd" d="M9.146 5.146a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708zm-5 0a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 1 1 .708.708l-.647.646.647.646a.5.5 0 1 1-.708.708L5.5 7.207l-.646.647a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708z"/>
                <path d="M10 11a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
            </svg><br/>شما جزء ای انتخاب نکرده اید ، لطفا دوباره تلاش کنید</h1>
            <a href="entkhab.php?<?php echo 'id='.$_GET['id'];?>"><button type="button" class="btn btn-info">انتخاب دوباره جزء</button></a>
            <a href="jadval.php?<?php echo 'id='.$_GET['id'];?>"><button type="button" class="btn btn-warning">مشاهده جدول ختم</button></a>
        <?php
        }elseif($co == $cjn){
            for($i = 1 ; $i<=$counter ; $i++){
            $query = "INSERT INTO `entekhabj` (`ID`, `khatmID`, `name`, `joze`) VALUES (NULL, '".$_GET['id']."' , '".$_POST['name']."', '".$jna[$i]."');";
            $db->query($query);
            }
            ?>
            <h1><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg><br/>
                جزء مورد نظر با موفقیت ثبت شد</h1>
            <a href="jadval.php?<?php echo 'id='.$_GET['id'];?>"><button type="button" class="btn btn-success">مشاهده جدول ختم</button></a>
        <?php }else{
            for($i = 1 ; $i<=$fjn ; $i++){
            $str = $fja[$fjn]."  ";
            }
            ?>
            <h1><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-emoji-frown" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path fill-rule="evenodd" d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683z"/>
                <path d="M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                </svg><br/>
                جزء (های) <?php echo $str ?> توسط شخص دیگری ثبت شده (اند) ، لطفا مجددا تلاش نمایید</h1>
            <a href="entkhab.php?<?php echo 'id='.$_GET['id'];?>"><button type="button" class="btn btn-info">انتخاب دوباره جزء</button></a>
            <a href="jadval.php?<?php echo 'id='.$_GET['id'];?>"><button type="button" class="btn btn-warning">مشاهده جدول ختم</button></a>
            <?php
        }
        ?>
    </body>
</html>