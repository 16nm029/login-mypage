<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
<link rel="stylesheet" type="text/css" href="register_confirm.css">
</head>
<body>
    <header>
        <img src ="4eachblog_logo.jpg">
    </header>
    <main>
    
    <div class="confirm">
        <div class="center">
            <h2>会員登録　確認</h2>
            <p>こちらの内容で登録しても宜しいでしょうか？</p>
        </div>
        <div class="confirm_contents">
        <p>名前：<?php echo $_POST['name'];?></p>
        <p>メール：<?php echo $_POST['mail'];?></p>
        <p>パスワード：<?php echo $_POST['password'];?></p>
        <p>プロフィール写真：<?php echo $original_pic_name;?></p>
        <p>コメント：<?php echo $_POST['comments'];?></p>
        </div>
        <div class="buttons">
        <form action="register.php">
            <input type ="submit" class="undo_button" value="戻って修正する">
        </form>
        
        <form action="register_insert.php" method="post">
            <input type="submit" class="submit_button" value="登録する">
            <input type="hidden" name="name" value="<?php echo $_POST['name'];?>">
            <input type="hidden" name="mail" value="<?php echo $_POST['mail'];?>">
            <input type="hidden" name="password" value="<?php echo $_POST['password'];?>">
            <input type="hidden" name="path_filename" value="<?php 
                                                             if(!empty($path_filename)){echo $path_filename;}?>">
            <input type="hidden" name="comments" value="<?php echo $_POST['comments'];?>">
        </form>
        </div>
        </div>
        
    </main>
    <footer>
        © 2020 InterNous.inc All right reserved
    </footer>
</body>
</html>

