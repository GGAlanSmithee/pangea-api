<?php

namespace Pangea\Frontend\Controllers;

class AccountController extends ControllerBase
{
    /**
     * Register a session to mark user as logged in
     *
     * @param string user User to register
     */
    private function registerSession($user)
    {
        $this->session->set("auth", array(
            "id" => $user->getId(),
            "username" => $user->getUsername(),
        ));
    }

    /**
     * Authenticate a user with username and password by POST
     */
    public function loginAction()
    {
        if ($this->request->isPost()) {
            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");

            $user = User::findByFirstUsername($username);

            if ($user)
            {
                if ($this->security->checkHash($password, $user->getPassword()))
                {
                    $this->registerSession($user);
                    $this->forward("index/index");
                }
            }

            // Notify about wrong username/password
            $this->flash->error("Wrong username/password");
        }

        $this->forward("index/index");
    }

    /**
     * Remove the current session that marks a
     * user as authenticated
     */
    public function logoutAction()
    {
        $this->session->remove("auth");
        $this->forward("index/index");
    }

    /**
     * Register a new user
     */
    public function registerAction()
    {
        if ($this->request->isPost()) {
            $username = $this->request->getPost("username");
            $password = $this->request->getPost("password");
            $firstName = $this->request->getPost("first_name");
            $lastName = $this->request->getPost("last_name");
            $email = $this->request->getPost("email");

            $user = User::findByFirstUsername($username);

            if ($user)
            {
                // Notify that the username is taken
                $this->flash->error("Username is taken");
            }
            else
            {
                $user = new User();
                $user->setUsername($username);
                $user->setPassword($this->security->hash($password));
                $user->setFirstName($firstName);
                $user->setLastName($lastName);
                $user->setEmail($email);
                $user->save();
            }

            $this->forward("index/index");
        }
    }
}
