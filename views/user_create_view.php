<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規ユーザー登録</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <!--ビュー（V）ファイル　index.phpを参照して使っている-->
    <h1>新規ユーザー登録</h1>

    <form action="user_store.php" method="POST">
        名前： <input type="text" name="name"><br>
        メールアドレス： <input type="email" name="email"><br>
        パスワード： <input type="password" name="password"><br>
        <input type="submit" value="登録">
    </form>
    
    <p><a href="index.php">トップページに戻る</a></p>
</body>
</html>