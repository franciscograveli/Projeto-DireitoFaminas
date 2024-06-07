<?php
namespace model;

class User {
    private $users = [
        ['username' => 'teste', 'password' => 'teste', 'id_user' => '1'],
        ['username' => 'user2', 'password' => 'password2', 'id_user' => '1'],
    ];

    public function authenticate($username, $password) {
        foreach ($this->users as $user) {
            if ($user['username'] == $username && $user['password'] == $password) {
                return true;
            }
        }
        return false;
    }
}
?>
