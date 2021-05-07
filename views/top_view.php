<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--ビュー（V）ファイル　index.phpを参照して使っている-->
    <h1>マイページ</h1>
    <p></p><?= $login_user->name ?>さん、ようこそ！</p>
    <h2>投稿一覧</h2>
    <p>投稿件数: <?= count($posts) ?>件</p>
    <?php foreach($posts as $post): ?>
    <ul>
        <li><?= $post->id ?></li>
        <li><?= $post->user()->name ?></li>
        <li><?= $post->title ?></li>
        <li><?= $post->content ?></li>
        <li><img src="upload/<?= $post->image ?>"></li>
        <li><?= $post->created_at ?></li>
    </ul>
    <?php endforeach; ?>
    
    <p><a href="post_create.php">新規投稿</a></p>
    <p><a href="logout.php">ログアウト</a></p>
    <!--<p><a href="delete.php">全ユーザー削除</a></p>-->
</body>
</html>