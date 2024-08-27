<?php
class Session
{
    private $userToken;
    
    public function setUserData($userData)
    {
        $_SESSION['user_data'] = $userData;
        $this->userToken = $_SESSION['user_data'];
        return $this->userToken;
    }

    public function test()
    {
        print_r($this->userToken);
    }

    public function logout()
    {
        session_destroy();
    }

    // public function test()
    //     {
    //         print_r($_SESSION['user_data']);
    //     }
}
