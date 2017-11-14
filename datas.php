<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>データ</title>
  </head>
  <body>
    <?php
    //mysqliクラスのオブジェクトを作成
    $mysqli = new mysqli("localhost", "root", "","example");
    //エラーが発生した場合
    if ($mysqli->connect_error){
      print("接続失敗：" . $mysqli->connect_error);
      exit();
    }
    ?>
    <?php
    //プリペアドステートメントを作成　ユーザ入力を使用する箇所は?にしておく
    $stmt = $mysqli->prepare("INSERT INTO datas (name, message) VALUES (?, ?)");
    //$_POST["name"]に名前が、$_POST["message"]に本文が格納されているとする。
    //?の位置に値を割り当てる
    $stmt->bind_param('ss', $_POST["name"], $_POST["message"]);
    //実行
    $stmt->execute();
    ?>
    <?php
    //datasテーブルから日付の降順でデータを取得
    $result = $mysqli->query("SELECT * FROM datas ORDER BY created DESC");
    if($result){
      //1行ずつ取り出し
      while($row = $result->fetch_object()){
        //エスケープして表示
        $name = htmlspecialchars($row->name);
        $message = htmlspecialchars($row->message);
        $created = htmlspecialchars($row->created);
        print("$name : $message ($created)<br>");
      }
    }
    ?>
    <?php
    $mysqli->close();
    ?>
  </body>
</html>
