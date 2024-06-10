<?php
namespace model;

class User {
    public function authenticate($username, $password) {
        // Carrega os dados do arquivo JSON
        $usersJson = file_get_contents(__DIR__ . '/../assets/bd/users.json');
        $users = json_decode($usersJson, true);

        // Verifica se houve erro ao carregar o JSON
        if ($users === null) {
            throw new \Exception("Erro ao carregar os dados dos usuários.");
        }

        // Itera sobre os usuários para encontrar a correspondência
        foreach ($users['usuarios'] as $user) {
            if ($user['username'] == $username && $user['senha'] == $password) {
                $_SESSION['user-id'] = $user['id_Usuario'];
                return true;
            }
        }
        return false;
    }
}
?>
