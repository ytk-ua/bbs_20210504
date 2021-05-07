<?php
    //モデル（M）
    //ユーザーの設計図classを作る classはたい焼きの金型。publicがあんこやカスタードなど具材が食べるたい焼きが生まれるのがインスタンス
    //オブジェクト思考とは設計図を元にやり取りをしていくこと。実世界的なストーリー。
    class User{
        //プロパティ
        public $id; //ユーザー番号
        public $name; //名前
        public $email; //メールアドレス
        public $password; //パスワード
        public $created_at; //登録時間
        //メソッド
        //コンストラクタ
        public function __construct($name='', $email='', $password=''){
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }
    }