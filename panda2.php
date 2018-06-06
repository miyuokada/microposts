<?php

    function weight($weight){
     $result = '';
     
     if ((35< $weight) && ($weight <37)){
     $result = "成果が出ているね!!";
     
     
     }
     elseif ((38 < $weight) &&  ($weight < 40)) {
     $result = "もう少し頑張ってほしいなあ";
   
     
     }
    else{
    $result = "あれま、、";
     }
    
    return $result;
    
    }
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
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
                background-color:#ffe4e1;
            }
        </style>
    
    
    <body>
      <p><?php print $_POST['target_name'];?>ちゃん</p>  
      <p><?php print $㎏; ?>今日は、<?php print $_POST['target_weight'];?>㎏かぁ</p>
    
    <p>
        <?php  
            print weight( $_POST['target_weight']);
            
            $result = weight( $_POST['target_weight']);
           
        ?>
    </p>
     
     <?php 
     
         if ($result=='成果が出ているね!!'){
             echo "<img src=\"pika.png\">";
         
         }
         
          elseif ($result=='もう少し頑張ってほしいなあ') {
            echo "<img src=\"iibui.gif\">";
          } 
          
          else{
            echo "<img src=\"kabigon.png\">";
          }
         
      ?>
     
     
      
       
      
       
       <P>どうかな？頑張ったかな？</P>
        
    </body>
</html>