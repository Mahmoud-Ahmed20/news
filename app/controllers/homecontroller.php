<?php
namespace news\controllers;
use news\core\controller;
class homecontroller extends controller 
{
public function index()
{
    
    $title='mahmoud';
    $this->view('/home/index',['title'=>$title]);
}
}