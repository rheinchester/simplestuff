<?php

  include_once ('Model.php');
  class User extends Model{
    public $user_id;//
    public $username;//
    public $email;// 
    public $password;//
    public $status;
    public $articles;
    public $firstname;
    public $lastname;
    public $twitter_handle;
    public $facebook_username;

    public static $class_name = 'User';
    public static $primary_key = 'user_id';
    public static $table_name = 'users';
    public static $table_fields = array('user_id','username','email','status','password','articles', 'firstname', 'lastname','twitter_handle','facebook_username');


    public function __construct(){
      parent::__construct();
    }

    public function getUserId(){
      return $this->user_id;
    }

    public function setUserId($user_id){
      return $this->user_id = $user_id;
    }

    public static function authenticate($password, $email){
      //the script will see if this password belongs to this particular user and then return the name of the user
      $password = md5($password);//this encodes the password
      $sql = "SELECT * FROM ".static::$table_name." WHERE email = '{$email}' AND password = '$password' LIMIT 1";//user id is the first item on the array hence it will be popped
      $user = static::findBySql($sql);//Use the above sql query to find user
      // echo $sql;
      return ($user) ? array_shift($user) : false;//array_shift = pop in python
    }

      public function setNewUserId(){
        if($lastuser = static::last()){
          $lastId = explode ('/',$lastuser->user_id );
          if (strlen(++$lastId[1])<3) {
            $this->user_id = 'user/'.str_repeat('0',3-strlen($lastId[1])).$lastId[1];
          }else{
            $this->user_id = 'user/'.$lastId[1];
          } 
        }else{
          $this->user_id = 'user/001';
        }      
      }

    public function insertUser(){
      $this->setNewUserId();
      $this->password = md5($this->password);
      // echo $sql;
      return ($this->create()) ? true : false;
    }                                    

    public function nextId(){
      if ($lastUser = static::last()) {
        $lastId = $lastUser->user_id;
        }else{
          $lastId = 0;
          }
        return ++$lastId;
    }
    
    public   function delete(){
      $sql = "DELETE FROM ".static::$table_name;
      $sql.= " WHERE user_id = '{$this->user_id}'";
      echo $sql;
      return static::findBySql($sql);
    }

    public static function where_email($email)
    {
      $arr = array('email' => $email );
      $obj_array = static::where($arr);
      return ($obj_array)? array_shift($obj_array): false ;
    }
  }

 ?>