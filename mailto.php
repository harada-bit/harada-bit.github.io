<?php
if ($aaa === 'POST'){
  $to = 'hahara.main777@gmail.com';
  $from = $_POST['email'];
  $subject = 'お問い合わせが届きました';
  $body = <<<EOF
名前：　{$_POST['name']}
メールアドレス：　{$_POST['email']}
内容：　{$_POST['contact']}
  EOF;
  mb_send_mail($to, $subject, $body, From: {$from});
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

<h2>問合せ内容</h2>    

<h2>メール送信完了</h2>    

<p class="message">
お問い合わせありがとうございます。1営業日以内にご返信させていただきます。<br>
自動返信メールをお送りしておりますのでご確認ください。<br>
1時間たっても届かない場合はお手数ですがこちらからご連絡ください。
</p>
<input type="submit" value="戻る" />


</body>
    
</html>