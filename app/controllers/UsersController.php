<?php

class UsersController extends \Phalcon\Mvc\Controller {
	public function indexAction() {

	}
	private function _register(Users $user) {
		$this->session->set('auth', array(
			'id' => $user->id,
			'name' => $user->name,
		));
	}
	public function logginAction() {
		if ($this->request->isPost()) {
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');

			$user = Users::findFirst(array(
				"(email = :email: OR username = :email:) AND password = :password:",
				'bind' => array('email' => $email, 'password' => sha1($password)),
			));
			if ($user != false) {
				$this->_register($user);
				$this->flash->success('Welcome ' . $user->name);

				return $this->dispatcher->forward(
					[
						"controller" => "notice",
						"action" => "index",
					]
				);
			}
			$this->flash->error('Email or password is Wrong');
		}
		return $this->dispatcher->forward(
			[
				"controller" => "users",
				"action" => "index",
			]
		);
	}
	public function logoutAction() {
		$this->session->remove('auth');
		$this->flash->success('Goodbye!');
		return $this->dispatcher->forward(
			[
				"controller" => "users",
				"action" => "index",
			]
		);
	}

}
