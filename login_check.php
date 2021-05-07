<?php
    //(C)
    session_start();
    require_once 'daos/UserDAO.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    //UserDAOを使ってDBにそんな入力値を持つ人がいるのか探す
    $user = UserDAO::check($email, $password);
    // var_dump($user);
    
    //そんな人がいれば
    if($user !== false){
        //セッションにその人を保存
        $_SESSION['login_user'] = $user;
        header('Location: top.php');
        exit;
    }else{
        header('Location: login.php');
        exit;
    }
    
    //画面遷移
    // header('Location: index.php');
    // exit;