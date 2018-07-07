<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    var $data = array();
 
    
    function __construct()
    {
       
        parent::__construct();
 
        
        $controller = $this->uri->segment(1);
        $controller = strtolower($controller);
 
        switch ($controller)
        {
           
            case 'admin':
            {
            $this->check_log();
            break;
            }            
            default:
            {
                break;
            }
        }
 
    }
    function check_log(){
    	$controller = $this->uri->segment(2);
        $controller = strtolower($controller);
         	if((!$this->facebook->is_authenticated()) and ($controller != 'login') )
            {
                redirect(base_url('admin/login'),'refresh');
            }
           
        }

    
}