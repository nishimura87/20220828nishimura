<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <h1>{{'トップページ'}}</h1>
  <form action="/" method="POST">
    @csrf
    名前：<br>
    <input type="text" name="name" ><br>
    メールアドレス：<br>
    <input type="text" name="email" ><br>
    <button type="submit" name="button-submit">送信する</button>
  </form>
</body>

</html>