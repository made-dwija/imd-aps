<?php
class AdminController extends AppController{
    function index(){
        if($this->Session->check('User')==false){
            $this->redirect('../users/login');
        }
        else{
            $this->layout = 'admin';
        }
    }
}
?>
