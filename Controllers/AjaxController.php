<?php
namespace Controllers;

use \Core\Controller;
use Models\Groups;
use Models\Users;

class AjaxController extends Controller {

	private $user;

	public function __construct()
	{
		$this->user = new Users();
		if(!$this->user->verifyLogin()){
			$array = array('status'=>'0');
			echo json_encode($array);
			exit;
		}
	}
	
	public function index() {}

	public function get_groups()
	{
		$array = array('status'=>'1');
		$groups = new Groups();
		$array['list'] = $groups->getList();
		echo json_encode($array);
		exit;
	}
}