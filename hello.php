<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>PHPのサンプル</title>
  </head>
  <body>
    <?php
      $date = date("Y/m/d H:i:s");
      print($date);
      print("<br/>");
    ?>
    <?php
      $a = 5;
      if($a == 3) {
        print("$a is 3.");
        print("<br/>");
      } else {
        print("$a is not 3.");
        print("<br/>");
      }

      for ($i = 0; $i < 10; $i++) {
        print("$i ");
      }
      print("<br/>");

      function double_print($text) {
        print($text . $text);
      }
      double_print("a");
      double_print("bc");
      print("<br/>");

      $a1 = array("one", "two", "three");
      $a1[] = "four";
      $a1[0] = "one?";
      print_r($a1);
      print("<br/>");

      $hash = array("one" => "一", "two" => "二", "three" => "三");
      $hash["four"] = "四";
      print_r($hash);
      print("<br/>");
      foreach($hash as $key => $val)
        print("$key is $val. ");
      print("<br/>");

      if(preg_match('/(-?)[0-9]+(\.[0-9]+)?/', 'q-6.83p', $m)) {
        print("match: $m[0] ");
        if($m[1] == "-")
          print("minus! ");
        if(isset($m[2]))
          print("decimal!");
        } else {
          print("not match");
        }
        print("<br/>");
    ?>
  </body>
</html>
