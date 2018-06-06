


 
<?php
   date_default_timezone_set('Asia/Tokyo');
   $now_hour = (int)date("H");

  
    function greeting($hour) {
     $result = "";
     
     if (6 <= $hour && $hour <12){
     $result = "おは";
     }
     elseif (12 <= $hour && $hour <18) {
     $result = "こんにちは";
     }
    else{
    $result = "こんばんは";
     }
    
    return $result;
    
    }
?>

<!DOCTYPE html>
<html lang="ja">
   <head>
       <meta charaset="UTF-8">
       <title>タイトル</title>
   </head>
   
   <body>
       
       <form action="ondex.php" method="post">
           <label 名前: <input type="text" name="target_name"/> ></label>
           <input type="submit" value="Submit"/>
       </form>
       <p>今は<?php print $now_hour; ?>時です。</p>
       <p><?php print greeting($now_hour); ?>美優さん</p>
   </body>
    
    
</html>