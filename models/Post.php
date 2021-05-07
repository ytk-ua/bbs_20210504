<?php
    require_once 'daos/UserDAO.php';
    //モデル（M）
    //投稿の設計図を作る
    class Post{
        //プロパティ
        public $id; //投稿番号
        public $user_id; //投稿者のユーザー番号
        public $title; //タイトル
        public $content; //本文
        public $image; //画像ファイルの名前
        public $created_at; //投稿時間
        //メソッド
        //コンストラクタ
        public function __construct($user_id='', $title='', $content='', $image=''){
            $this->user_id = $user_id;
            $this->title = $title;
            $this->content = $content;
            $this->image = $image;
        }
        
        //user_idからそのユーザーのインスタンスを取得するメソッド
        public function user(){
            $user = UserDAO::find($this->user_id);
            return $user;
        }
    }