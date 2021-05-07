<?php
    //(C)
    require_once 'daos/PostDAO.php';
    require_once 'models/User.php';
    session_start();
    // var_dump($_POST);
    $title = $_POST['title'];
    $content = $_POST['content'];
    // var_dump($_FILES);
    $image = $_FILES['image']['name'];
    // print $image;
    $login_user = $_SESSION['login_user'];
    
    //新規投稿を作る
    $post = new Post($login_user->id, $title, $content, $image);
    // var_dump($post);
    //DAOを使って、DBに投稿を保存
    PostDAO::insert($post);

        // 画像のフルパスを設定
        $file = 'upload/' . $image;

        // uploadディレクトリにファイル保存
        move_uploaded_file($_FILES['image']['tmp_name'], $file);
        
        //リダイレと
        header('Location: top.php');
        exit;