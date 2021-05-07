<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class Azul extends CI_Controller{

    public function index()
    {
        $this->load->view('comment.php');
    }
}


?>