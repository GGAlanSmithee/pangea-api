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
     * Authenticate a user with username and password
     *
     * @param string username The username of the user to authenticate
     * @param string password The password of the user
     *
     * @return boolean
     */
    public function authenticateAction()
    {
        $message = null;

        if ($this->request->isPost()) {
            $data = $this->getJsonRequest();

            $username = $data->username;
            $password = $data->password;

            $user = User::findByFirstUsername($username);

            if ($user)
            {
                if ($this->security->checkHash($password, $user->getPassword()))
                {
                    $this->registerSession($user);

                    return $this->respondWithStatusCode();
                }
            }

            $message = "Wrong username or password.";
        }

        return $this->respondWithStatusCode(401, message);
    }

    /**
     * Authenticate a user with a token
     *
     * @param string username Username of the user that should be authenticated
     * @param string series The series the token belongs to
     * @param string token The token
     *
     * @return boolean
     */
    public function authenticateWithToken()
    {
        // $data = $this->getJsonRequest();

        // $username = $data->username;
        // $series = $data->series;
        // $token = $data->token;

        // Get the authtoken by username + series
        // from database.
        //
        // If we didn't get a result return false now.
        //
        // If we did get a result, compare
        //     $data->token == $authToken->token
        // We should normally check if the user exists
        // but since a delete on the user should be cascading
        // tokens belonging to the user should be removed
        // when the user is deleted.
        //
        //
        // If they match register the session and return true
        //
        // but
        //
        // If they don't match we have a possible
        // compromized token.
        //
        // This means that we should notify the
        // user about it and invalidate all remembered
        // series for that user to make sure that no
        // one that shouldn't have access to that
        // account has it.

        return $this->respondWithStatusCode(501, "Unimplemented function!");
    }

    /**
     * Deauthenticate the current session that marks a
     * user as authenticated
     *
     * @return void
     */
    public function deauthenticateAction()
    {
        $this->session->remove("auth");

        return $this->respondWithStatusCode();
    }

    /**
     * Register a new user
     *
     * @param string username
     * @param string password
     * @param string first_name
     * @param string last_name
     * @param string email
     *
     * @return boolean
     */
    public function registerAction()
    {
        if ($this->request->isPost())
        {
            $data = $this->getJsonRequest();

            $username = $data->username;
            $password = $data->password;
            $firstName = $data->first_name;
            $lastName = $data->last_name;
            $email = $data->email;

            $user = User::findByFirstUsername($username);

            if ($user)
            {
                // Notify that the username is taken
                return $this->respondWithStatusCode(404, "The username is already in use.");
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

                return $this->respondWithStatusCode(201);
            }
        }

        return $this->respondWithStatusCode(404);
    }
}
