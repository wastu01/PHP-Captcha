<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>運轉中請稍候</title>
<link rel="stylesheet" href="css/style.css">
    
</head>
<?php
if(!isset($_SESSION)){
    session_start();
    }  //判斷session是否已啟動

if((!empty($_SESSION['check_word'])) && (!empty($_POST['checkword']))){  //判斷此兩個變數是否為空
    
     if($_SESSION['check_word'] == $_POST['checkword']){
         
          $_SESSION['check_word'] = ''; //比對正確後，清空將check_word值
         
          header('content-Type: text/html; charset=utf-8');
         
          echo '<p> </p><p> </p><a href="./captcha_index.php">輸入正確，判斷您為真人，同意您進入網頁(哪次不同意)</a>';
         echo '<meta http-equiv="refresh" content="4; url=./captcha_index.php">';
         
          exit();
     }else{
        echo $_SESSION['check_word'];
        echo '<br>';
        echo $_POST['checkword'];
         echo '<p> </p><p> </p><a href="./captcha_index.php">還敢打錯ㄚ，將於十秒後跳轉(請耐心等候，下次睜大眼睛，輸入正確好ㄇ)</a>';
         echo '<meta http-equiv="refresh" content="10; url=./captcha_index.php">';
     }

}
?>


</html>