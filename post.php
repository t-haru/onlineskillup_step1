<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされている場合
      if(isset($_POST["comment"])) {
        //エスケープ -> 表示
        $title = htmlspecialchars($_POST["title"]);
        $name = htmlspecialchars($_POST["name"]);
        $comment = htmlspecialchars($_POST["comment"]);
        $email = htmlspecialchars($_POST["email"]);
        $color = htmlspecialchars($_POST["color"]);
    ?>
    <h1><font color = "<?php print("${color}"); ?>" ><?php print("${title}"); ?></h1>
    <?php
        print("名前　　　　　：${name}<br/>");
        print("コメント　　　：${comment}<br/>");
        print("メールアドレス：${email}<br/>");
    ?></font><?php
      } else {
    ?>
        <p>コメントしてください。</p>
        <form method="POST" action="post.php">
          <p>タイトル　　　：<input name = "title" /></p>
          <p>名前　　　　　：<input name = "name" /></p>
          <p>コメント　　　：<input type = "txstarea" name = "comment" /></p>
          <p>メールアドレス：<input type = "email" name = "email" /></p>
          <p>文字色　　　　：<input type = "color" name = "color" /></p>
          <p><input type = "submit" value = "送信" /></p>
        </form>
    <?php
      }
    ?>
  </body>
</html>
