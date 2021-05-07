<?php
    //(C)
    require_once 'daos/UserDAO.php';
    // var_dump($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    //Userクラスの新しいインスタンス生成
    $user = new User($name, $email, $password);
    
    //UserDAOを使ってDBにデータ保存
    UserDAO::insert($user);
    
    //画面遷移
    header('Location: index.php');
    exit;