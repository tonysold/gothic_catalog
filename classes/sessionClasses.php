<?php
class Session {
    public function __construct() {
        session_start();
    }

    public function setUserData($userData) {
        $_SESSION['user_data'] = $userData;
        print_r($_SESSION['user_data']);
    }

    // public function test()
    //     {
    //         print_r($_SESSION['user_data']);
    //     }
}
