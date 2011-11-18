<?php
class UsersController extends AppController{
    var $name = 'Users';

    function index(){
        $this->redirect('/users/login');
    }
    function beforeFilter(){
        $this-> __validateLoginStatus();
    }
    function login(){
        $this->layout = 'login';
        if(empty($this->data)==false){
            if(($user=$this->User->validateLogin($this->data['User']))==true){
               $this->Session->write('User',$user);
               $this->Session->setFlash('Anda Sukses Login');
               $this->redirect('/admin/');
            }//end if ne
            else{
                $this->Session->setFlash('Cek Username &amp; Password anda..!!');
                $this->redirect('../users/login/');
                exit();
            }//end else ne..
        }//end if ne
    }//end funtion loginne
    function logout(){
        $this->Session->destroy('user');
        $this->Session->setFlash('Sube Pesu');
        $this->redirect('login');
    }//function logout suwud be ruu
    function __validateLoginStatus(){
        if($this->action !='login' && $this->action !='logout'){
            if($this->Session->check('User')==false){
                $this->redirect('login');
                $this->Session->setFlash('Login dulu ruu..');
            }//if sube suwud ruu
        }//if sube suwud
    }// validate status sube suwud ruu
}
?>
