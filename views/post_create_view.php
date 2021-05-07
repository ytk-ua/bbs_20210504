<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規投稿</title>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <!--ビュー（V）ファイル　index.phpを参照して使っている-->
    <h1>新規投稿</h1>

    <form action="post_store.php" method="POST" enctype="multipart/form-data"> 
        タイトル： <input type="text" name="title"><br>
        本文： <input type="text" name="content"><br>
        画像： <input type="file" name="image"><br>
        <input type="submit" value="投稿">
    </form>
    
    <p><a href="top.php">トップページに戻る</a></p>
</body>
</html>