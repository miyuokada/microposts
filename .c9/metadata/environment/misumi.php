{"changed":true,"filter":false,"title":"misumi.php","tooltip":"/misumi.php","value":"<?php\n            date_default_timezone_set('Asia/Tokyo');\n            $now_hour =  (int)date(\"H\");\n        ?>\n        \n<?php\n    function greeting($hour) {\n        $result = \"\";\n\n        if (6 <= $hour && $hour < 12) {\n            $result = \"おはよう\";\n        }\n        elseif (12 <= $hour && $hour < 18) {\n            $result = \"こんにちは\";\n        }\n        else {\n            $result = \"こんばんは\";\n        }\n\n        return $result;\n    }\n?>\n<!DOCTYPE html>\n<html lang=\"ja\">\n    <head>\n        <meta charset=\"UTF-8\">\n        <title>タイトル</title>\n    </head>\n    <body>\n        <form action=\"index.php\" method=\"POST\">\n            <label>名前:<input type=\"text\" name=\"target_name\"></label>\n            <br>\n            <label>年齢:<input type=\"text\" name=\"target_age\"></label>\n            <input type=\"submit\" value=\"送信\">\n        </form>\n       \n        <p>今は<?php print $now_hour; ?>時です。</p>\n        <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん (<?php print $_POST['target_age'];?>歳)</p>\n    </body>\n</html>","undoManager":{"mark":-2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":3,"column":10},"action":"insert","lines":[" <?php","            date_default_timezone_set('Asia/Tokyo');","            $now_hour =  (int)date(\"H\");","        ?>"],"id":1}],[{"start":{"row":0,"column":3},"end":{"row":0,"column":6},"action":"remove","lines":["php"],"id":2},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"remove","lines":["?"]},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"remove","lines":["<"]},{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":[" "]},{"start":{"row":0,"column":0},"end":{"row":3,"column":10},"action":"remove","lines":["","            date_default_timezone_set('Asia/Tokyo');","            $now_hour =  (int)date(\"H\");","        ?>"]}],[{"start":{"row":0,"column":0},"end":{"row":39,"column":7},"action":"insert","lines":["<?php","            date_default_timezone_set('Asia/Tokyo');","            $now_hour =  (int)date(\"H\");","        ?>","        ","<?php","    function greeting($hour) {","        $result = \"\";","","        if (6 <= $hour && $hour < 12) {","            $result = \"おはよう\";","        }","        elseif (12 <= $hour && $hour < 18) {","            $result = \"こんにちは\";","        }","        else {","            $result = \"こんばんは\";","        }","","        return $result;","    }","?>","<!DOCTYPE html>","<html lang=\"ja\">","    <head>","        <meta charset=\"UTF-8\">","        <title>タイトル</title>","    </head>","    <body>","        <form action=\"index.php\" method=\"POST\">","            <label>名前:<input type=\"text\" name=\"target_name\"></label>","            <br>","            <label>年齢:<input type=\"text\" name=\"target_age\"></label>","            <input type=\"submit\" value=\"送信\">","        </form>","       ","        <p>今は<?php print $now_hour; ?>時です。</p>","        <p><?php print greeting($now_hour); ?>、<?php print $_POST['target_name']; ?>さん (<?php print $_POST['target_age'];?>歳)</p>","    </body>","</html>"],"id":3}]]},"ace":{"folds":[],"scrolltop":236.5,"scrollleft":0,"selection":{"start":{"row":23,"column":13},"end":{"row":23,"column":13},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":15,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1526456278277}