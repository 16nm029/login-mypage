<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST['from_mypage'])){
    header("Location:http://localhost/login_mypage/login_error.php");
           }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
</head>
    
<body>
    <header>
        <img src ="4eachblog_logo.jpg">
        <div class ="log_out"><a href="log_out.php">ログアウト</a></div>
    </header>
    
    <main>
    <div class="box">
        <h2>会員情報</h2>
        <div class ="hello"><p>こんにちは! <?php echo $_SESSION['name']?>さん</p></div>
        
        <form action="mypage_update.php" method="post">
        <div class="profile_pic">
        <img src="<?php echo $_SESSION['picture'];?>">
        </div>
            
        <div class="personal_data">
            <p>氏名：<input type="text" size="30" value="<?php echo $_SESSION['name'];?>" name="name"></p>
            <p>メール：<input type="text" size="30" value="<?php echo $_SESSION['mail'];?>" name="mail"></p>
            <p>パスワード：<input type ="text" size="30" value="<?php echo $_SESSION['password'];?>" name="password"></p>
        </div>
        
        <div class="comments">
            <textarea rows="3" cols="70" name="comments"><?php echo $_SESSION['comments'];?></textarea>
        </div>
            <div class="center"><input type ="submit" class="edit_button" value="この内容に変更する"></div>
        </form>
       
    </div>
    </main>
    
    <footer>
    © 2020 InterNous.inc. All right reserved
    </footer>
    
</body>
</html>