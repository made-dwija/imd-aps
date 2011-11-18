<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of genres_controller
 *
 * @author Made Dwija
 */
class GenresController extends AppController{
    var $name = 'Genres';
    //put your code here
    function index(){
        $this->Paginate = array('limit',10);
        $genres = $this->Paginate('Genres');
        $this->set(compact('genres'));
    }
}
?>
