<?php

class UsersController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $this->view->users = array('name'=>'Max Palomino', 'email'=> 'email@gmail.com','web' => 'http://we.pe','status'=>1);
    }

    public function nuevoAction()
    {
        // action body
    }

    public function eliminarAction()
    {
        // action body
    }

    public function editarAction()
    {
        // action body
    }


}







