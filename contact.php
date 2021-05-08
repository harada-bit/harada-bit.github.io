<?php
$form = $_POST;
foreach($form as $key => $value){
  if ($key === "name"){
    $name = $value;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>


  <body>
    <h2>送信内容</h2>    
    <form action="mailto.php" method="post">
      <table border="1" style="border-collapse: collapse">
        <tr>
        <td>名前</td>
        <td><?php echo htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
        <td>ふりがな</td>
        <td><?php echo htmlspecialchars($_POST["huri"], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
        <td>会社名</td>
        <td><?php echo htmlspecialchars($_POST["kaisha"], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
        <td>メールアドレス</td>
        <td><?php echo htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
        <td>問い合わせ内容</td>
        <td><?php echo nl2br(htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8')); ?></td>
        </tr>
      </table>

      <a href="./index.html#contact">戻る</a>
      <input type="submit" value="送信" />

    </form>
  </body> 
</html>