 
<?php
   date_default_timezone_set('Asia/Tokyo');
   $now_hour = (int)date("H");

  
    function greeting($hour) {
     $result = "";
     
     if (6 <= $hour && $hour <12){
     $result = "今日もいい朝だね";
     }
     elseif (12 <= $hour && $hour <18) {
     $result = "一日がんばろーー";
     }
    else{
    $result = "お疲れさま。今日は、どんな一日でしたか？";
     }
    
    return $result;
    
    }
?>

<!DOCTYPE html>
<html lang="ja">
   <head>
       <meta charaset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>タイトル</title>
       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
  　　
   　　<style>
            body{
                 
                text-align: center;
                background-color: #ff69b4;
            }
        </style>
   
   
   
   <body>
       
       <form action="/panda2.php" method="POST">
            <label>あなたの名前 <input type="text" class = "form-control" name="target_name"></label>
             <label>今日の体重 <input type="text"  class = "form-control" name="target_weight"></label>
　　　
　　　　　<button class="btn btn-default" type="submit"> <span class="glyphicon glyphicon-download-alt"></span>送信</button>
　　　　　

        </form>
       
       <?php
          date_default_timezone_set('Asia/Tokyo');
          $now_hour =  (int)date("H");
       ?>
       
       
       <p><?php print greeting($now_hour); ?></p>
     
          
        </form>
        <img src="soccer.png" alt=soccer>
        <p>いつも、頑張っているね‼えらいよ!!<?php print $POST_['target_name'];?> </p>
   </body>
    
    
</html>