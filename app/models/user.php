<?php
namespace news\models;
use news\core\model;
class user extends model
{
    public function GetAllUsers()
    {
        $data = model::db()->rows("SELECT * FROM user");
        return $data;
    }
    public function GetUser($email,$password)
    {
        $data = model::db()->row("SELECT * FROM user WHERE `email`= ? && `password` = ? ",[$email,$password]);
        return $data;
    }
    public function Regester($name,$email,$password)
    {
       $data = [
           "name"=>$name ,
           "email"=>$email,
           "password"=>$password
       ];
       $insert = model::db()->insert('user',$data);

    }


}