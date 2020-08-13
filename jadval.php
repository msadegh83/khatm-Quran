<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head lang="fa">
        <meta charset="UTF-8">
        <meta http-equiv="cache-control" content="no-cache" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>جدول ختم قرآن</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lalezar">
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <?php 
            require_once 'server.php';
            $i = 1;
            $q = "Select * FROM entekhabj WHERE khatmID = ".$_GET["id"]." ORDER BY joze ";
            $result = mysqli_query($db, $q);
            $re = mysqli_fetch_array($result);
        ?>
            <table class="table table-primary">
            <thead>
            <tr>
              <th scope="col">نام</th>
              <th scope="col">جزء</th>
              <th scope="col">اتمام جزء</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <?php foreach($result as $ress): 
          $Query = "SELECT * FROM khatmJoze WHERE joze = ".$ress['joze']." AND khatmID = ".$_GET['id'];
          $resultet = $db->query($Query);
          $ret = mysqli_fetch_assoc($resultet);
          ?>
          <tbody>
            <tr class="table-success">
              <th scope="row" class="<?php echo "name-".$i; ?>"><?php echo $ress["name"];?>
              <td class="<?php echo "joze-".$i; ?>"><?php echo $ress["joze"] ?></td>
              <?php 
              if($ret == null){
                  ?>
                  <td><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-x text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"/>
                    </svg></td>
                    <td><a href="etmam.php?id=<?php echo $ress["joze"]."&khatmID=".$_GET["id"]?>"><button type="button" class="btn btn-success">پایان جزء</button></a></td>
                  <?php
              }
              elseif($ret != null){
          ?>
          <td><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-check text-success" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>
            </svg></td>
            <td><a href="etmam.php?id=<?php echo $ress["joze"]."&khatmID=".$_GET["id"]?>"><button type="button" class="btn btn-success" disabled>پایان جزء</button></a></td>
          <?php }?>
          </tbody>
          <?php 
          $i++;
          endforeach;?>
        </table>
        <a href="/KhatmQuran"><button type="button" class="btn btn-warning">بازگشت به صفحه اصلی</button></a>
        <button type="button" onClick="window.print()" class="btn btn-warning">چاپ صفحه</button>
    </body>
</html>
