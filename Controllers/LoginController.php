<?php
namespace Controllers;

use \Core\Controller;
use Models\Users;

class LoginController extends Controller {

    public function index() {
        $array = array('msg'=>'');

        if(!empty($_GET['error'])){
            if($_GET['error']=='1'){
                $data['msg'] = 'Usuário e/ou senha inválidos';
            }
        }
        $this->loadView('login', $array);
    }

    public function signin() {
        if (!empty($_POST['username'])) {
            $username = strtolower($_POST['username']);
            $pass = $_POST['pass'];
            
            $user = new Users();
            if ($user->validateUser($username, $pass)) {
                header("Location:".BASE_URL);
                exit;
            } else {
                header("Location:".BASE_URL."login?error=1");
                exit;
            }
        } else {
            header("Location:".BASE_URL."login");
            exit;
        }
    }

    public function signup() {
        $array = array('msg'=>'');
        if(!empty($_POST['username'])){
            $username = strtolower($_POST['username']);
            $pass = $_POST['pass'];
            $passhash = password_hash($pass, PASSWORD_DEFAULT);
            $user = new Users();

            if ($user->validateUsername($username)) {
                if (!$user->userExists($username)) {
                    $user->registerUser($username, $passhash);
                    header("Location:".BASE_URL."login");
                    exit;
                } else {
                    $array['msg'] = 'Usuário já cadastrado no sistema';
                }
            } else {
                $array['msg'] = 'Usuário não válido (Digite apenas letras e números.)';
            }
        }
        $this->loadView('signup', $array);
    }
}