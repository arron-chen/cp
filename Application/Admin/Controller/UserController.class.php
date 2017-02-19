<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller
{
     public function index()
     {
         echo "小孩子太可怕";
         
     }

     public function login()
     {
         echo "要你何用 ";

     }
     public function User_login()
     {
           echo "你是不是傻";
     }
         public function register()
     {
         $user= new \Admin\Model\UserModel();
         $z=$user->create();
         if($z){echo "success";}else{echo "fail";}
         $this->display();
     }
     public function update()
     {

     }
     public function delete()
     {

     }



}