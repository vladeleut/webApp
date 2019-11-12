<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restricted extends CI_Controller{

	public function index(){
		$this->template->show('restricted.php');
	}

	
}