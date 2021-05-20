<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct() {
      parent::__construct();
   }

   public function index() {
      if ($this->auth->is_logged_in()) {
         $this->auth->logout();
      }
      redirect('login');
   }

}

/* End of file logout.php */
/* Location: ./application/controllers/logout.php */