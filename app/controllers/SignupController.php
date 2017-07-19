<?php
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;

class SignupController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }
     public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "users",
                'action' => 'index'
            ]);

            return;
        }
        $user = new Users();
        $user->username = $this->request->getPost("username");
        $user->email = $this->request->getPost("email", "email");
        $user->password = sha1($this->request->getPost("password"));
        $user->name = $this->request->getPost("name");
        if (!$user->save()) {
            foreach ($user->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "signup",
                'action' => 'index'
            ]);

            return;
        }
        $this->flash->success("user was created successfully");
        $this->dispatcher->forward([
            'controller' => "users",
            'action' => 'index'
        ]);
    }


}

