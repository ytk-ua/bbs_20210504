<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ログイン</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <!--ビュー（V）ファイル　index.phpを参照して使っている-->
    <h1>ログイン</h1>

    <form action="login_check.php" method="POST">
        メールアドレス： <input type="email" name="email"><br>
        パスワード： <input type="password" name="password"><br>
        <input type="submit" value="登録">
    </form>
    
    <p><a href="index.php">トップページに戻る</a></p>
</body>
</html>