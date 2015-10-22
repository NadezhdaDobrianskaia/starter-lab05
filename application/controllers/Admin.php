<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Nadia
 */
class Admin extends Application{
    //put your code here
    
    function _construct(){
        parent::_construct();
    }
    
    function index(){
        $this->data['title'] = 'Quotations Maintenance';
        $this->data['quotes'] = $this->quotes->all();
        
        $this->data['pagebody'] = 'admin_list';
        $this->render();
    }
    
    
}
