<?php
    //(C)
    require_once 'filters/login_filter.php';
    require_once 'models/User.php';
    require_once 'daos/PostDAO.php';
    session_start();
    $login_user = $_SESSION['login_user'];
    
    //PostDAOを使って、全投稿情報を取得
    $posts = PostDAO::get_all_posts();
    
    //View表示
    include_once 'views/top_view.php';